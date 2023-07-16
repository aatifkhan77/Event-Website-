<?php

include "./conn.php";
$boolFormSubmit = false;


if(isset($_GET) and isset($_GET["checkEmail"])){
    $email = $_GET["checkEmail"];

    $sql = "SELECT * FROM `userlogin` WHERE `email` = '$email'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff <= 0){
        echo "fail";
        return;
    }else{
        echo "success";
    }

}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $boolFormSubmit = true;

    $email = $_POST["emailCreateTeam"];
    $email = $conn->real_escape_string($email);
    $gamename = $_POST["gamename"];
    $gamename = $conn->real_escape_string($gamename);
    $teamname = $_POST["teamname"];
    $teamname = $conn->real_escape_string($teamname);
    $teamcode = $_POST["teamcode"];
    $teamcode = $conn->real_escape_string($teamcode);
    $leader = $_POST["emailCreateTeam"];
    $leader = $conn->real_escape_string($leader);


// Cehck For Multiple Entries of Single User //
    $sql = "SELECT * FROM `registration` WHERE `email` = '$email' && "; 
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Team Already Exists.";
        return;
    }

        $sql = "INSERT INTO `registration` (`email`,`gamename`,`teamname`,`teamcode`,`leader`) 
                VALUES ('$email','$gamename','$teamname','$teamcode','$leader');" ;


        $conn->query($sql) ;

        $aff = $conn->affected_rows;

        if($aff > 0){
            echo "Success";
        }else{
            echo "Failed";
        }
}

    


    // echo mysqli_error($conn) ;
