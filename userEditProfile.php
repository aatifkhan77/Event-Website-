<?php
    include "./php/conn.php";

    session_start();
    if(!(isset($_SESSION) and isset($_SESSION["user"]))){
        header("location: ./loginPage.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Profile </title>

    <!-- For CSS -->
    <link rel="stylesheet" href="css/userEditProfile.css">

</head>

<body>
    <!-- <img src="img/registerBack.jpg" alt="login image" class="login-img"> -->
    
    <!-- For Main Box -->
    <section>

        <!-- For Main Heading -->
        <div class="mainContainer">
            <h2> Edit Profile </h2>

            <!-- For Registration Box -->

            <!-- For Row - 1 -->
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="fname" id="fname" required>
                        <span class="innerHeading"> First Name </span>
                        <span class="innerBox"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="lname" id="lname" required>
                        <span class="innerHeading"> Last Name </span>
                        <span class="innerBox"></span>
                    </div>
                </div>
            </div>

            <!-- For Row - 2 -->
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="dateofbirth" id="dateofbirth" required>
                        <span class="innerHeading"> Date of Birth </span>
                        <span class="innerBox"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="gender" id="gender" required>
                        <span class="innerHeading"> Gender </span>
                        <span class="innerBox"></span>
                    </div>
                </div>
            </div>

            <!-- For Row - 3 -->
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="phoneno" id="phoneno" required>
                        <span class="innerHeading"> Mobile Number </span>
                        <span class="innerBox"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="email" id="email" required>
                        <span class="innerHeading"> Email Address </span>
                        <span class="innerBox"></span>
                    </div>
                </div>
            </div>

            <!-- For Row - 4 -->
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="city" id="city" required>
                        <span class="innerHeading"> City </span>
                        <span class="innerBox"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="state" id="state" required>
                        <span class="innerHeading"> State </span>
                        <span class="innerBox"></span>
                    </div>
                </div>
            </div>

            <!-- For Row - 5 -->
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="aadharno" id="aadharno" required>
                        <span class="innerHeading"> Aadhar Number </span>
                        <span class="innerBox"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="panno" id="panno" required>
                        <span class="innerHeading"> PAN (Optional) </span>
                        <span class="innerBox"></span>
                    </div>
                </div>
            </div>

            <!-- Remove -->
            <!-- <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea name="" id="" cols="30" rows="10" required></textarea>
                        <span class="innerHeading"> Type Your Message Here </span>
                        <span class="innerBox"></span>
                    </div>
                </div>
            </div> -->

            <!-- For Button -->
            <div class="row100">
                <div class="col">
                    <button> REGISTER </button>
                </div>
            </div>

        </div>

    </section>

</body>

</html>