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
                   <li><a href="acoustic.php"class="active">Acoustic</a></li>
                    <li><a href="reggae.php">Reggae</a></li>
                    <li><a href="rap.php">Rap</a></li>
                    <li><a href="folk.php">Folk</a></li>
              </ul>
        </div>
        </section>

	</section>

       <?php
        echo"<section class= 'about'>";
        echo" <h1>Acoustic Song<h1>";
        
        echo" <div class='row'>
              <div class='about-col'>
                <img src='song/acoustic1.jpg'>
                 <h4>Jan 13, 2017</h4>
                  <h3>Hollow Coves <br>Coastline </h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src='Music/Hollow Coves - Coastline (Lakeside Acoustic Session).mp3' type='audio/mpeg'>
                </audio> 
                
            </div>
                <div class='about-col'>
                <img src='song/acoustic2.jpg'>
                <h4>April 24, 2017</h4>
                <h3>Demonyo<br>Juan Karlos</h3>

                <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/juan karlos - Demonyo (Redefined).mp3' type='audio/mpeg'>
                </audio> 
            
                
            </div>
                <div class='about-col'>
                <img src='song/acoustic3.jpg'>
                 <h3>Nobela <br>Acoustic Cover</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Nobela (Acoustic Cover).mp3' type='audio/mpeg'>
                </audio> 
                </div>
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

               </div>

                <div class='about-col1'>
                <img src='song/acoustic5.jpg'>
                 <h3>Heaven<br>Boyce Avenue feat. Megan Nicole acoustic cover</h3>
               
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Heaven - Bryan Adams (Boyce Avenue feat. Megan Nicole acoustic cover) on Spotify & Apple.mp3' type='audio/mpeg'>
                </audio> 

               </div>

               <div class='about-col1'>
                <img src='song/acoustic6.jpg'>
                 <h3>I’ll Never Go<br>Arthur Miguel (covered)</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/I ll Never Go .mp3' type='audio/mpeg'>
                </audio> 
               </div>
           </div>
    </section>";
    ?>
 </body>
 </html>
