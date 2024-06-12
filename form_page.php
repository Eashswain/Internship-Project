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
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--Page Title-->
    <title>Booking page</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- <link href="css/swiper.css" rel="stylesheet"> -->
    <!-- <link href="css/magnific-popup.css" rel="stylesheet"> -->
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="enquire.css">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/a9ee362ccc.js" crossorigin="anonymous"></script>

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="h2 text-center">BOOKING FORM</div>
                        <h3 class="">You're just moments away from booking your trek</h3>
                        <p class="">Enter the details correctly as per the requirements specified in the form. Take the necessary precautions while entering the necessary details</p>
                        <ul class="list-unstyled li-space-lg ">
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
                    <form id="save_form" data-toggle="validator" data-focus="false" method="post" action="success_page.php">
                        <div class="form-group">
                        <label class="label-control" for="Place">Place</label>
                            <input type="text" class="form-control-input" id="title" name="title" placeholder="Title" value="<?php echo htmlspecialchars($_GET['title']); ?>" readonly required>

                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                        <label class="label-control" for="Price">Price</label>
                            <input type="text" class="form-control-input" id="price" name="price" value="<?php echo htmlspecialchars($_GET['price']); ?>" readonly required>

                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control" for="phone">Phone</label>
                            <input type="tel" class="form-control-input" id="phone" name="phone" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                        <label class="label-control" for="persons">No.of persons</label>
                            <select class="form-control-input" id="guests" name="guests" onchange="updatePriceTest()" required>
                                <!-- <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-control" for="user_name">Name</label>
                            <input type="text" class="form-control-input" id="user_name" name="user_name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control" for="email">Email</label>
                            <input type="email" class="form-control-input" id="email" name="email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="container" style="padding: 5%;">
                            <div class="row">
                                <div class="col-6">
                                    <img src="images/upi.jpg" alt="QR-code" style="max-width: 100%;">
                                    <img src="images/scanneronly.jpg" alt="QR-code" style="max-width: 100%;">
                                </div>
                                <div class="col-6">
                                    <h4>Make your payment by scanning the <br><em>QR code</em> given here</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-control" for="transaction_id">Transaction ID</label>
                            <input type="text" class="form-control-input" id="transaction_id" name="transaction_id" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="label-control" for="aadhar">Aadhar Number</label>
                            <input type="text" class="form-control-input" id="aadhar" name="aadhar" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <!-- <label class="label-control" for="pickup">Pickup Location</label> -->
                        <div class="form-group">
                            <select class="form-control-input" id="pickup" name="pickup" required>
                                <?php
                                // Replace with your database connection code
                                include('db_config.php');
                                // Query to fetch specific pickup options from the database
                                $trekName = $_GET['title'];
                                $sql = "SELECT pickup1, pickup2, pickup3, pickup4 FROM trek_details where destination='$trekName'";

                                // Execute the query
                                $result = $conn->query($sql);

                                // Populate the dropdown with options
                                if ($result->num_rows > 0) {
                                    echo "<option value='' disabled selected>Pickup Location</option>"; // Placeholder option
                                    while ($row = $result->fetch_assoc()) {
                                        // Adjust this line based on your actual column names
                                        echo "<option value='" . $row["pickup1"] . "'>" . $row["pickup1"] . "</option>";
                                        echo "<option value='" . $row["pickup2"] . "'>" . $row["pickup2"] . "</option>";
                                        echo "<option value='" . $row["pickup3"] . "'>" . $row["pickup3"] . "</option>";
                                        echo "<option value='" . $row["pickup4"] . "'>" . $row["pickup4"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No options available</option>";
                                }

                                // Close the database connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
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


    <!-- Scripts -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script>
        function updatePriceTest() {
            price = document.getElementById("price");
            const basePrice = parseFloat(<?php echo $_GET['price']; ?>); // Get the base price from PHP
            guests = document.getElementById("guests");
            const no_guests = parseInt(guests.value);
            const totalPrice = basePrice * no_guests;
            console.log(totalPrice);
            price.value = totalPrice.toFixed(2);
        }
        function people(){
            person=document.getElementById("guests");
            // const nop=parseInt(<?php echo $_GET['number'];?>);
            let options = "";
            <?php
            echo "for(\$i = 1; \$i <= " . $_GET['number'] . "; \$i++) {
                options+='<option value=\"' + \$i + '\">' + \$i + '</option>';
            }"?>
            person.innerHTML=options;
        }
        people();
    </script>
    <script>
        // Function to handle dropdown selection
        function handleDropdownSelection() {
            const dropdown = document.getElementById('pickup');
            const placeholderLabel = document.querySelector('label[for="pickup"]');

            // Listen for changes in the dropdown
            dropdown.addEventListener('change', function() {
                const selectedOption = dropdown.options[dropdown.selectedIndex];

                // Check if an option is selected
                if (selectedOption && !selectedOption.defaultSelected) {
                    // Hide the placeholder
                    placeholderLabel.style.display = 'none';
                } else {
                    // Show the placeholder
                    placeholderLabel.style.display = 'block';
                }
            });
        }

        // Call the function to set up the event listener
        handleDropdownSelection();
    </script>
</body>

</html>