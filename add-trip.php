<?php
session_start();

if (!isset($_SESSION['username'])) {
	// Redirect to the login page if the user is not logged in
	header("Location: login.php");
	exit;
}
$uname = $_SESSION['username'];
// The user is logged in; you can display the content of this page.
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Treck</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
	<link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_navbar.html -->
		<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo" href="index.php">
					<h4>WC Admin</h4>
				</a>
				<a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
			</div>
			<!-- <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
           
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face28.png" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Henry Klein</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="mdi mdi-lock ml-1"></i>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div> -->
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item nav-category">Main</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">
							<span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="add-trip.php">
							<span class="icon-bg"><i class="mdi mdi-image-album"></i></span>
							<span class="menu-title">Add Trip</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="res1.php">
							<span class="icon-bg"><i class="mdi mdi-image-album"></i></span>
							<span class="menu-title">Reservations</span>
						</a>
					</li>


					<li class="nav-item sidebar-user-actions">
						<div class="user-details">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<div class="d-flex align-items-center">
										<div class="sidebar-profile-img">
											<img src="assets/images/faces/face28.png" alt="image">
										</div>
										<div class="sidebar-profile-text">
											<p class="mb-1"><?php echo $uname ?></p>
										</div>
									</div>
								</div>
								<!-- <div class="badge badge-danger">3</div> -->
							</div>
						</div>
					</li>

				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Adding the Treck</h4>
									<!-- <p class="card-description"> Basic form elements </p> -->
									<form class="forms-sample" method="post" enctype="multipart/form-data" id="submit-form" action="save_details.php">
										<div class="form-group">
											<label for="exampleInputDest1">Destination</label>
											<input type="text" class="form-control" id="exampleInputDest1" placeholder="Destination" name="destination" required>
										</div>
										<!-- <div class="form-group">
                      <label for="exampleSelectsar">State </label>
                      <input type="text" class="form-control" id="exampleInputDest1" placeholder="State" name="state" required>

                    </div> -->
										<div class="form-group">
											<label for="state">State</label><br>
											<select class="form-control-input" id="states" name="state" required>
												<option value="Karnataka">Karnataka</option>
												<option value="Kerala">Kerala</option>
												<option value="Tamil Nadu">Tamil Nadu</option>
												<option value="Maharashtra">Maharashtra</option>
												<option value="Uttarakhand">Uttarakhand</option>
												<option value="Himachal Pradesh">Himachal Pradesh</option>
												<option value="Jammu and Kashmir">Jammu and Kashmir</option>
												<option value="Rajasthan">Rajasthan</option>
											</select>
										</div>
										<div class="form-group">
											<label for="exampleInputPrice">Price</label>
											<input type="text" class="form-control" id="exampleInputPrice" placeholder="Price" name="price" required>
										</div>
										<div class="form-group">
											<label for="exampleInputPplAllowed">Number of people allowed</label>
											<input type="text" class="form-control" id="exampleInputPplAllowed" placeholder="Number of people allowed" name="number" required>
										</div>
										<div class="form-group">
											<label for="stdate">Start Date</label>
											<input type="date" class="form-control" id="stdate" placeholder="Start Date" name="start_date" required>
										</div>
										<div class="form-group">
											<label for="enddate">End Date</label>
											<input type="date" class="form-control" id="stdate" placeholder="End Date" name="end_date" required>
										</div>

										<!-- <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div> -->
										<!-- <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->
										<div class="form-group">
											<label>Photo 1</label>
											<input type="file" name="image1" class="form-control" accept="image/*" required>
											<!-- <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div> -->
										</div>
										<div class="form-group">
											<label>Photo 2</label>
											<input type="file" name="image2" class="form-control" accept="image/*" required>
											<!-- <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div> -->
										</div>
										<div class="form-group">
											<label>Photo 3</label>
											<input type="file" name="image3" class="form-control" accept="image/*" required>
											<!-- <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div> -->
										</div>
										<!-- <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div> -->
										<label for="overview">Overviews</label>
										<textarea class="form-control" id="overview" rows="10" cols="15" name="overview" required></textarea>

										<label for="itenary">Itenary</label>
										<textarea class="form-control" id="itenary" rows="10" cols="15" name="itenary" required></textarea>

										<label for="hilights">Highlights</label>
										<textarea class="form-control" id="hilights" rows="10" cols="15" name="highlights" required></textarea>

										<label for="pickup1">Pickup Point 1</label>
										<input type="text" class="form-control" id="pickup1" placeholder="Pickup Point 1" name="pickup1" required>

										<label for="pickup2">Pickup Point 2</label>
										<input type="text" class="form-control" id="pickup2" placeholder="Pickup Point 2" name="pickup2" required>

										<label for="pickup3">Pickup Point 3</label>
										<input type="text" class="form-control" id="pickup3" placeholder="Pickup Point 3" name="pickup3" required>

										<label for="pickup4">Pickup Point 4</label>
										<input type="text" class="form-control" id="pickup4" placeholder="Pickup Point 4" name="pickup4" required>
										<button type="submit" class="btn btn-primary mr-2" onclick="myFunction()">Submit</button>
										<!-- <button class="btn btn-light">Cancel</button> -->
									</form>
									<div id="response-container"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<script>
					function myFunction() {
						alert("Trip Inserted Successfully GO to Main Page!!!");
					}
				</script>
				<!-- content-wrapper ends -->
				<!-- partial:../../partials/_footer.html -->

				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="assets/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="assets/vendors/select2/select2.min.js"></script>
	<script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="assets/js/off-canvas.js"></script>
	<script src="assets/js/hoverable-collapse.js"></script>
	<script src="assets/js/misc.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="assets/js/file-upload.js"></script>
	<script src="assets/js/typeahead.js"></script>
	<script src="assets/js/select2.js"></script>
	<!-- End custom js for this page -->
	<script>
		$(document).ready(function() {
			$("#submit-form").submit(function(event) {
				event.preventDefault(); // Prevent form from submitting normally

				var formData = new FormData(this);

				$.ajax({
					url: "save_details.php", // Path to your PHP script
					type: "POST",
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						console.log(response); // Display the response from the server
					}
				});
			});
		});
	</script>
</body>

</html>