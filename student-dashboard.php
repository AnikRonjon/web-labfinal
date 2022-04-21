<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- Header START -->
<?php include "header.php" ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-0">
	<div class="container-fluid px-0">
		<div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<div class="col-12">
				<div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
					<div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
						<!-- Avatar -->
						<div class="col-auto">
							<div class="avatar avatar-xxl position-relative mt-n3">
								<img class="avatar-img rounded-circle border border-white border-3 shadow" src="https://appvital.com/images/profile/file-uploader-api-profile-avatar-2.jpg" alt="">
								<span class="badge bg-success text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
							</div>
						</div>
						<!-- Profile info -->
						<div class="col d-sm-flex justify-content-between align-items-center">
							<div>
								<h1 class="my-1 fs-4"><?php echo $name_session ?></h1>
								<p class="my-1 fs-4"><?php echo $email_session ?></p>
								
						</div>
					</div>
				</div>

				<!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<hr class="d-xl-none">
				<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
					<a class="h6 mb-0 fw-bold d-xl-none" href="student-dashboard.html#">Menu</a>
					<button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<i class="fas fa-sliders-h"></i>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Left sidebar START -->
			<div class="col-xl-3">
				<!-- Responsive offcanvas body START -->
				<nav class="navbar navbar-light navbar-expand-xl mx-0">
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<!-- Offcanvas header -->
						<div class="offcanvas-header bg-light">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<!-- Offcanvas body -->
						<div class="offcanvas-body p-3 p-xl-0">
							<div class="bg-dark border rounded-3 pb-0 p-3 w-100">
								<!-- Dashboard menu -->
								<div class="list-group list-group-dark list-group-borderless">
									<a class="list-group-item active" href="#"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
									<a class="list-group-item" href="#"><i class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
									<a class="list-group-item" href="#"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
									<a class="list-group-item" href="#"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
									<a class="list-group-item" href="#"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
									<a class="list-group-item" href="#"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment info</a>
									<a class="list-group-item" href="#"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
									<a class="list-group-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
									<a class="list-group-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
									<a class="list-group-item" href="account-delete.php"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
									<a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- Responsive offcanvas body END -->
			</div>
			<!-- Left sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Counter boxes START -->
				<div class="row mb-4">
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
							<span class="display-6 lh-1 text-orange mb-0"><i class="fas fa-tv fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="9"	data-purecounter-delay="200">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">Total Courses</p>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
							<span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-clipboard-check fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="52"	data-purecounter-delay="200">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">Complete lessons</p>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
							<span class="display-6 lh-1 text-success mb-0"><i class="fas fa-medal fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="8" data-purecounter-delay="300">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">Achieved Certificates</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Counter boxes END -->

				<div class="card bg-transparent border rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0">My Blogs</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Course list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Course Title</th>
										<th scope="col" class="border-0">Total Lectures</th>
										<th scope="col" class="border-0">Completed Lecture</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6><a href="student-dashboard.html#">Building Scalable APIs with GraphQL</a></h6>
													<!-- Info -->
													<div class="overflow-hidden">
														<h6 class="mb-0 text-end">85%</h6>
														<div class="progress progress-sm bg-primary bg-opacity-10">
															<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>56</td>

										<!-- Table data -->
										<td>40</td>

										<!-- Table data -->
										<td>
											<a href="student-dashboard.html#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
										</td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Course list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
									<li class="page-item mb-0"><a class="page-link" href="student-dashboard.html#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item mb-0"><a class="page-link" href="student-dashboard.html#">1</a></li>
									<li class="page-item mb-0 active"><a class="page-link" href="student-dashboard.html#">2</a></li>
									<li class="page-item mb-0"><a class="page-link" href="student-dashboard.html#">3</a></li>
									<li class="page-item mb-0"><a class="page-link" href="student-dashboard.html#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
					<!-- Card body START -->
				</div>
			<!-- Main content END -->
			</div><!-- Row END -->
		</div>
	</div>	
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark p-3">
	<div class="container">
		<div class="row align-items-center">
			<!-- Widget -->
			<div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
				<!-- Logo START -->
				<a href="index.html"> <img class="h-20px" src="assets/images/logo-light.svg" alt="logo"> </a>
			</div>
			
			<!-- Widget -->
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="text-center text-white">
					Copyrights ©2021 <a href="student-dashboard.html#" class="text-reset btn-link">Eduport</a>. All rights reserved.
				</div>
			</div>
			<!-- Widget -->
			<div class="col-md-4">
				<!-- Rating -->
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="student-dashboard.html#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="student-dashboard.html#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="student-dashboard.html#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="student-dashboard.html#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>