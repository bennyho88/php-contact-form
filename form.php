<?php
// In PHP, the command

echo "<pre>";
print_r($_POST);

$nameErr = $emailErr = $messageErr = "";

$name = $email = $message = "";


// Sanitization

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

echo $email;

// Validation

// define variables and initialize with empty values


if (isset($_POST['name'])) {

    $nameErr = 'Name is required';
} else {
    echo 'this is valid';
}


if (empty($_POST['email'])) {
    echo 'You forgot to enter your email';
} else {
    echo 'this is valid';
}

if (empty($_POST['yourMessage'])) {
    echo 'You forgot to write your message';
} else {
    echo 'this is valid';
}
/*

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    } else {
        $name = $_POST["name"];
    } 

    if (empty($_POST['email'])) {
        $emailErr = "Missing";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST["yourMessage"])) {
        $messageErr = "Missing";
    } else {
        $message = $_POST['yourMessage'];
    }
       
}

*/
?>

