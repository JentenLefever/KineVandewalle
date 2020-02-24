
<?php get_header(); ?>

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


    <?php get_footer(); ?>