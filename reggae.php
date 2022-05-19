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
                    <li><a href="reggae.php"class="active">Reggae</a></li>
                    <li><a href="rap.php">Rap</a></li>
                    <li><a href="folk.php">Folk</a></li>
              </ul>
        </div>
        </section>

	</section>

    <?php


        echo " <section class='about'>
        <h1>Reggae Song<h1>
        
        <div class='row'>
            <div class='about-co'>
                <img src='song/reggae1.jpg'>
                 <h4>May 1, 2021</h4>
                 <h3>I'm Yours  <br>Tropavibes Reggae Cover </h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src='Music/I m Yours - Jason Mraz _ Tropavibes Reggae Cover (Ft. Jason Park).mp3' type='audio/mpeg'>
                </audio> 
                
            </div>";
               echo" <div class='about-col'>
                <img src='song/reggae2.jpg'>
                <h3>One Day<br>Reggae</h3>
                 <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/one day reggae.mp3' type='audio/mpeg'>
                </audio>  
            </div>";

               echo" <div class='about-col'>
                <img src='song/reggae3.jpg'>
                 <h3>Ehu Girl<br> Kolohe Kai</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Throwback Lyrics- Ehu Girl by Kolohe Kai (CGVidz).mp3' type='audio/mpeg'>
                </audio> 
                </div>
    </section>";
    echo"<section class='about1'>
        
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
 
