<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Sputnik Music</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
	 <section class="banner">
		<div class="navbar">
           <img src="media/Picture3.png" class="logo">
            <div class="nav-links" id="navLinks">
               <ul>
                   <li><a href="index.php" >Home</a></li>
                   <li><a href="library.php">Library</a></li>
                   <li><a href="About.php">About Us</a></li>
                   <li><a href="contact.php"class="active">Contact</a></li>
                   <li><a href="blog1.php">Blog</a></li>
              </ul>
            </div>   
            </div> 

      <section> 
        <div class="nav">
              <ul>
                   <li><a href="library.php"class="active">Library</a></li>
                   <li><a href="sad.php">Sad</a></li>
                   <li><a href="love.php">Love</a></li>
                   <li><a href="classic.php">Classic</a></li>
                   <li><a href="acoustic.php">Acoustic</a></li>
                    <li><a href="reggae.php">Reggae</a></li>
                    <li><a href="rap.php">Rap</a></li>
                    <li><a href="folk.php">Folk</a></li>
              </ul>
        </div>
        </section>

	</section>
    <?php

       echo " <section class='about'>";
       echo"  <h1>Top Featured Song<h1>";
        
       echo" <div class='row'>
               <div class='about-col'>
                <img src='song/latest1.jpg'>
                 <h4>December 27, 2021</h4>
                  <h3>KAGOME <br> Lo Ki</h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src='Music/Lo Ki - Kagome (Official Music Video).mp3' type='audio/mpeg'>
                </audio> 
                
            </div>";
                echo" <div class='about-col'>
                      <img src='song/latest2.jpg'>
                        <h4>April 7, 2019</h4>
                           <h3>HULING SANDALI <br> December Avenue</h3>

                          <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Huling Sandali.mp3' type='audio/mpeg'>
                </audio> 
            </div>";

                echo" <div class='about-col'>
                   <img src='song/latest3.jpg'>
                      <h4>September 17, 2019</h4>
                         <h3>Kung Di' Na Ako <br> Agsunta</h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Kung 'Di Na Ako - Agsunta - Lyrics.mp3' type='audio/mpeg'>
                </audio> 
                </div>
    </section>";
    echo" <section class='about1'>
        
            <div class='row1'>
                <div class='about-col1'>
                <img src='song/latest5.jpg'>
                <h4>April 14, 2015</h4>
                 <h3>IMAGINATION<br>Shawn Mendez</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Shawn Mendes - Imagination (Audio).mp3' type='audio/mpeg'>
                </audio> 

               </div>";

               echo" <div class='about-col1'>
                <img src='song/latest6.jpg'>
                <h4>May 27, 2008</h4>
                 <h3>TONIGHT<br>Fm Static</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/FM Static - TONIGHT _ Moon Lyrics.mp3' type='audio/mpeg'>
                </audio> 

               </div>";

              echo"  <div class='about-col1'>
                <img src='song/latest8.jpg'>
                <h4>Apr 23, 2022</h4>
                 <h3>SUN AND MOON<br>Anees</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Anees - Sun and Moon (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>
           </div>
    </section>
    </section>";

      echo" <section class='about1'>
        
            <div class='row1'>
                <div class='about-col1'>
                <img src='song/acoustic4.jpg'>
                <h4>February 10, 2010</h4>
                 <h3>Crazier<br>Cover by Arthur Miguel</h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Crazier (Taylor Swift) cover by Arthur Miguel.mp3' type='audio/mpeg'>
                </audio> 

               </div>";

               echo" <div class='about-col1'>
                <img src='song/acoustic5.jpg'>
                 <h3>Heaven<br>Boyce Avenue feat. Megan Nicole acoustic cover</h3>
               
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Heaven - Bryan Adams (Boyce Avenue feat. Megan Nicole acoustic cover) on Spotify & Apple.mp3' type=audio/mpeg'>
                </audio> 

               </div>";

               echo" <div class='about-col1'>
                <img src='song/acoustic6.jpg'>
                 <h3>I’ll Never Go<br>Arthur Miguel (covered)</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/I ll Never Go .mp3' type='audio/mpeg'>
                </audio> 
               </div>
           </div>
    </section>";

    echo" <section class='about1'>
        
            <div class='row1'>
                <div class='about-col1'>
                <img src='song/classic4.jpg'>
                <h4>February 10, 2010</h4>
                 <h3>The Gift (Lyrics)<br>Collin Raye & Susan Ashton</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Jim Brickman - The Gift (Lyrics) ft. Collin Raye & Susan Ashton.mp3' type='audio/mpeg'>
                </audio> 

               </div>";

                echo" <div class='about-col1'>
                <img src='song/classic5.jpg'>
                 <h3>Destiny<br>Jim Brickman</h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Destiny - Jim Brickman (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>";

               echo" <div class='about-col1'>
                <img src='song/classic6.jpg'>
                 <h3> The Past<br>Jed Madela</h3> 
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Jed Madela - The Past (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>
           </div>
    </section>";
   echo" <section class='about1'>
        
            <div class='row1'>
                <div class='about-col1'>
                <img src='song/rap4.jpg'>
            
                 <h3>Talk To Me<br>Tory Lanez, Rich The Kid</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Tory Lanez, Rich The Kid - Talk To Me (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>";

              echo" <div class='about-col1'>
                <img src='song/rap5.jpg'>
    
                 <h3>GOD'S PLAN <br>Drake </h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Drake - GOD'S PLAN (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>";

               echo" <div class='about-col1'>
                <img src='song/rap6.jpg'>
                 <h3>Explicit<br>Eminem </h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Eminem - Rap God (Explicit).mp3' type='audio/mpeg'>
                </audio> 

               </div>
           </div>
    </section>";
      echo"  <section class='about1'>
        
            <div class='row1'>
                <div class='about-col1'>
                <img src='song/reggae4.jpg'>
   
                 <h3>Kanlungan<br>TropaVibes Reggae</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Kanlungan - TropaVibes Reggae Cover.mp3' type='audio/mpeg'>
                </audio> 

               </div>";

                echo" <div class='about-col1'>
                <img src='song/reggae5.jpg'>
                 <h3>Himig ng Pag ibig <br> Reggae Version</h3>
               
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Himig ng Pag ibig - Reggae Version.mp3' type='audio/mpeg'>
                </audio> 

               </div>";

              echo" <div class='about-col1'>
                <img src='song/reggae6.jpg'>
                 <h3> Wonderful Tonight<br>Eric Clapton</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Eric Clapton - Wonderful Tonight _ Tropavibes Reggae Cover.mp3' type='audio/mpeg'>
                </audio> 
               </div>
           </div>
    </section>";
    ?>


</body>
</html>

