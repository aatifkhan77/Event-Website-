let joinTeamBtn = document.getElementById("joinTeamBtn");

let emailJoinTeam = document.getElementById("emailJoinTeam");
emailJoinTeam.addEventListener("input",(e)=>{

    let url = `./php/createTeamBack.php?checkEmail=${emailJoinTeam.value}`;
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
    
    let emailJoinTeam = document.getElementById("emailJoinTeam");
    let gamenameJoin = document.getElementById("gamenameJoin");
    let teamnameJoin = document.getElementById("teamnameJoin");
    let teamcode = document.getElementById("teamcode");

    if(emailJoinTeam.value == "" || emailJoinTeam.value == null){
        alert("Email Field Can Not Be Empty");   
        return;     
    }

    if(gamenameJoin.value == "" || gamenameJoin.value == null){
        alert("In-Game Name Field Can Not Be Empty");   
        return;     
    }

    if(teamnameJoin.value == "" || teamnameJoin.value == null){
        alert("Team Name Field Can Not Be Empty");   
        return;     
    }

    if(teamcode.value == "" || teamcode.value == null){
        alert("Team Code Field Can Not Be Empty");   
        return;     
    }



    let form = new FormData();
    form.append("emailJoinTeam",emailJoinTeam.value);
    form.append("gamenameJoin",gamenameJoin.value);
    form.append("teamnameJoin",teamnameJoin.value);
    form.append("teamcode",teamcode.value);


    let url = "./php/joinTeamBack.php";
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
