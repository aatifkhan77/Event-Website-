let submitBtn = document.getElementById("submitBtn");


submitBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let phoneno = document.getElementById("phoneno");
    let message = document.getElementById("message");


    if(name.value == "" || name.value == null){
        alert("Name Field can Not Be Empty.");   
        return;     
    }

    if(email.value == "" || email.value == null){
        alert("E-mail Field can Not Be Empty.");   
        return;     
    }

    if(phoneno.value == "" || phoneno.value == null){
        alert("Phone Number Field can Not Be Empty.");   
        return;     
    }

    if(message.value == "" || message.value == null){
        alert("Message Field can Not Be Empty");   
        return;     
    }



    let form = new FormData();
    form.append("name",name.value);
    form.append("email",email.value);
    form.append("phoneno",phoneno.value);
    form.append("message",message.value);

    let url = "./php/contactBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="success"){
            alert(`We will Revert Back to You Shortly!!!`);
            location.reload();
            
        }else{
            alert(`${data}!!! Please try again`);
        }        
    }

    xhr.send(form);

})
