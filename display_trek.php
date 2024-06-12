<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Trek Details</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- <link href="css/swiper.css" rel="stylesheet"> -->
    <!-- <link href="css/magnific-popup.css" rel="stylesheet"> -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/a9ee362ccc.js" crossorigin="anonymous"></script>
    <style>
        strong {
            font-weight: bolder;
            /* color: aliceblue; */
        }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <?php
    // Database connection (replace with your database credentials)
    include 'db_config.php';
    // $servername = "localhost";
    // $username = "wildcats_treks";
    // $password = "wildcats_treks";
    // $dbname = "wildcats_treks";

    // $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve title from URL parameter
    $title = $_GET['title'];

    // Query database to get details of the specified trek
    $sql = "SELECT * FROM trek_details WHERE destination = '$title'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h1 style='text-align:center;padding:2.75%;font-weight:bold; margin-top:5%;'>Destination: " . $row["destination"] . "</h1>";
            echo "<div class='container' style='text-align:center; padding:2.2%;'>";
            echo "<p>State/Region: <strong>" . $row["state_region"] . "</strong></p>";
            echo "<p>Price: <strong>Rs. " . $row["price"] . "</strong></p>";
            echo "<p>Number of People Allowed: <strong>" . $row["people_allowed"] . "</strong></p>";
            echo "<p>Start Date: <strong>" . $row["start_date"] . "</strong></p>";
            echo "<p>End Date: <strong>" . $row["end_date"] . "</strong></p>";
            echo "</div>";
            echo "<div class='container' style='padding:4%; text-align:center;'>";
            echo "<div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>";
            echo "<div class='carousel-inner'>";
            echo "<div class='carousel-item active'>";
            echo "<img src='" . $row["image1"] . "' class='d-block w-100' alt='Image 1'>";
            echo "</div>";
            echo "<div class='carousel-item'>";
            echo "<img src='" . $row["image2"] . "' class='d-block w-100' alt='Image 2'>";
            echo "</div>";
            echo "<div class='carousel-item'>";
            echo "<img src='" . $row["image3"] . "' class='d-block w-100' alt='Image 3'>";
            echo "</div>";
            echo "</div>"; //Carousel Inner closed
            echo "<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleAutoplaying' data-bs-slide='prev'>";
            echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
            echo "<span class='visually-hidden'>Previous</span>";
            echo "</button>";
            echo "<button class='carousel-control-next' type='button' data-bs-target='#carouselExampleAutoplaying' data-bs-slide='next'>";
            echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
            echo "<span class='visually-hidden'>Next</span>";
            echo "</button>";

            echo "</div>";
            echo "</div>"; //Container closed
            echo "<div class='container' style='padding:4%; text-align:center;'>";
            echo "<p>Overview: <strong>" . nl2br($row["overview"]) . "</strong></p>";
            echo "<p>Itinerary: <strong>" . nl2br($row["itenary"]) . "</strong></p>";
            echo "<p>Highlights: <strong>" . nl2br($row["highlights"]) . "</strong></p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No trek details found.";
    }

    $conn->close();
    ?>

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
</body>

</html>