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

		<h1>Contact</h1>
<!------------------Contact Us---------------->
      <?php
      echo "<section> 
       	   <div class='nav'>
              <ul>
                   <li><a href='contact.php'class='active'>Contact</a></li>
                   <li><a href='information.php'>Information</a></li>
              </ul>
          </div>
         </section>
    </section>";

    echo" <section class='location'>

	     <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d295418.6537138379!2d121.58516051248196!3d13.380869621837238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a32569547dcdad%3A0xc3e259596f192071!2sBoac%2C%20Marinduque!5e0!3m2!1sen!2sph!4v1652613947204!5m2!1sen!2sph' width='500 height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
	
     </section>";

 echo" <section class='contact-us'>
	 <div class='row'>
		<div class='contact-col'>
			<div>
				<i class='fa fa-home'></i>
				<span>
					<h5>ABC Street, XZY Building</h5>
					<p>Boac, Marinduque</p>
				</span>
			</div>
			<div>
				<i class='fa fa-phone'></i>
				<span>
					<h5>+63 9107897518</h5>
					<p>Monday to Saturday, 8AM to 5PM</p>
				</span>
			</div>
			<div>
				<i class='fa fa-envelope-o'></i>
				<span>
					<h5>jaredsimondanao@gmail.com<br>jemharlandoylogatoc@gmail.com</h5>
					<p>Email us your query</p>
				</span>
			</div>
			
		</div>";
		echo" <div class='contact-col'>
			  <form action='form-handler.php' method='post'>
				<input type='text' name='name' placeholder='Enter your name' required>
				<input type='email' name='email' placeholder='Enter your email address' required>
				<input type='text' name='subject' placeholder='Enter your subject' required>
				<textarea rows= '8' name='message' placeholder='Message' required></textarea>
				<button type='submit' class='hero-btn1 green-btn'>Send Message</button>
			</form>
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


