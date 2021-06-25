    var firstPasswordInput = document.querySelector('#password');
    var secondPasswordInput = document.querySelector('#password2');
    var submit = document.querySelector('#submit');

    submit.onclick = function () {

        var password = firstPasswordInput;
        var confirmPassword = secondPasswordInput; 

    if (password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity("Wachtwoord komt niet overeen");
  } else {
    confirmPassword.setCustomValidity("");

    }
}