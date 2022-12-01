window.onSubmit = onSubmit;
window.captchaError = captchaError;

function onSubmit(token) {

    if (document.getElementById("input_name").value === "" || document.getElementById("input_email").value === "" || document.getElementById("input_msg").value === ""){

        if (document.getElementById("input_name").value === "") {

        }
        if (document.getElementById("input_email").value === "") {

        }


    } else {
        document.getElementById("msg-form").submit();
    }
}

function captchaError(e) {
    console.log(e);
}



$("#sendMsg").click(function () {
    console.log("aaaa");
});
