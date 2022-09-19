<?php 
session_start();
include "fetcher.php";
include "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->


<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Auriel James</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout9.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   
   

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon1.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class=""> 
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">More info about me</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li><li> </li>
           
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm <?php echo $_SESSION['currentuser']; ?></h1>
            <h3>I'm a  <span>graphic designer</span>, <span>video editor</span> and <span>webdesigner</span> creating awesome and
            effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="https://www.facebook.com/aurieljames11/"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/aurieljames11"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="https://www.linkedin.com/in/auriel-james-fernandez-b8366324a/"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com/aurieljames11/"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
            <h3><button><a href="admin/index.php">Edit Portfolio</a></button></h3>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/portfolio/modals/11.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p><?php echo $_SESSION['about']; ?>
            </p>

            <div class="row">

              

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Elementary </h3>
                  <p class="info"><?php echo $_SESSION['degree1']; ?> <span>&bull;</span> <em class="date"><?php echo$_SESSION['year1'];?></em></p>

                  <p>
                 <?php echo $_SESSION['description1'];?>
                  </p>
                  <p class="info"><?php echo $_SESSION['address1'];?></p></br></br>
               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Highschool</h3>
                  <p class="info"><?php echo $_SESSION['degree2'];?> <span>&bull;</span> <em class="date"><?php echo $_SESSION['year2'];?></em></p>

                  <p>
                     <?php echo $_SESSION['description2'];?>
                 
                  </p>
                  <p class="info"><?php echo $_SESSION['address2'];?></p></br></br>
               </div>
               <div class="twelve columns">

                  <h3>College</h3>
                  <p class="info"><?php echo $_SESSION['degree3'];?><span>&bull;</span> <em class="date"><?php echo $_SESSION['year3'];?></em></p>

                  <p>
                     <?php echo $_SESSION['description3'];?>
                 
                  <p class="info"><?php echo  $_SESSION['address3'];?></p>
               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->




      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt.
            </p> --><div class="bars">

				   <ul class="skills">
            <?php  
   $sql2 = "SELECT * FROM skilltable";
   $result2 = mysqli_query($conn, $sql2) or die("query unsucessful");
   
   if(mysqli_num_rows($result2) > 0){
      while($row2 = mysqli_fetch_assoc($result2)){ ?>
				<h5><?php echo $row2['skillname'];?><h5>
			
            <div class="progress" style="height: 35px;">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $row2['percent'];?>%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><h6 style="color:white;"><?php echo $row2['percent'];?>%</h6></div>
</div>
<br>
         <?php }
      }?>		</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->
<hr>
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Certificates</span></h1>
         </div>
         <br><br>  <br><br>  <br><br>
         <div class="description-box">
         <?php 
    $sql = "SELECT * FROM certif";
    $result = mysqli_query($conn, $sql) or die("query unsucessful");
    if(mysqli_num_rows($result)>0){  
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <table>
         <tr> 
  <td style="cellspacing: 20px;"><h4><?php echo $row['stitle'];?></h4>
  <p><?php echo $row['sdescript']?></p>
   <img src="admin/dashboard/saver/<?php echo $row['spic']?>" style="height: 400px; width:600px;">
</td>  
        </tr> <br><br><br></table> <?php }} 
   
   else {?>

<h1>No Certificate</h1>



<?php } ?>
</div>



</div>
        
      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

           

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <h1>Hi my name is <?php echo $_SESSION['sfirstname'];?> <?php echo $_SESSION['slastname'];?>,   
                I live in the country <?php echo $_SESSION['country'];?> in the city of <?php echo $_SESSION['city'];?></h1>
            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-coffee.jpg" alt="" />

		      <div class="description-box">
			      <h4>Coffee Cup</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-console.jpg" alt="" />

		      <div class="description-box">
			      <h4>Console</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-judah.jpg" alt="" />

		      <div class="description-box">
			      <h4>Judah</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-intothelight.jpg" alt="" />

		      <div class="description-box">
			      <h4>Into the Light</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-farmerboy.jpg" alt="" />

		      <div class="description-box">
			      <h4>Farmer Boy</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-girl.jpg" alt="" />

		      <div class="description-box">
			      <h4>Girl</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-origami.jpg" alt="" />

		      <div class="description-box">
			      <h4>Origami</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Illustration</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-07 End -->

         <div id="modal-08" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-retrocam.jpg" alt="" />

		      <div class="description-box">
			      <h4>Retrocam</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Webdesign, Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">

            <h1><span>Get Hosting.</span></h1>

         </div>

         <div class="seven columns">

            <h2><span class="lead">My Current Address</span></h2>
            <p><span class="lead">My current address is <?php echo  $_SESSION['saddress'];?>,</br> <?php echo $_SESSION['postalcode'];?> (postal code) </span></p>

         </div>

         <div class="three columns action">



         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>Only judge can god me
                           </p>
                           <cite>Florencio</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>For your peace of mind, do not try to understand everything.
                           </p>
                           <cite>Auriel James</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead"> <br><?php echo $_SESSION['semailadd'];?>
                  </p>
                  <h4>Address and Phone</h4>
					   <p class="address">
				
						   <?php echo $_SESSION['saddress'];?> <br>
						   <span> <?php echo $_SESSION['snumber'];?></span>
					   </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

              

               

            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="https://www.facebook.com/aurieljames11/"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://www.twitter.com/aurieljames11/"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="https://www.linkedin.com/in/auriel-james-fernandez-b8366324a/"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com/aurieljames11/"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Chae &copy; Copyright 2021</li>
               <li>Design by <a href="https://www.facebook.com/aurieljames11/" title="Styleshout" target="_blank">Auriel James</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>