var createNewPasswordForm;

var url = new URL(window.location.href);
var recoveryCode = url.searchParams.get("recoveryCode");

if (recoveryCode) {
    var formData = new FormData();
    formData.append('recoveryCode', recoveryCode);

    fetch('../controllers/checkRecoveryCode.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            var dataArray = JSON.parse(data);
            if (!dataArray.result) {
                document.getElementById("accessFormContainer").style.display = 'none';
                document.getElementById("linkExpiredShow").style.display = 'block';
                document.getElementById("linkExpiredShow").innerHTML = '<h3>' + dataArray.message + '</h3>';
            } else {
                document.getElementById('accid').value = dataArray.accid;
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
} else {
    window.location = './home.php';
}

document.addEventListener("DOMContentLoaded", function (event) {
    createNewPasswordForm = document.getElementById("createNewPasswordForm");

    createNewPasswordForm.getElementsByClassName('focus-element')[0].focus();

    let requiredFields = createNewPasswordForm.getElementsByClassName("form-required-field");

    for (let index = 0; index < requiredFields.length; index++) {
        requiredFields[index].addEventListener('input', function () {
            basicFieldValidation(this);
        });

        requiredFields[index].addEventListener('blur', function () {
            basicFieldValidation(this);
        });
    }

    createNewPasswordForm.addEventListener('submit', function (e) {
        e.preventDefault();

        createNewPassword(requiredFields);
    });

    document.getElementById('pwd').addEventListener('input', function () {
        pwdVerification(this);
        verifyRtPwd(document.getElementById('rtpwd'));
    });

    document.getElementById('rtpwd').addEventListener('input', function () {
        verifyRtPwd(this);
    });

    document.getElementById('rtpwd').addEventListener('blur', function () {
        verifyRtPwd(this);
    });

    document.getElementById('rtpwd').addEventListener('focus', function () {
        verifyRtPwd(this);
    });
});

function verifyRtPwd(element) {
    var finalReturn = false;
    var statusIconExist = element.previousElementSibling;

    if (statusIconExist.classList.contains('field-status-icon')) {
        statusIconExist.remove();
    }

    var statusIcon = document.createElement('i');
    statusIcon.classList.add('fa', 'field-status-icon');

    var pwd = document.getElementById("pwd");

    var rtPwdStatus = document.getElementsByClassName('retype-password-status-container')[0];

    if (element.value == "") {
        statusIcon.classList.add('fa-close', 'wrong');
        rtPwdStatus.getElementsByClassName('rtp-mat')[0].classList.remove('full-filled');
    } else if (element.value != pwd.value) {
        statusIcon.classList.add('fa-close', 'wrong');
        rtPwdStatus.getElementsByClassName('rtp-mat')[0].classList.remove('full-filled');
    } else {
        finalReturn = true;
        statusIcon.classList.add('fa-check', 'correct');
        rtPwdStatus.getElementsByClassName('rtp-mat')[0].classList.add('full-filled');
    }
    element.parentNode.insertBefore(statusIcon, element);
    return finalReturn;
}

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

function pwdVerification(element) {
    var passwordStatusShower = document.getElementsByClassName('password-status-container')[0];

    var capitalRegex = /[A-Z]/;

    if (capitalRegex.test(element.value)) {
        passwordStatusShower.getElementsByClassName("1-cap")[0].classList.add('full-filled');
    } else {
        passwordStatusShower.getElementsByClassName("1-cap")[0].classList.remove('full-filled');
    }

    var lowerRegex = /[a-z]/;

    if (lowerRegex.test(element.value)) {
        passwordStatusShower.getElementsByClassName("1-low")[0].classList.add('full-filled');
    } else {
        passwordStatusShower.getElementsByClassName("1-low")[0].classList.remove('full-filled');
    }

    var numberRegex = /\d/;

    if (numberRegex.test(element.value)) {
        passwordStatusShower.getElementsByClassName("1-num")[0].classList.add('full-filled');
    } else {
        passwordStatusShower.getElementsByClassName("1-num")[0].classList.remove('full-filled');
    }

    var specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;

    if (specialCharRegex.test(element.value)) {
        passwordStatusShower.getElementsByClassName("1-@")[0].classList.add('full-filled');
    } else {
        passwordStatusShower.getElementsByClassName("1-@")[0].classList.remove('full-filled');
    }

    if (element.value.length >= 8) {
        passwordStatusShower.getElementsByClassName("min-8")[0].classList.add('full-filled');
    } else {
        passwordStatusShower.getElementsByClassName("min-8")[0].classList.remove('full-filled');
    }
}

function createNewPassword(requiredFields) {
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

    var returnVal = verifyRtPwd(document.getElementById('rtpwd'));

    if (!returnVal) {
        finalReturn = returnVal;
        document.getElementById('rtpwd').style.borderColor = 'red';
    } else {
        document.getElementById('rtpwd').style.borderColor = 'black';
    }

    if (finalReturn) {
        var formData = new FormData(createNewPasswordForm);

        fetch('../controllers/createNewPasswordRequest.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                var dataArray = JSON.parse(data);
                if (dataArray.result) {
                    document.getElementById("accessFormContainer").style.display = 'none';
                    document.getElementById("linkExpiredShow").style.display = 'block';
                    document.getElementById("linkExpiredShow").innerHTML = '<h3>' + dataArray.message + '</h3><h4>Redirecting to login page</h4>';

                    setTimeout(() => {
                        window.location = './login.php';
                    }, 3000);
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