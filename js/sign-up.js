var signUpForm;

document.addEventListener("DOMContentLoaded", function (event) {
    signUpForm = document.getElementById("signUpForm");

    signUpForm.getElementsByClassName('focus-element')[0].focus();

    let requiredFields = signUpForm.getElementsByClassName("form-required-field");

    for (let index = 0; index < requiredFields.length; index++) {
        requiredFields[index].addEventListener('input', function () {
            basicFieldValidation(this);
        });

        requiredFields[index].addEventListener('blur', function () {
            basicFieldValidation(this);
        });
    }

    signUpForm.addEventListener('submit', function (e) {
        e.preventDefault();

        registerAccount(requiredFields);
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

function registerAccount(requiredFields) {
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
        var data = {
            param1: 'value1',
            param2: 'value2'
        };

        fetch('../controllers/your_php_script.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.text())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });

    } else {
        console.log("Form does not filled as required");
    }
}