var loginForm;


document.addEventListener("DOMContentLoaded", function (event) {
    loginForm = document.getElementById("loginForm");

    loginForm.getElementsByClassName('focus-element')[0].focus();

    let requiredFields = loginForm.getElementsByClassName("form-required-field");

    for (let index = 0; index < requiredFields.length; index++) {
        requiredFields[index].addEventListener('input', function () {
            basicFieldValidation(this);
        });

        requiredFields[index].addEventListener('blur', function () {
            basicFieldValidation(this);
        });
    }

    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();
        loginAccount(requiredFields);
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


function loginAccount(requiredFields) {
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
        var formData = new FormData(loginForm);

        fetch('../controllers/loginRequest.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                var dataArray = JSON.parse(data);
                if (dataArray.result) {
                    window.location = './home.php';
                } else {
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