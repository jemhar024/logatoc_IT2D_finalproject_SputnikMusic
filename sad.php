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
                   <li><a href="sad.php"class="active">Sad</a></li>
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
       echo"  <section class='about'>
        <h1>Sad Song<h1>

          <div class='row'>
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
                <img src='song/sad1.jpg'>
                <h4>December 22, 2020</h4>
                 <h3>Pagsisi <br>Bandang Lapis</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Pagsisisi - Bandang Lapis (Official Lyric Video).mp3'>
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
                <img src='song/sad2.jpg'>
                <h4>May 27, 2008</h4>
                 <h3>Let Her Go<br>Music Travel Love </h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Let Her Go - Music Travel Love (Passenger Cover).mp3' type='audio/mpeg'>
                </audio> 

               </div>";

              echo" <div class='about-col1'>
                <img src='song/sad3.jpg'>
                <h4>April 28, 2017 </h4>
                 <h3>Dandelions<br>Ruth B.</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Ruth B. - Dandelions (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>
           </div>
    </section>";
?>
</body>
</html>