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
                   <li><a href="library.php"class="active">Library</a></li>
                   <li><a href="About.php">About Us</a></li>
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="blog1.php">Blog</a></li>
              </ul>
            </div>   
            </div> 


      <section> 
        <div class="nav">
              <ul>
                   <li><a href="library.php">Library</a></li>
                   <li><a href="sad.php">Sad</a></li>
                   <li><a href="love.php">Love</a></li>
                   <li><a href="classic.php">Classic</a></li>
                   <li><a href="acoustic.php">Acoustic</a></li>
                    <li><a href="reggae.php">Reggae</a></li>
                    <li><a href="rap.php"class="active">Rap</a></li>
                      <li><a href="folk.php">Folk</a></li>
              </ul>
        </div>
        </section>

	</section>
    <?php

        echo "<section class='about'>
            <h1>Rap Song<h1>

          <div class='row'>
            <div class='about-col'>
                <img src='song/rap1.jpg'>
                 <h4>July 28, 2016</h4>
                 <h3>PANDA <br>Flow G ft. Skusta Clee</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src='Music/Flow G ft. Skusta Clee - Panda (REMIX) OFFICIAL MUSIC VIDEO.mp3' type='audio/mpeg'>
                </audio> 
                
            </div>";
                echo" <div class='about-col'>
                <img src='song/rap2.jpg'>
                <h4>Apr 12, 2022 </h4>
                <h3>Treat You Better<br>Jroa</h3>

                 <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Jroa - Treat You Better (Lyrics) _Ilang Beses Mo Na Sinabi Sakin Na Masaya_ [TikTok Song].mp3' type='audio/mpeg'>
                </audio> 
            
                
            </div>";
               echo" <div class='about-col'>
                <img src='song/rap3.jpg'>
                <h4>September 12, 2001</h4>
                 <h3>Banyo Queen <br>Andrew E</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/BANYO QUEEN Andrew E Lyrics.mp3' type='audio/mpeg'>
                </audio> 
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
    ?>
    </body>
    </html>
