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
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="blog1.php"class="active">Blog</a></li>

              </ul>
            </div>   
            </div> 

		<h1>Blog</h1>

        <?php
       echo" <section> 
       	<div class='nav'>
              <ul>
                   <li><a href='blog1.php'class='active'>Blog</a></li>
                   <li><a href='blog.php'>Details</a></li>
              </ul>
        </div>
        </section>
    </section>"; 

        echo" <section class='blog-content'>
          <div class='row'>
            <div class='blog-left'>";
                echo" <img src='media/19.jpg'>";
                echo" <h4>DECEMBER 9, 2018</h4>";
                echo" <h2>TLS #281: The Lively Show</h2>";
                echo" <p>BY ADMIN | TUTORIALS</p>"; 
                echo" <p>Vestibulum lacus erat, pharetra et sodales ut, porta sit amet nibh. Sed vestibulum lacinia quam, vel iaculis nunc condimentum eget. Aliquam in mi pharetra, molestie augue ac, fermentum orci.</p><br>";

                echo" <h4>Continue reading...</h4><br>";

                echo" <img src='media/18.jpg'>";
                echo" <h4>DECEMBER 9, 2018</h4>"; 
                echo" <h2>TLS #275: Your Alignment Questions</h2>"; 
                echo" <p>BY ADMIN | TUTORIALS</p>"; 
                echo" <p>Vestibulum lacus erat, pharetra et sodales ut, porta sit amet nibh. Sed vestibulum lacinia quam, vel iaculis nunc condimentum eget. Aliquam in mi pharetra, molestie augue ac, fermentum orci.</p><br>";
                echo" <h4>Continue reading...</h4><br>"; 

                echo" <img src='media/20.jpg'>";
                echo" <h4>DECEMBER 9, 2018</h4>";
                echo" <h2>TTLS #281: The Entrepreneur On Fire</h2>";
                echo" <p>BY ADMIN | TUTORIALS</p>";
                echo" <p>Vestibulum lacus erat, pharetra et sodales ut, porta sit amet nibh. Sed vestibulum lacinia quam, vel iaculis nunc condimentum eget. Aliquam in mi pharetra, molestie augue ac, fermentum orci.</p><br>
                 <h4>Continue reading...</h4><br>";

                echo" <img src='media/24.jpg'>";
                echo" <h4>DECEMBER 9, 2018</h4>";
                echo" <h2>TTLS #281: The Entrepreneur On Fire</h2>"; 
                echo" <p>BY ADMIN | TUTORIALS</p>";
                echo" <p>Vestibulum lacus erat, pharetra et sodales ut, porta sit amet nibh. Sed vestibulum lacinia quam, vel iaculis nunc condimentum eget. Aliquam in mi pharetra, molestie augue ac, fermentum orci.</p><br>
                 <h4>Continue reading...</h4><br>


            </div>";
            echo" <div class='blog-right'>
                <h3> Categories</h3>
                <div>
                    <span>Entertainment</span>
                    
                </div>
                <div>
                    <span>Bussines</span>
                
                </div>
                <div>
                    <span>Media</span>
                    
                </div>
                <div>
                    <span>Tech</span>
                    
                </div>
                <div>
                    <span>Toturial</span>
                    
                </div>
                <div>
                    <span>Entreprenuership</span>
                    
                </div>
            </div>
        </div>";
    

         echo" <div class='blog-right1'>
                <h3> Popular Tags</h3>
                <div>
                    <span>Creative</span>
                    
                </div>
                <div>
                    <span>Unique</span>
                
                </div>
                <div>
                    <span>Media</span>
                    
                </div>
                <div>
                    <span>Audio</span>
                    
                </div>
                <div>
                    <span>Episodes</span>
                    
                </div>
                <div>
                    <span>Ideas</span>
                    
                </div>
                   <div>
                    <span>Start Up</span>
                    
                </div>
                   <div>
                    <span>Sputnik Music</span>
                    
                </div>
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




