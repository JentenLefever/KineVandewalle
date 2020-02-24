<?php /* Template Name: Testindex */ ?>


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




    <div class="topcontent">
    <video autoplay muted loop class="topvideo">
        <source src="Images/TopVideo.mp4" type="video/mp4">
    </video>
    <div class="videocontent">
        <h1>Berijfsnaam</h1>
         <p class="infotopcontent">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de stand</p>
         
         <button>More info</button>

    </div>  
    </div>

    
    <div id="" class="MainContainer width70">

            <div class="ContentBlock1"> 
                <div class="split40">
                    
            <h1>Berijfsnaam</h1>
         <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de stand</p>
         
         <button>More info</button>

                </div>
                <div class="split60">
                        <video autoplay muted loop class="ContentBlockVideo">
                                <source src="Images/TopVideo.mp4" type="video/mp4">
                        </video>
                </div>
            </div>

            <div class="ContentBlock1"> 
                
                <div class="split60">
                        <video autoplay muted loop class="ContentBlockVideo">
                                <source src="Images/TopVideo.mp4" type="video/mp4">
                        </video>
                </div>

                <div class="split40" style="text-align: right !important;">
                    
                    <h1>Berijfsnaam</h1>
                 <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de stand</p>
                 
                 <button>More info</button>
        
                        </div>
            </div>

            <div class="ContentBlock1"> 
                
                <div class="split50">
                        <video autoplay muted loop class="ContentBlockVideo">
                                <source src="Images/TopVideo.mp4" type="video/mp4">
                        </video>
                </div>

                <div class="split50" style="text-align: right !important;">
                    
                    <h1>Berijfsnaam</h1>
                 <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de stand</p>
                 
                 <button>More info</button>
        
                        </div>
            </div>



        <div class="CardContainer">
                <div class="card">
                        <div class="content">
                          <h2 class="title">Mountain View</h2>
                          <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
                          <button class="btn">View Trips</button>
                        </div>
                      </div>
                      <div class="card">
                        <div class="content">
                          <h2 class="title">To The Beach</h2>
                          <p class="copy">Plan your next beach trip with these fabulous destinations</p>
                          <button class="btn">View Trips</button>
                        </div>
                      </div>
                      <div class="card">
                        <div class="content">
                          <h2 class="title">Desert Destinations</h2>
                          <p class="copy">It's the desert you've always dreamed of</p>
                          <button class="btn">Book Now</button>
                        </div>
                      </div>
                      <div class="card">
                        <div class="content">
                          <h2 class="title">Explore The Galaxy</h2>
                          <p class="copy">Seriously, straight up, just blast off into outer space today</p>
                          <button class="btn">Book Now</button>
                        </div>
                      </div>
        </div>


        <div class="ContactContainer">
                

                      
                        
                      
            <!---------------- 
        
              CONTACT PAGE LEFT 
            
              ----------------->
              <div class="form-horizontal">
                  <h1>Write Us</h1>
                  <hr class="halflineContact">
                             
                  <div class="infoContact">
                      
                      <a href="mailto:email@example.com">email@bedrijf.com</a> <br>
                      <a href="tel:123-456-7890">+32 499 46 18 24</a>
                  </div>

                  <div class="adresContact">
                      <h5>Brugge</h5>
                      <p>314Architectuur</p>
                      <p>ezelstraat 12 </p>
                      <p>8000 Brugge</p>
                  </div>

                  <hr width="100%" style="float: left;">
                  
              </div>


               <!---------------- 
        
              CONTACT PAGE RIGHT 
            
              ----------------->
        

            <form class="form-horizontal" role="form" method="post" action="contact.php">
        
              <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
              </div>
        
              <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
              </div>

              <div class="form-group">
                  <input type="tel" class="form-control" id="tel" placeholder="Phone" name="tel" value="">
              </div>
        
              <textarea class="form-control message" rows="10" placeholder="MESSAGE" name="message"></textarea>
        
              <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                <div class="button">
                  <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                </div>
        
              </button>
        
            </form>
        
           
            
        
          </div>
          

        <div class="ReviewContainer">

        </div>
        <div class="ContactContainer">
            <p>ContactContainer Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.</p>
        </div>
    </div>
    <footer class="">
        <div class="footercontainer">
            <div class="footerlogocontainer">
                <img src="Images/logo.svg" alt="Logo" class="logofooter">
            </div>
            <div class="footerinfocontainer">
                <h4>naam bedrijf</h4>
            </div>
            <div class="socialsContainer">
                <img src="Images/Facebook.png" alt="Logo" class="sociallogo">
                <img src="Images/Instagram.png" alt="Logo" class="sociallogo">
            </div>
        </div>
        <div class="footercontainer">
            
            <div class="adresfootercontainer">
                <h4>Adres</h4>
                <address>
                    <p>kronkelstraat 67</p>
                    <p>8793 Waregem</p>
                    <p>Belgie</p>
                </address>
            </div>
        </div>
        <div class="footercontainer">
            <div class="adresfootercontainer">
                <h4>Contacteer ons</h4>
                <p>info@lol.be</p>
                <p>0499440404044</p>
            </div>
        </div>
    </footer>
</body>
</html>
