<?php
// In PHP, the command

echo "<pre>";
print_r($_POST);

$nameErr = $emailErr = $messageErr = "";

$name = $email = $message = "";


// Sanitization

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
<?php


// In PHP, the command

echo "<pre>";
print_r($_POST);

$nameErr = $emailErr = $messageErr =  $addressErr = "";

$name = $email = $message = $address = "";


// 1.  Sanitization

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

echo $email;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// 2.  Validation

// define variables and initialize with empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['Name']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required'; 
    } else {
        $email = test_input($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    if (empty($_POST['address'])) {
         $addressErr = 'Address is required'; 
    } else {
         $address = test_input($_POST['address']);
    }
    
    if (empty($_POST['yourMessage'])) {
        $messageErr = 'Message is required'; 
    } else {
        $message = test_input($_POST['message']);
    }
    
    
}

// 3. EXECUTION


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
  //  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();  = smtp.gmail.com                          // Set mailer to use SMTP
 //$mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'benny.ho2530@gmail.com';                     // SMTP username
    $mail->Password   = 'ujedyuruopujhtgi';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/
?>


