function redirecttoregister() {
    location.href = 'register.php';
}

function validate() {
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-] { 0, 66 })\.([a - z] { 2, 6 }( ? : \.[a - z] { 2 }) ? ) $ /
    i

    function validate(form) {
        var email = form.email.value;
        var password = form.password.value;
        var errors = [];

        if (!ck_email.test(email)) {
            errors[errors.length] = "You must enter a valid email address.";
        }

        if (password == '') {
            errors[errors.length] = "You must enter the password ";
        }

        if (errors.length > 0) {
            reportErrors(errors);
            return false;
        }
        return true;
    }

    function reportErrors(errors) {
        var msg = "Please Enter Valide Data...\n";
        for (var i = 0; i < errors.length; i++) {
            var numError = i + 1;
            msg += "\n" + numError + ". " + errors[i];
        }
        alert(msg);
    }
}