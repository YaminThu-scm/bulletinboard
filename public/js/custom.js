function showPassword() {
    var x = document.getElementById("myInput");
    var element = document.getElementById("js-password");
    if (x.type === "password") {
        x.type = "text";
        element.classList.add("active");
    } else {
        x.type = "password";
        element.classList.remove("active");
    }
}

function inputClear() {
    document.getElementById("myForm").reset();
}

function goBack() {
    window.history.back();
}

imgInp.onchange = (evt) => {
    const [file] = imgInp.files;
    if (file) {
        showImg.src = URL.createObjectURL(file);
    }
};
