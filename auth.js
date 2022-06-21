function loginForm(){
    $(".form-1").classList.remove("active");
    $(".form-2").classList.add("active");
}

function registerForm(){
    $(".form-1").classList.add("active");
    $(".form-2").classList.remove("active");
}

function $(e){
    return document.querySelector(e);
}