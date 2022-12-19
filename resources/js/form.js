window.onSubmit = onSubmit;
window.captchaError = captchaError;

function onSubmit(token) {

    if ($('#input_name').val() == "") {
        $("#warn_name").removeClass('invisible');
        alert("Meno je povinné");
    }else {
        $("#warn_name").addClass('invisible');
    }
    if ($('#input_email').val() == "") {
        alert("Email je povinný");
        $("#warn_email").removeClass('invisible');
    }else {
        $("#warn_email").addClass('invisible');
    }
    if ($('#input_msg').val() == "") {
        alert("Správa je povinná je povinná");
        $("#warn_msg").removeClass('invisible');
    }else {
        $("#warn_msg").addClass('invisible');
    }

    if ($('#input_name').val() == "" || document.getElementById("input_email").value === "" || document.getElementById("input_msg").value === ""){
    } else {
        console.log("Sending");
        document.getElementById("msg-form").submit();
    }
}

function captchaError(e) {
    console.log(e);
}
