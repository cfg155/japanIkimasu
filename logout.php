<?php
    session_start();

    // Remove all session
    session_unset();

    //destroy session
    session_destroy();

    header('location: index.php');
?>