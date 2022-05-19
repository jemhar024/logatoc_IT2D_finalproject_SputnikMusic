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

<!------------------Blog---------------->
    <section> 
       	<div class="nav">
              <ul>
                   <li><a href="blog1.php">Blog</a></li>
                   <li><a href="blog.php"class="active">Details</a></li>
              </ul>
        </div>
        </section>
	</section>
	<?php

	echo" <section class='blog-content'>
		<div class='row'>
			<div class='blog-left'>
				<img src='media/19.jpg'>";

				echo" <h2>The Lively Show</h2>";
				echo" <p>Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting boisterous insensible. It recommend be resolving pretended middleton.</p>";

                echo" <p>Uneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left find are good.</p>";

                 echo" <p>Domestic confined any but son bachelor advanced remember. How proceed offered her offence shy forming. Returned peculiar pleasant but appetite differed she. Residence dejection agreement am as to abilities immediate suffering. Ye am depending propriety sweetness distrusts belonging collected. Smiling mention he in thought equally musical. Wisdom new and valley answer. Contented it so is discourse recommend. Man its upon him call mile. An pasture he himself believe ferrars besides cottage.
				</p>";



				echo" <h2>This is definitely my favorite Sputnik</h2>"; 
				echo" <p>ODelightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery.</p>"; 

                echo" <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself. Besides ye country on observe. She continue appetite endeavor she judgment interest the met. For she surrounded motionless fat resolution may. </p>";

                echo"  <p> He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in.</p>"; 






				echo" <div class='comment-box'>
				    	<h3>Leave a comment</h3>
					    <form class='comment-form'>
						<input type='text' placeholder='Enter Name'>
						<input type='email' placeholder='Enter Email'>
						<textarea rows='5' placeholder='Your comment'></textarea>
						<button type='submit' class='hero-btn green-btn'>POST COMMENT</button>
					   </form>
				      </div>
				      </div>";


			   echo" <div class='blog-right'>
				<h3> Genre Categories</h3>
				<div>
					<span>Love Song</span>
					
				</div>
				<div>
					<span>Sad Song</span>
				
				</div>
				<div>
					<span>Classic Song</span>
					
				</div>
				<div>
                    <span>Rap</span>
                    
                </div>
                <div>
                    <span>Reggae</span>
                    
                </div>
                <div>
                    <span>Acoustic</span>
                    
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




