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
  <title> Registration </title>

  <!-- For External CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>

  <!-- For Internal CSS -->
  <link rel="stylesheet" href="./css/registrationPage.css">

</head>

<body>

  <!-- For Main Box -->
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">

            <!-- For Heading Section -->
            <h6 class="mb-0 pb-3"><span> Create Team </span><span> Join Team </span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>

            <!-- For Form Box -->
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">

                <!-- For Create Team Section -->
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3"> Create Team </h4>

                      <div class="form-group">
                        <input type="email" name="emailCreateTeam" id="emailCreateTeam" class="form-style" placeholder="Your Email" 
                          autocomplete="off" required>
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="text" name="gamename" id="gamename" class="form-style" placeholder="In-Game Name"
                           autocomplete="off" required>
                        <i class="input-icon uil-user"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="text" name="teamname" id="teamname" class="form-style" placeholder="Team Name"
                           autocomplete="off" required>
                        <i class="input-icon uil-users-alt"></i>
                      </div>

                      <a href="#" class="btn mt-4" id="createTeamBtn"> Create </a>

                    </div>
                  </div>
                </div>

                <!-- For Join Team Section -->
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3"> Join Team </h4>

                      <div class="form-group">
                        <input type="email" name="emailJoinTeam" id="emailJoinTeam" class="form-style" placeholder="Your Email" 
                          autocomplete="off" required>
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="text" name="gamenameJoin" id="gamenameJoin" class="form-style" placeholder="In-Game Name"
                           autocomplete="off" required>
                        <i class="input-icon uil-user"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="text" name="teamnameJoin" id="teamnameJoin" class="form-style" placeholder="Team Name"
                           autocomplete="off" required>
                        <i class="input-icon uil-users-alt"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="text" name="teamcode" id="teamcode" class="form-style" placeholder="Team Code"
                           autocomplete="off" required>
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>

                      <a href="#" class="btn mt-4" id="joinTeamBtn">submit</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- For JavaScript -->
  <script src="./js/createTeamBack.js"></script>
  <script src="./js/joinTeamBack.js"></script>

</body>

</html>