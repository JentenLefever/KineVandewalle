<!DOCTYPE html>
<html id="htmlpage">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - bedrijf</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="Styles/style.css" rel="stylesheet" />
    <link href="Styles/burgermenu.css" rel="stylesheet" />
    <link href="Styles/Card.css" rel="stylesheet" />
    <link href="Styles/Contact.css" rel="stylesheet" />

    <script src="JS/script-burgermenu.js"></script>
</head>
<body>
    <header class="nav-desktop">
        <div class="logocontainer">
            <a id="logo-desktop" href="index.html">
                <div class="logo">
                    <img src="Images/logo.svg" alt="Logo" class="logoimg">
                </div>
                <p class="logotext">NaamBedrijf</p>
            </a>
        </div>        
        <div class="menucontainer">
            <ul>
                <li>
                    <a>Contact</a>
                </li>

                <li>
                    <a>Info</a>
                </li>
                <li>
                    <a class="active-desktop" href="index.html">Home</a>
                </li>
            </ul>
        </div>
    </header>
    <header class="nav-mobile">
        <div class="window">
            <div class="header">
                <div id="mobile-logo" class="logocontainer">
                    <a href="index.html">    
                        <div class="logo">
                            <img src="Images/logo.svg" alt="Logo" class="logoimg"> 
                           
                        </div>      
                        <p   class="logotext">NaamBedrijf</p>                                          
                    </a>
                </div> 
                <div class="burger-container">
                    <div id="burger">
                    <div class="bar topBar"></div>
                    <div class="bar btmBar"></div>
                    </div>
                </div>              
                <ul class="menu">                
                    <li style="margin-top: 5.7rem;" class="menu-item">
                        <a class="active-mobile" href="index.html">Home</a>
                    </li>               
                    <li class="menu-item">
                        <a href="index.html">Info</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html">Contact</a>
                    </li>
                </ul>                    
          </div>
    </header>