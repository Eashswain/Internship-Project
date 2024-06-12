<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Treks and events</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/a9ee362ccc.js" crossorigin="anonymous"></script>

    <style>
        .card-links {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .card-btn {
            width: 40%;
            max-width: 200px;
            text-align: center;
            line-height: 20px;
            padding: 10px;
            background-color: #e99126;
            margin-block: 5px;
            color: white;
            transition: all 0.2s ease;
        }

        .card-btn:hover {
            transition: all 0.2s ease;
            color: white;
            background-color: #23c16c;
        }

        a,
        a:hover {
            font-family: "Montserrat", sans-serif;
            text-decoration: none !important;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function displayTours(tours) {
                const toursContainer = document.getElementById("card-container");
                if (tours.length == 0) {
                    toursContainer.innerHTML = `<div class="container text-center"><p class="h4">No treks available</p></div>`;
                }

                for (const tour of tours) {
                    const tourCard = document.createElement("div");
                    tourCard.classList.add("card", "card-image");

                    // Create the card content
                    // tourCard.innerHTML = `
                    //     <div class="card">
                    //         <div class="card-image">
                    //             <img class="img-fluid" src="${tour.image1}" alt="alternative">
                    //         </div>
                    //         <div class="card-body">
                    //             <h3 class="card-title">${tour.destination}</h3>

                    //             <p class="price"> <span>${tour.price}</span> per Person</p>
                    //             <!--<p class="price"> <span class="total-entries">0/${tour.people_allowed}</span> Registered</p>-->
                    //             <p class="price"> <span>${tour.start_date}</span></p>
                    //             <a class="button-38" role="button" href="enquire-form.php">Send Enquiry</a>
                    //             <a class="button-38" role="button" href="form_page.php?title=${encodeURIComponent(tour.destination)}&price=${encodeURIComponent(tour.price)}&number=${encodeURIComponent(tour.people_allowed)}">Book Now</a>
                    //         </div>
                    //         <div class="button-container">
                    //             <a class="btn-solid-reg page-scroll" href="display_trek.php?title=${encodeURIComponent(tour.destination)}">DETAILS</a>
                    //         </div> 
                    //     </div>
                    // `;
                    tourCard.innerHTML = `
                        <div class="card">
                            <div class="card-img-top">
                                <img class="img-fluid" src="${tour.image1}" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">${tour.destination}</h3>
                                <div class="card-text">
                                    <p class="price"> <span>${tour.price}</span> per Person</p>
                                    <p class="price"> <span>${tour.start_date}</span></p>
                                </div>
                                <div class="card-links">
                                    <a class="card-btn" role="button" href="enquire-form.php">Send Enquiry</a>
                                    <a class="card-btn" role="button"
                                        href="form_page.php?title=${encodeURIComponent(tour.destination)}&price=${encodeURIComponent(tour.price)}&number=${encodeURIComponent(tour.people_allowed)}">Book
                                        Now</a>
                                </div>
                                <div class="card-links">
                                    <a class="card-btn"
                                        href="display_trek.php?title=${encodeURIComponent(tour.destination)}">Details</a>
                                </div>
                            </div>
                        </div>
                    `;
                    toursContainer.appendChild(tourCard);

                    // Fetch total entries for the specific tour
                    fetch(`get_total_entries.php?title=${encodeURIComponent(tour.destination)}`)
                        .then(response => response.json())
                        .then(totalEntries => {
                            // Update the total entries information on the card
                            const totalEntriesSpan = tourCard.querySelector(".total-entries");
                            totalEntriesSpan.textContent = `${totalEntries}/${tour.people_allowed}`;
                        })
                        .catch(error => console.error("Error:", error));
                }
            }

            // Fetch tours using AJAX and call the displayTours function
            <?php
            echo "
                fetch('display_details.php?state=" . $_GET['state'] . "')
                .then(response => response.json())
                .then(tours => {
                    displayTours(tours);
                })
                .catch(error => console.error('Error:', error));
                ";
            ?>

        });
    </script>
</head>

<body>


    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Treks</div>
                    <h2>Choose The Treks<br> According To Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">


                    <div id="card-container" class="card-container"></div>

                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
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
        document.addEventListener("DOMContentLoaded", function() {
            const contactForm = document.getElementById("contactForm");
            const msgSubmit = document.getElementById("cmsgSubmit");

            contactForm.addEventListener("submit", function(event) {
                event.preventDefault();

                const formData = new FormData(contactForm);

                fetch("save_contact.php", {
                        method: "POST",
                        body: formData,
                    })
                    .then(response => response.text())
                    .then(responseText => {
                        msgSubmit.textContent = responseText;
                        msgSubmit.classList.remove("hidden");
                        alert("Thanks for contacting us!!")
                        contactForm.reset(); // Clear form fields
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        msgSubmit.textContent = "An error occurred while submitting the message.";
                        msgSubmit.classList.remove("hidden");
                    });
            });
        });
    </script>
</body>

</html>