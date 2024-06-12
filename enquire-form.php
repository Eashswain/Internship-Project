<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enquire</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- <link href="css/swiper.css" rel="stylesheet"> -->
    <!-- <link href="css/magnific-popup.css" rel="stylesheet"> -->
    <!-- <link href="css/styles.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="enquire.css">
    <link rel="icon" href="images/favicon.png">
    <style>
        .form-1 {
            background-color: white;
        }

        .form-1 .text-container {
            color: black !important;
        }
    </style>
</head>

<body>
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="h2 text-center">ENQUIRY FORM</div>
                        <h3 class="">You're here to know more about this trek</h3>
                        <p class="">Leave your details with us by filling this form and we will get back to you as soon as possible with all the necessary information you are in need off</p>
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
                    <form id="save_form" data-toggle="validator" data-focus="false">

                        <div class="form-group">
                            <label class="label-control" for="phone">Phone</label>
                            <input type="tel" class="form-control-input" id="phone" name="phone" required>
                            <div class="help-block with-errors"></div>
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

    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script>
        function saveForm() {
            // Retrieve form data
            var phone = document.getElementById('phone').value;
            var user_name = document.getElementById('user_name').value;
            var email = document.getElementById('email').value;
            const phoneRegex = /^[+]?(\d{10})$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid phone number");
                // return false;
            } else if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                // return false;
            } else if (phone != '' && user_name != '' && email != '') {
                // Perform AJAX request to save data
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'save_enquiries.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Show alert and clear form
                        // alert("Your enquiry has been received!");
                        document.getElementById('phone').value = '';
                        document.getElementById('user_name').value = '';
                        document.getElementById('email').value = '';
                    }
                };
                var data = 'phone=' + encodeURIComponent(phone) +
                    '&user_name=' + encodeURIComponent(user_name) +
                    '&email=' + encodeURIComponent(email);
                xhr.send(data);
                alert("Submitted successfully");
            }
        }
    </script>
</body>

</html>