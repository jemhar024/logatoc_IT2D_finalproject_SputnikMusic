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
                   <li><a href="classic.php"class="active">Classic</a></li>
                   <li><a href="acoustic.php">Acoustic</a></li>
                   <li><a href="reggae.php">Reggae</a></li>
                    <li><a href="rap.php">Rap</a></li>
                    <li><a href="folk.php">Folk</a></li>
              </ul>
        </div>
        </section>

	</section>

    <?php

	
        echo" <section class='about'>
        <h1>Classic Song<h1>
        <div class='row'>
            <div class='about-col'>
                <img src='song/classic1.jpg'>
                 <h4>December 27, 1997</h4>
                 <h3>Heart is Gold<br>Passenger</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src='Music/Heart of Gold_Cover By_ Passenger_Music Lyrics .mp3' type='audio/mpeg'>
                </audio>  
            </div>";

            echo" <div class='about-col'>
                <img src='song/classic2.jpg'>
                <h4>April 12, 1971</h4>
                <h3>Take Me Home, Country Roads<br> December Avenue</h3>

                 <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Take Me Home, Country Roads - John Denver [Lyrics].mp3' type='audio/mpeg'>
                </audio>                
            </div>";

            echo"  <div class='about-col'>
                <img src='song/classic3.jpg'>
                 <h3>Having You Near Me <br> Air Supply</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                     <source src='Music/Having You Near Me (Lyrics) - Air Supply.mp3' type='audio/mpeg'>
                </audio> 
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

    ?>
</body>
</html>
