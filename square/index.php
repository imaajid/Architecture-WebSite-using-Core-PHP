<?php include_once ("admin/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Square - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><span>Square.</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="home"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="about"><span>About</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="projects"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="team"><span>Team</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="testimony"><span>Testimony</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" data-nav-section="contact"><span>Contact</span></a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link" data-nav-section="contact">Request a quote</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
							<a href="https://www.youtube.com/watch?v=qOojGBEsWQw" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play play mr-2"></span>
    						<span class="watch">Watch Video</span>
    					</a>
						</p>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have a passion in creating new and unique spaces</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Perfectly Design</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<!--                <p><a href="#" class="btn btn-primary">Read more</a></p>-->
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-compass-symbol"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Carefully Planned</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<!--                <p><a href="#" class="btn btn-primary">Read more</a></p>-->
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Smartly Execute</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<!--                <p><a href="#" class="btn btn-primary">Read more</a></p>-->
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    	<div class="container">
            <?php
            if (isset($_POST["submit1"])) {

            $sql = "INSERT INTO quote (first_name,last_name,services,phone,message )VALUES ('" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["user_type"] . "','" . $_POST["phone"] . "','" . $_POST["message"] . "')";

            if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
            }
           // $conn->close();
            }

          ?>
            <div class="row d-flex">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
                        <div class="request-quote py-5">
                            <div class="py-2">


	    						<span class="subheading">Be Part of our Business</span>
	    						<h3>Request A Quote</h3>
	    					</div>
                            <form method="post" class="request-form ftco-animate">
			    				<div class="form-group">
			    					<input type="text" name="fname" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" name="lname" class="form-control" placeholder="Last Name">
			    				</div>

                                <?php

                                $sql = 'SELECT * FROM services';
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0)
                                {
//                                ?>
                                <form method="post">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon-arr"><span class="ion-ios-arrow-down"></span></div>
	                      <select  class="form-control" name="user_type" >
	                      	<option value="">Select Your Services</option>
                              <?php
                              while($row = mysqli_fetch_assoc($result))
                              {
                                  ?>

                                  <option > <?php echo $row["services_name"];?></option>

                                  <?php
                              }

                              }
                              else {
                                  echo "0 results";
                              }
                              ?>

	                      </select>
	                    </div>
			              </div>
                                </div>
		    					<div class="form-group">
			    					<input type="text" name="phone" class="form-control" placeholder="Phone">
			    				</div>

		    					<div class="form-group">
			              <textarea name="message" id="" cols="30" rows="2" class="form-control"  placeholder="Message" ></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" name="submit1" value="Request A Quote" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	    				</div>
    				</div>
    			</div>





    			<div class="col-md-6 col-lg-8 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4">Since we started work in 1980</h2>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Project Done</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Our Architect</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1100">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-project bg-light" data-section="projects">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Accomplishments</span>
            <h2 class="mb-4">Our Projects</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
            <div class="row">
                <div class="col-md-12 testimonial">
                    <div class="carousel-project owl-carousel">


            <?php

            $sql = 'SELECT * FROM our_project';
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="item">
            		     <div class="project">
		    					<div class="img">
				    				<img src="admin/upload/<?=  $row["image"] ?>" class="img-fluid" alt="Colorlib Template">
				    				<a href="admin/upload/<?=  $row["image"] ?>" class="icon image-popup d-flex justify-content-center align-items-center">
				    					<span class="icon-expand"></span>
				    				</a>
			    				</div>
			    				<div class="text px-4">
			    					<h3><a href="#"><?php echo $row["name"]; ?></a></h3>

			    				</div>
                         </div>


                    </div>



                <?php
                }
                } else {
                    echo "0 results";
                }
//                mysqli_close($conn);
                ?>
            </div>
          </div>
    		</div>



    	</div>
    </section>




    <section class="ftco-section" data-section="team">
    	<div class="container-fluid p-0">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Architect</span>
            <h2 class="mb-4">Behind those Beautiful Works</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
            <div class="row no-gutters">

            <?php

            $sql = 'SELECT * FROM architect';
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">

                                <img src="admin/upload/<?=  $row["image"] ?>" class="img-fluid" alt="Colorlib Template">
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<span class="position mb-2">Architect</span>
									<h3 class="mb-4"><?php echo $row["name"]; ?></h3>
									<div class="faded">
										<p><?php echo $row["designation"]; ?></p>
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="<?php echo $row["social_fb"]; ?>"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="<?php echo $row["social_in"]; ?>"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="<?php echo $row["social_twitter"]; ?>"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="<?php echo $row["social_insta"]; ?>"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
                            </div>
                        </div>
                    </div>
                                <?php
                                }
                                } else {
                                    echo "0 results";
                                }
//                                mysqli_close($conn);
                                ?>


					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">

					</div>
				</div>
    	</div>
    </section>

    <section class="testimony-section" data-section="testimony">

        <div class="container-fluid p-0">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">




<!--      <div class="container">-->
<!--          <div class="row ftco-animate justify-content-center">-->
<!--        	<div class="col-md-12 d-flex align-items-center">-->
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Behind those Beautiful Works</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
              <div class="carousel-testimony owl-carousel">
                    <?php

                    $sql = 'SELECT * FROM testimonial';
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {

                        $img="admin/upload/".$row["image"];

                    ?>
                    <div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">

		              <div class="user-img d-flex align-self-stretch" style="background-image: url(<?= $img ?>)">

		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4"><?php echo $row["message"]; ?></p>
			                <p class="name"><?php echo $row["name"]; ?></p>
			                <span class="position"><?php echo $row["designation"]; ?></span>
                        </div>
                      </div>
                        </div>
                    </div>
                        <?php
                    }
                    } else {
                        echo "0 results";
                    }
                    //  mysqli_close($conn);
                    ?>

                </div>
        	</div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section ftco-no-pb" data-section="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
          <?php
          if (isset($_POST["submit"])) {

              $sql = "INSERT INTO contact_us(name,email,subject,message)VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["subject"] . "','" . $_POST["message"] ."')";

              if (mysqli_query($conn, $sql)) {
                  echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "" . mysqli_error($conn);
              }
              $conn->close();
          }

          ?>



          <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
              <form action="#" method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text"  name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text"  name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="submit" value="Send Message" class="btn btn-secondary py-3 px-5">Send Message</button>
              </div>
            </form>
          </div>




              <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>







          		<h3 class="mb-4">Address</h3>
	            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Square</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>