<?php


    include "./php/conn.php";
    session_start();

?>


<!DOCTYPE html>
<html lang="en" class="preOverFlow">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glazer Games</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" type="image/x-icon" href="./assets/logo/glazerNavLogo.png">
    <script defer src="./js/index.js"></script>
    <link href="./bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="preOverFlow">
    <div id="preloader">
        <div class="pre1"></div>
        <div class="pre2"></div>
        <div class="pre3"></div>

        <div id="preTitleOut">
            <div id="preTitle"></div>
        </div>
    </div>

    <!-- navigation Bar -->
    <?php include "./php/nav.php" ?>
    
    <div id="main">
        <div id="videoOut">
            <video id="video" playsinline loop muted autoplay>
                <source class="mp4 desktop" src="./assets/Video/game.mp4" type="video/mp4"/>
            </video>
        </div>

        <div id="mainText">
            <div id="mainTextDiv">
                <img src="./assets/logo/glazerLogo.png" id="mainTextLogo" alt="Glazer">
                <p id="mainTextSubtitle">Unleash Your Gaming Potential with Glazer Games</p>
            </div>
            <a href="./registrationPage.php">
                <button class="btn2" id="mainTextBtn"></button>
            </a>
        </div>

    </div>


    <section id="events">
        <div id="eventHDiv">
            <h1>Event</h1>
        </div>
        <div id="eventContainer">
            <div class="eventsInnerBox" id="leftEvent">
            </div>

            <div class="eventsInnerBox" id="midEvent">
                <h1 class="glitch">
                    <span aria-hidden="true">BGMI</span>
                    BGMI
                    <span aria-hidden="true">BGMI</span>
                </h1>

                <div id="eventMidOverlay"></div>
            </div>

            <div class="eventsInnerBox" id="rightEvent">
                <div id="eventDetail">
                    <h1 class="eventH">Time: <span>4:30 PM (IST)</span></h1>
                    <h1 class="eventH">Day: <span>Sunday</span></h1>
                    <a href="./registrationPage.php"> 
                        <button class="btn2"></button>
                    </a>
                </div>
            </div>
        </div>

        <div id="smallEventContainer">
            <div id="smallInnerBox">
                <div>
                    <h1 class="glitch">
                        <span aria-hidden="true">BGMI</span>
                        BGMI
                        <span aria-hidden="true">BGMI</span>
                    </h1>
                    <div id="smallEventDetail">
                        <h1 class="smallEventH">Time: <span>4:30 PM (IST)</span></h1>
                        <h1 class="smallEventH">Day: <span>Sunday</span></h1>
                        <a href="./registrationPage.php">
                            <button class="btn2"></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="aboutus">
        <div>
            <h1 id="aboutush1">About Glazer</h1>
        </div>

        <div id="aboutusBoxOut">
            <div id="aboutusBox">
                <h1 id="aboutusBoxH">"Empowering Game Developers and Gamers Through Decentralized Gaming: Glazer Games"</h1>
                <p id="aboutusBoxP">At Glazer Games, we believe that the gaming industry needs a major transformation to provide a more equitable and transparent ecosystem for game developers, players, and streamers. Our blockchain-based platform enables game developers to publish their games and earn fair compensation for their efforts, while players and streamers can enjoy a seamless gaming experience that prioritizes their privacy and security.

                    Our platform is built on the foundation of decentralized technology, which ensures that every transaction is transparent and immutable, making it easy to track ownership and verify authenticity. This creates a fairer environment for game developers to monetize their creations, while players and streamers benefit from a decentralized ecosystem that offers greater privacy, security, and control over their gaming experience.
                    
                    At Glazer Games, we are also committed to promoting esports professionalism and empowering gamers in India and beyond. We believe that esports has the potential to become a legitimate profession for talented gamers, and we are dedicated to providing the infrastructure and support needed to make this a reality.
                    
                    Join us as we work to transform the gaming industry and create a more equitable and decentralized future for game developers, players, and streamers. With Glazer Games, the future of gaming is here.</p>
            </div>
        </div>
    </section>


    <section id="reach">
        <div class="reachBox">
            <i class="bi bi-discord"></i>
            <h1 class="reachH">8214</h1>
            <p class="reachP">Professional Gamers on Discord</p>
        </div>
        <div class="reachBox">
            <i class="bi bi-graph-up-arrow"></i>
            <h1 class="reachH">1.5 mn</h1>
            <p class="reachP">Impressions Overall</p>
        </div>
        <div class="reachBox">
            <i class="bi bi-controller"></i>
            <h1 class="reachH">18</h1>
            <p class="reachP">Games to be Launched WEB 3 - Skill Based</p>
        </div>
        <div class="reachBox">
            <i class="bi bi-youtube"></i>
            <h1 class="reachH">1.74K</h1>
            <p class="reachP">Subscribers on YouTube 200k + impression</p>
        </div>
        <div id="reachOverlay"></div>
    </section>

    <footer>


        <div class="footerBox">
            <h1 class="footerH">Site-Map</h1>
            <ul class="footerUl">
                <li class="footerLi"><a class="footerA" href="">Home</a></li>
                <li class="footerLi"><a class="footerA" href="">Events</a></li>
                <li class="footerLi"><a class="footerA" href="">About</a></li>
                <li class="footerLi"><a class="footerA" href="">Social</a></li>
                <li class="footerLi"><a class="footerA" href="">Contact us</a></li>
            </ul>
        </div>


        <div class="footerBox">
            <h1 class="footerH">Socials</h1>
            <ul class="footerUl">
                <li class="footerLi">
                    <div>
                        <a class="footerA" href="">Instagram</a><i class="bi bi-instagram"></i>
                    </div>
                </li>
                <li class="footerLi">
                    <div>
                        <a class="footerA" href="">Facebook</a><i class="bi bi-facebook"></i>
                    </div>
                </li>
                <li class="footerLi">
                    <div>
                        <a class="footerA" href="">Discord</a><i class="bi bi-discord"></i>
                    </div>
                </li>
                <li class="footerLi">
                    <div>
                        <a class="footerA" href="">Youtube</a><i class="bi bi-youtube"></i>
                    </div>
                </li>
                <li class="footerLi">
                    <div>
                        <a class="footerA" href="">Twitter</a><i class="bi bi-twitter"></i>
                    </div>
                </li>
            </ul>
        </div>

        <div class="footerBox">
            <h1 class="footerH">Developed by</h1>
            <ul class="footerUl">
                <li class="footerLi"><a class="footerA" target="_blank" href="https://www.linkedin.com/in/aatifkhan77/">Mohd. Aatif Khan</a></li>
                <li class="footerLi"><a class="footerA" target="_blank" href="https://www.linkedin.com/in/fffaheem/">Mohd. Faheem Ahmad</a></li>
                <li class="footerLi"><a class="footerA" target="_blank" href="https://www.linkedin.com/in/khanayanm/">Mohammad Ayan Khan</a></li>
            </ul>
        </div>

    </footer>

</body>
</html>