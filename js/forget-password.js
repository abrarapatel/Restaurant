var forgotPwdForm;


document.addEventListener("DOMContentLoaded", function (event) {
    forgotPwdForm = document.getElementById("forgotPwdForm");

    forgotPwdForm.getElementsByClassName('focus-element')[0].focus();

    let requiredFields = forgotPwdForm.getElementsByClassName("form-required-field");

    for (let index = 0; index < requiredFields.length; index++) {
        requiredFields[index].addEventListener('input', function () {
            basicFieldValidation(this);
        });

        requiredFields[index].addEventListener('blur', function () {
            basicFieldValidation(this);
        });
    }

    forgotPwdForm.addEventListener('submit', function (e) {
        e.preventDefault();
        forgotPwdAccountSendMail(requiredFields);
    });
});


function basicFieldValidation(element) {
    var finalReturn = false;
    var statusIconExist = element.previousElementSibling;

    if (statusIconExist.classList.contains('field-status-icon')) {
        statusIconExist.remove();
    }

    var statusIcon = document.createElement('i');
    statusIcon.classList.add('fa', 'field-status-icon');

    var dataPattern;
    var patternMatched = true;
    if (element.hasAttribute('data-pattern')) {
        var dataPatternString = "" + element.getAttribute('data-pattern');
        dataPattern = new RegExp(dataPatternString);
        patternMatched = dataPattern.test(element.value);
    }

    if (element.value == "") {
        statusIcon.classList.add('fa-close', 'wrong');
    } else if (!patternMatched) {
        statusIcon.classList.add('fa-close', 'wrong');
    } else {
        finalReturn = true;
        statusIcon.classList.add('fa-check', 'correct');
    }
    element.parentNode.insertBefore(statusIcon, element);

    return finalReturn;
}


function forgotPwdAccountSendMail(requiredFields) {
    var finalReturn = true;

    for (let index = 0; index < requiredFields.length; index++) {
        var returnVal = basicFieldValidation(requiredFields[index]);

        if (!returnVal) {
            finalReturn = returnVal;
            requiredFields[index].style.borderColor = 'red';
        } else {
            requiredFields[index].style.borderColor = 'black';
        }
    }

    if (finalReturn) {
        var formData = new FormData(forgotPwdForm);
        document.getElementById("accessFormContainer").style.display = 'none';
        document.getElementById("afterSendMailWaitContainer").style.display = 'block';

        fetch('../controllers/forgotPwdRequest.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                var dataArray = JSON.parse(data);
                document.getElementById("afterSendMailWaitContainer").style.display = 'none';
                if (dataArray.result) {
                    document.getElementById("afterSendMailContainer").style.display = 'block';
                } else {
                    document.getElementById("accessFormContainer").style.display = 'block';
                    var errorList = document.getElementById('errorList');
                    errorList.innerHTML = `<li>${dataArray.message}</li>`;
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

    } else {
        console.log("Form does not filled as required");
    }
}