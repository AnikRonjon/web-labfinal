<?php
// include connection
include 'config.php';
include 'session.php';

// check if url contain id, if not redirect to index page
if (isset($email_session)) {

    $sql = "DELETE FROM student WHERE email='$email_session'";

    if (mysqli_query($conn, $sql)) {
        session_start();
        unset($_SESSION["id"]);
        unset($_SESSION["email"]);
        
        echo "<script>window.location.href='http://localhost/LABFINAL/sign-up.php';</script>";
        exit();
    }
    // close connection
    mysqli_close($conn);
}
?>
