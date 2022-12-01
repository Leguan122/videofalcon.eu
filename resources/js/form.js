window.onSubmit = onSubmit;

function onSubmit(token) {
    console.log(token);
    document.getElementById("msg-form").submit();
}

$("#sendMsg").click(function () {
    console.log("aaaa");
});
