<?php
    // retrieve all 6 values from the server
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    // create variable for error codes
    $errors = 0;

    // error messages
    if ($name == "") {$errors = 1; $errorMessage = "Name is required"; }
    if ($email == "") {$errors = 2; $errorMessage = "Email address is required"; }
    if ($message == "") {$errors = 3; $errorMessage = "Message is required"; }
    if ($subject == "") {$errors = 4; $errorMessage = "Subject line is required"; }

    // if error code is not 0
    if ($errors != 0) {
        //return error message
        echo "errors detected: $errorMessage";
    } else {
    //otherwise
        //return OK
        echo "OK";
    }
?>