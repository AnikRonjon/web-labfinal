<?php include 'session.php'?>
<header class="navbar-light navbar-sticky navbar-transparent">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand me-0" href="http://localhost/LABFINAL/">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">

				<!-- Nav Search END -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">


					<!-- Nav item 2 Course -->
					<li class="nav-item dropdown"><a class="nav-link" href="#">Course</a></li>

					<!-- Nav item 3 link-->
					<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>

					<!-- Nav item 4 link-->
					<li class="nav-item"><a class="nav-link" href="<?php echo !empty($email_session)? "student-dashboard": "sign-in"?>.php">Dashboard</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->


			<!-- Signin button -->
			<div class="navbar-nav ms-2 d-none d-sm-block">
        <a href="<?php echo !empty($email_session)? "logout": "sign-in"?>.php">
			<button class="btn btn-sm btn-dark mb-0"><?php echo !empty($email_session)? "Log Out" : "Login"?></button>
        </a>
			</div>

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>