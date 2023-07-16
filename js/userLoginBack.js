let signInBtn = document.getElementById("signInBtn");

signInBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    
    
    let formData = new FormData();
    let useremail = document.getElementById("useremail");
    let password = document.getElementById("loginPass");
    if(useremail.value == "" || password.value == ""){
        alert("Fields Can Not Be Empty.");
        return;
    }

    formData.append("useremail",useremail.value)
    formData.append("password",password.value)

    let url = "./php/userLoginBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        if(data == "success"){
            window.location = "./userDashboard.php";
        }else{

            alert(`${data}!! Please try again`);
        }

        
    }

    xhr.send(formData);


})