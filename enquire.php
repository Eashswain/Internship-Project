<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!--Page Title-->
    <title>Enquiry page</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- <link href="css/swiper.css" rel="stylesheet"> -->
	<!-- <link href="css/magnific-popup.css" rel="stylesheet"> -->
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/a9ee362ccc.js" crossorigin="anonymous"></script>


</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
	<!-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!-- end of preloader -->
    
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.php">Wild Cats Adventure</a>

        <!-- Image Logo -->
        <!--<a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>-->
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

       
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->
    
    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">ENQUIRY FORM</div>
                        <h2 class="white">You're here to know more about this trek</h2>
                        <p class="white">Leave your details with us by filling this form and we will get back to you as soon as possible with all the necessary information you are in need off</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Make sure your transaction ID is correct</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Please provide us with an active email so as to receive the updates</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Cross check the trek details so that you don't make any mistake</div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                   
                    <!-- Call Me Form -->
                    <form id="save_form" data-toggle="validator" data-focus="false">
                       
                        <div class="form-group">
                            <input type="tel" class="form-control-input" id="phone" name="phone" required>
                            <label class="label-control" for="phone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="user_name" name="user_name" required>
                            <label class="label-control" for="user_name">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="email" name="email" required>
                            <label class="label-control" for="email">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" onclick="saveForm()">Submit</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of call me form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About trek</h4>
                        <p class="white">Adventures are a great way to explore the world and experience something new. They can be thrilling, exciting, and even life-altering experiences. Adventures can take you places you have never been before and introduce you to new people and cultures. Whether you're looking for a physical challenge or a mental one, an adventure is the perfect way to add some excitement and challenge to your life.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <div class="text-container">
                        <h4>Visit us on our social media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © Parheeksha.in 2023 </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
        

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts --> 
    <script>
      function saveForm() {
          // Retrieve form data
          var phone = document.getElementById('phone').value;
          var user_name = document.getElementById('user_name').value;
          var email = document.getElementById('email').value;

          // Perform AJAX request to save data
          var xhr = new XMLHttpRequest();
          xhr.open('POST', 'save_enquiries.php', true);
          xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhr.onreadystatechange = function() {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  // Show alert and clear form
                  alert("Your enquiry has been received!");
                  document.getElementById('phone').value = '';
                  document.getElementById('user_name').value = '';
                  document.getElementById('email').value = '';
              }
          };
          var data = 'phone=' + encodeURIComponent(phone) +
                    '&user_name=' + encodeURIComponent(user_name) +
                    '&email=' + encodeURIComponent(email);
          xhr.send(data);
      }
    </script>   
</body>
</html>