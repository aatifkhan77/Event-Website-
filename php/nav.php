<?php
$boolLoggedIn = false;


if (!isset($_SESSION)) {
    session_start();    
}

if(isset($_SESSION) and isset($_SESSION['user'])){
    $boolLoggedIn = true;
    $username = $_SESSION['user'];
    $name = $_SESSION['name'];
}



$rightNav = 
"<div id='rightNav'>            
    <Button class='btn' id='signupBtn'> <a style='text-decoration: none; color: inherit;' href='./loginPage.php#addForm'>Sign up</a> </Button>
    <Button class='btn' id='loginBtn'><a style='text-decoration: none; color: inherit;' href='./loginPage.php'>Log in</a> </Button>
</div>";

$smallNav="<a class='smallNavDownElem' href='./loginPage.php' >Log in</a>";


if($boolLoggedIn){
    $rightNav =
    "<div id='rightNav'>            
        <Button class='btn' id='loginBtn'><a style='text-decoration: none; color: inherit;' href='./userDashboard.php'>$name</a> </Button>
    </div>";

    $smallNav="<a class='smallNavDownElem' href='./userDashboard.php' >$name</a>";

}

$nav = "
<div id='navOut'>

<div id='leftNav'>       

    <div id='logo'>
        <a href='./' data-label='home'>
            <img src='./assets/logo/glazerNavLogo.png' alt='Glazer' width='50' height='50'>
        </a>
    </div>


    <nav id='nav'>
        <ul id='navul'>
            <li class='navli'>
                <a href='#'>Home</a>
            </li>
            <li class='navli'>
                <a href='#events'>Events</a>
            </li>
            <li class='navli'>
                <a href='#aboutus'>About</a>
            </li class='navli'>
            <li class='dropDownOut navli' >
                <div class='dropDownArrowOut'>Social</div>
                <div class='dropDownarrow'>
                    <div class='dropDownarrow-top'></div>
                    <div class='dropDownarrow-bottom'></div>
                </div>

                <div class='dropDown'>
                    <ul class='dropDownUl'>
                        <li class='dropDownLi'><a href=''>Instagram</a><i class='bi bi-instagram'></i></li>
                        <li class='dropDownLi'><a href=''>Youtube</a><i class='bi bi-youtube'></i></li>
                        <li class='dropDownLi'><a href=''>Linkedln</a><i class='bi bi-linkedin'></i></li>
                        <li class='dropDownLi'><a href=''>Facebook</a><i class='bi bi-facebook'></i></li>
                    </ul>
                </div>
            </li>
            <li class='navli'>
                <a href='./contactUs.html'>Contact Us</a>
            </li>
        </ul>
    </nav>
</div>

$rightNav

<div id='smallNavUp'>
    <div id='smallLogo'>
        <a href='./' data-label='home'>
            <img src='./assets/logo/glazerNavLogo.png' alt='Glazer' width='50' height='50'>
        </a>
    </div>

    <div id='navMenuIcon'>
        <label class='burger' for='burger'>
            <input type='checkbox' id='burger'>
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
</div>

<div id='smallNavDown'>
    <a class='smallNavDownElem clickable' href='#' >Home</a>
    <a class='smallNavDownElem clickable' href='#events' >Events</a>
    <a class='smallNavDownElem clickable' href='#aboutus' >About us</a>
    <div class='smallNavDownElem' href='' id='social'>Social</div>
    <div class='smallNavDownInner' id='socialMore'>
        <a href=''>Instagram <i class='bi bi-instagram'></i> </a>
        <a href=''>Youtube <i class='bi bi-youtube'></i> </a>
        <a href=''>Linkedin <i class='bi bi-linkedin'></i> </a>
        <a href=''>Facebook <i class='bi bi-facebook'></i> </a>
    </div>
    <a class='smallNavDownElem' href='./contactUs.html' >Contact Us</a>
    $smallNav
</div>


</div>";


echo $nav;

?>