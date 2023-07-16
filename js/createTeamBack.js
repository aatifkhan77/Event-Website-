let createTeamBtn = document.getElementById("createTeam");

let emailCreateTeam = document.getElementById("emailCreateTeam");
emailCreateTeam.addEventListener("input",(e)=>{

    let url = `./php/userSignupBack.php?checkEmail=${emailCreateTeam.value}`;
    let xhr = new XMLHttpRequest();

    xhr.open("GET",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        
        if(data=="fail"){
            alert("Email Does Not Match.");    
            emailSignup.value = "";        
        }

        // else{}
        
    }

    xhr.send();

})


// If the Email Matches then Only Procced with Create Team bs dekhna hai login wala aadmi hi team bna rha h apne account se ----   upr if-else mein lagana hai isee//
form.addEventListener("submit",(e)=>{
    e.preventDefault();

    // console.log(`form submit krna hai`);
    
    let emailCreateTeam = document.getElementById("emailCreateTeam");
    let gamename = document.getElementById("gamename");
    let teamname = document.getElementById("teamname");

    if(emailCreateTeam.value == "" || emailCreateTeam.value == null){
        alert("Email Field Can Not Be Empty");   
        return;     
    }

    if(gamename.value == "" || gamename.value == null){
        alert("In-Game Name Field Can Not Be Empty");   
        return;     
    }

    if(teamname.value == "" || teamname.value == null){
        alert("Team Name Field Can Not Be Empty");   
        return;     
    }



    let form = new FormData();
    form.append("emailCreateTeam",emailCreateTeam.value);
    form.append("gamename",gamename.value);
    form.append("teamname",teamname.value);

// For Team Code Using Random Funtion//
    // form.append("teamcode",teamcode.value);



    form.append("leader",emailCreateTeam.value);

    let url = "./php/createTeamBack.php";
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
