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
                    <li><a href="rap.php">Rap</a></li>
                     <li><a href="folk.php"class="active">Folk</a></li>
              </ul>
        </div>
        </section>

	</section>

         <section class="about">
        <h1>Folk Song<h1>

        <?php

          echo" <div class='row'>";
          echo" <div class='about-col'>";
          echo" <img src='song/folk1.jpg'>"; 
          echo" <h3>MORNING HAS BROKEN<br> Cat Stevens</h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src='Music/MORNING HAS BROKEN - Cat Stevens (Lyrics).mp3' type='audio/mpeg'>
                </audio>       
                </div>"; 

                echo" <div class='about-col'>";
                echo" <img src='song/classic2.jpg'>"; 
                echo" <h4>April 12, 1971</h4>"; 
                echo" <h3>Take Me Home, Country Roads<br> December Avenue</h3>"; 
                echo" <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Take Me Home, Country Roads - John Denver [Lyrics].mp3' type='audio/mpeg'>
                </audio>  
                </div>"; 

                echo" <div class='about-col'>"; 
                echo" <img src='song/classic3.jpg'>";
                echo" <h3>Having You Near Me <br> Air Supply</h3>";
                echo"  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Having You Near Me (Lyrics) - Air Supply.mp3' type='audio/mpeg'>
                </audio> 
                </div>
         </section>"; 
        echo" <section class='about1'>"; 
        
         echo" <div class='row1'>";
         echo" <div class='about-col1'>"; 
         echo" <img src='song/classic4.jpg'>"; 
         echo" <h4>February 10, 2010</h4>"; 
         echo" <h3>The Gift (Lyrics)<br>Collin Raye & Susan Ashton</h3>
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Jim Brickman - The Gift (Lyrics) ft. Collin Raye & Susan Ashton.mp3' type='audio/mpeg'>
                </audio> 

               </div>";

                echo" <div class='about-col1'>";
                echo" <img src='song/classic5.jpg'>"; 
                echo" <h3>Destiny<br>Jim Brickman</h3>"; 
                echo" <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Destiny - Jim Brickman (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>"; 

              echo"  <div class='about-col1'>"; 
              echo"  <img src='song/classic6.jpg'>"; 
              echo"  <h3> The Past<br>Jed Madela</h3>"; 
            
              echo"  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Jed Madela - The Past (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>
           </div>
    </section>";
?>
</body>
</html>
