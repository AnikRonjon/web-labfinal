<?php
    include 'session.php';
    // include connection
    include 'config.php';

    // check if url contain id, if not redirect to index page
    if (isset($email_session) && isset($id_session)) {

        $sql = "DELETE FROM student WHERE id ='$id_session' ";
        if (mysqli_query($conn, $sql)) {
            session_unset();
            if(session_destroy()){
                header("location: sign-up.php");
            }
            exit();
        }
        // close connection
        mysqli_close($conn);
    }
?>
