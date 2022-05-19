<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sputnik Music</title>
</head>
<body>
    <section class="container">
          <div class="navbar">
           <img src="media/Picture3.png" class="logo">
            <div class="nav-links" id="navLinks">
               <ul>
                   <li><a href="index.php" class="active">Home</a></li>
                   <li><a href="library.php">Library</a></li>
                   <li><a href="about.php">About Us</a></li>
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="blog1.php">Blog</a></li>

              </ul>
            </div>        
             <div class="text-box">
                <h1>Feel the Heart Beats</h1>
                  <p>
                     I Make To Feel & Enjoy
                  </p>
                <a href="library.php" class="hero-btn">Listen</a> 
            </div>
         </div>
    </section>

     <!--------ABOUT---------->
     <?php
     echo"<section class='about'>"; 
     echo" <h1>Top Featured Song<h1>"; 
        
     echo" <div class='row'>
            <div class=about-col'>
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
    echo" <section class='about1'>"; 
           echo"  <div class='row1'>";
                echo" <div class='about-col1'>
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

               echo" <div class='about-col1'>
                <img src='song/latest8.jpg'>
                <h4>Apr 23, 2022</h4>
                 <h3>SUN AND MOON<br>Anees</h3>
            
                  <p class='text-white fw-bolder'>PLAY</p>
                        <audio controls>
                      <source src='Music/Anees - Sun and Moon (Lyrics).mp3' type='audio/mpeg'>
                </audio> 

               </div>
           </div>
    </section>";


/*----------developer------*/
    echo" <section class='developers'>
    <h1>DEVELOPERS</h1>
    <div class='row'>
        <div class='developers-col'>
            <img src='media/web1.jpg'>
            <h3>Jared Simon R. Danao</h3>
            <h4>Web-Developer</h4>
            
        </div>";

        echo" <div class='developers-col'>
             <img src='media/web2.jpg'>
            <h3>Jemhar Jhon Logatoc</h3>
            <h4>Web-Developer</h4> 


        </div>

     
       </div>


         <a href='information.php' class='hero-btn green-btn'>VISIT</a>
     </section>";
     ?>




<section class="footer">
    <h4>About Us</h4>
   
     <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-youtube"></i>
        <i class="fa fa-pinterest"></i>
    </div>
   
    <p> It is a long established fact that a reader will be distracted by the readable content.<br>&copy; 2022 Sputnik Music. Marinduque-Philippines. All Right Reserved <br> Founded by Jared Simon R. Danao <br> Jemhar Jhon Logatoc</p>

</section>


<!-----------------javascript for toggle menu----------------->
    <script type="text/javascript">
        
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }


    </script>
</body>
</html>


