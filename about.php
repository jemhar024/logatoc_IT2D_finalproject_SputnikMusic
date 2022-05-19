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
                   <li><a href="about.php"class="active">About Us</a></li>
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="blog1.php">Blog</a></li>
              </ul>
            </div>   
            </div> 

		<h1>About Us</h1>
	</section>

    <?php
	echo" <section class='about_us'>
		  <div class='row'>
            <div class='about_col'>";
           
           echo" <h1>ABOUT US </h1>";
           echo" <p>With Sputnik Music, it is so very convinient to find music that fill your world with the song, album, and artist that define how's you day or mood, through the use of  the cellphone, laptop, tablet, personal computer and more. There are so many music to enjoy, whether you are in a good mood, bad mood, traveling, doing some homeworks and many more there are music that'll fit your day. Just choose on the choices to find the music that you love.</p>";
           echo" <p>  Listening to music without any subscription can be experience on Sputnik Music, Just sit back and relax the soundtrip. </p>
        </div>";
          echo" <div class='about_col'>
            <img src='media/about1.jpg'>
        </div>
    </div>";
    

     echo" <div class='row'>
         <div class='about_col'>";

          echo" <h1>Join Thousands of Listeners Worldwide</h1>";
     
          echo" <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery.</p>";

          echo" <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself. Besides ye country on observe. She continue appetite endeavor she judgment interest the met. For she surrounded motionless fat resolution may.</p>";

          echo" <p>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me. </p>";

          echo" <a href='library.php' class='hero-btn green-btn'>LIBRARY</a>
          </div>
           <div class='about_col'>
                <img src='media/about2.jpg'>
                <img src='media/about6.jpg'>
                <img src='media/about4.jpg'>
             
               </div> 
             </div>
          </section>";
       ?>

     <!----------Footer---------->
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



