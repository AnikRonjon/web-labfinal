<?php
// include connection
include 'config.php';

// declare varibales and initialize with empty values
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password1 = $password2 = "";

// processing form data when form is submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "*This field is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name contains only letters
        if (!ctype_alpha($name)) {
            $nameErr = "Only letters are allowed";
        }
    }


    if (empty($_POST["email"])) {
        $emailErr = "*This field is required";
    } else {
        $email = test_input($_POST["email"]);
        // check e-mail address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address";
        }
    }

	if(!empty($_POST["password1"]) && ($_POST["password1"] == $_POST["password2"])) {
		$password1 = test_input($_POST["password1"]);
		$password2 = test_input($_POST["password2"]);

	}
	elseif(!empty($_POST["password"])) {
		$cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
	} else {
		 $passwordErr = "Please enter password   ";
	}
    

    // if no errors then insert data into databse
    if (empty($nameErr)  && empty($emailErr) && empty($passwordErr)) {

        $sql = "INSERT INTO student (name, email, password) VALUES ('$name', '$email', '$password1')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>window.location.href='http://localhost/LABFINAL/student-dashboard.php';</script>";
            exit();
        }
    }
    mysqli_close($conn);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUP</title>

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

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	<section class="p-0 d-flex align-items-center position-relative overflow-hidden">
	
		<div class="container-fluid">
			<div class="row">
				<!-- left -->
				<div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
					<div class="p-3 p-lg-5">
						<!-- Title -->
						<div class="text-center">
							<h2 class="fw-bold">Welcome to our largest community</h2>
							<p class="mb-0 h6 fw-light">Let's learn something new today!</p>
						</div>
						<!-- SVG Image -->
						<img src="assets/images/element/02.svg" class="mt-5" alt="">
						<!-- Info -->
						<div class="d-sm-flex mt-5 align-items-center justify-content-center">
						</div>
					</div>
				</div>

				<!-- Right -->
				<div class="col-12 col-lg-6 m-auto">
					<div class="row my-5">
						<div class="col-sm-10 col-xl-8 m-auto">
							<!-- Title -->

							<h2>Sign up for your account!</h2>
							<p class="lead mb-4">Nice to see you! Please Sign up with your account.</p>
						
							<!-- Form START -->
							<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <!-- Name -->
                <div class="mb-4">
									<label for="exampleInputEmail1" class="form-label">Name *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-person-fill"></i></span>
										<input type="text" class="form-control border-0 bg-light rounded-end ps-1" placeholder="Name" id="exampleInputEmail1" name="name">
										<p> <?php echo $nameErr ?> </p>
									</div>
								</div>
								<!-- Email -->
								<div class="mb-4">
									<label for="exampleInputEmail1" class="form-label">Email address *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
										<input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1" name="email">
										<p> <?php echo $emailErr ?> </p>
									</div>
								</div>
								<!-- Password -->
								<div class="mb-4">
									<label for="inputPassword5" class="form-label">Password *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
										<input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword5" name="password1">
										<p> <?php echo $passwordErr ?> </p>
									</div>
								</div>
								<!-- Confirm Password -->
								<div class="mb-4">
									<label for="inputPassword6" class="form-label">Confirm Password *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
										<input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword6" name="password2">
										<p> <?php echo $passwordErr ?> </p>
									</div>
								</div>

								<!-- Button -->
								<div class="align-items-center mt-0">
									<div class="d-grid">
										<input class="btn btn-primary mb-0" type="submit" name="submit" value="Sign Up">
									</div>
								</div>
							</form>
							<!-- Form END -->

							<!-- Social buttons -->
							<div class="row">
								<!-- Divider with text -->
								<div class="position-relative my-4">
									<hr>
									<p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
								</div>
								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="sign-up.html#" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>Signup with Google</a>
								</div>
								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="sign-up.html#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Signup with Facebook</a>
								</div>
							</div>

							<!-- Sign up link -->
							<div class="mt-4 text-center">
								<span>Already have an account?<a href="sign-in.php"> Sign in here</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>