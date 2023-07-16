// let addUserBtn = document.getElementById("addAdminBtn");
let form = document.getElementById("addForm");

let emailSignup = document.getElementById("emailSignup");
emailSignup.addEventListener("input",(e)=>{

    let url = `./php/userSignupBack.php?checkEmail=${emailSignup.value}`;
    let xhr = new XMLHttpRequest();

    xhr.open("GET",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        
        if(data=="fail"){
            alert("Email/Mobile Number Already Exists.");    
            emailSignup.value = "";        
        }
        
    }

    xhr.send();

    
})



form.addEventListener("submit",(e)=>{
    e.preventDefault();

    // console.log(`form submit krna hai`);
    
    let name = document.getElementById("name");
    let emailSignup = document.getElementById("emailSignup");
    let password = document.getElementById("signUpPass");
    let confirmPassword = document.getElementById("confirmPass");

    if(name.value == "" || name.value == null){
        alert("Name Field Can Not Be Empty");   
        return;     
    }

    if(emailSignup.value == "" || emailSignup.value == null){
        alert("Email Field Can Not Be Empty");   
        return;     
    }

    if(password.value == "" || password.value == null){
        alert("Password Field Can Not Be Empty");   
        return;     
    }

    if(confirmPassword.value == "" || confirmPassword.value == null){
        alert("Confirm Password Field Can Not Be Empty");   
        return;     
    }

    if(confirmPassword.value != password.value){
        alert("Password Does Not Match.");   
        return;     
    }



    let form = new FormData();
    form.append("name",name.value);
    form.append("email",emailSignup.value);
    form.append("password",password.value);

    let url = "./php/userSignupBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="Success"){
            location.reload();
            
        }else{
            alert(`${data}!!! Please try again`);
        }        
    }

    xhr.send(form);

})
