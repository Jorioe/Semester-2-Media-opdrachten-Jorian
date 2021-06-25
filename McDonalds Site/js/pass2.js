    var firstPasswordInput = document.querySelector('#password3');
    var submit = document.querySelector('#submit');

    submit.onclick = function () {

        var password = firstPasswordInput; 

    if (password.value !== ) {
        confirmPassword.setCustomValidity("Wachtwoord komt niet overeen");
  } else {
    confirmPassword.setCustomValidity("");

    }
}