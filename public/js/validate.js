let valuser = document.getElementById("user");
let valemail = document.getElementById("email");
let valpass = document.getElementById("pass");

let error1 = document.getElementById("error1");
let error2 = document.getElementById("error2");
let error3 = document.getElementById("error3");

let btnsignup = document.getElementById("signup");
btnsignup.addEventListener("click", valAlert);

valuser.addEventListener("keyup", validateuser);
valemail.addEventListener("keyup", validateemail);
valpass.addEventListener("keyup", validatepassword);

//validasi alert jika form kosong atau masih terdapat error 
function valAlert(e){
    if (valuser != "" && valemail!="" && valpass !=""){
        if(error1.classList.contains("visShow") ||
        error2.classList.contains("visShow") || 
        error3.classList.contains("visShow")){
            e.preventDefault();
            alert("Wrong Input!");
        }else{
            return true;
        }
    }else{
        alert("Completly Fill The Form");
    }
}

//Username Validation
function validateuser(z){
    let regex = /^[a-zA-Z ]*$/

    if(regex.test(valuser.value) && valuser.value.length >= 3){
        error1.classList.add("visHide");
        error1.classList.remove("visShow");
        return true;
    }
    else{
        error1.classList.remove("visHide");
        error1.classList.add("visShow");
        return true;
    }
}


//Email Validation
function validateemail(z){
    let regex = /^[^\s][a-z0-9.]+@[a-z.]+\.[a-z.]{2,3}$/

    if(regex.test(valemail.value)){
        error2.classList.add("visHide");
        error2.classList.remove("visShow");
        return true;
    }
    else{
        error2.classList.remove("visHide");
        error2.classList.add("visShow");
        return true;
    }
}

//Password Validation
function validatepassword(z){
    if(valpass.value.length >= 8){
        error3.classList.add("visHide");
        error3.classList.remove("visShow");
        return true;
    }
    else{
        error3.classList.remove("visHide");
        error3.classList.add("visShow");
        return true;
}
}