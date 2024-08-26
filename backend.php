<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Define variables and set to empty values
$name = $email = $phone = $country = $gender = $message = "";
$errors = [];

// Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $errors[] = "Only letters and white space allowed in name";
        }
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }

    if (empty($_POST["phone"])) {
        $errors[] = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $errors[] = "Only numbers are allowed in phone";
        }
    }

    if (empty($_POST["country"])) {
        $errors[] = "Country is required";
    } else {
        $country = test_input($_POST["country"]);
    }

    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    // If no errors, send email
    if (empty($errors)) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'murattilquranacademy@gmail.com';                     //SMTP username
            $mail->Password   = "gssd mpbq odph owkp";                               //SMTP password
            $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set 

            //Recipients
            $mail->setFrom('murattilquranacademy@gmail.com', 'New Trial');
            $mail->addAddress('murattilquranacademy1@gmail.com', 'Mohamed Saeed');     //Add a recipient


            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Trial Message';
            $mail->Body    = '
            <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to [Your Website]</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #4CAF50;
            padding: 10px 0;
            text-align: center;
            color: white;
            border-radius: 10px 10px 0 0;
        }

        .header h1 {
            margin: 0;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
            color: #333333;
        }

        .content p {
            margin: 20px 0;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            color: #777777;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Asslam o alikum Murattil Admins</h1>
        </div>
        <div class="content">
            <p>There is a new trial from your website</p>
            <div><b>Name:</b> '.$name. '</div>
            <div><b>Email:</b> ' . $email. '</div>
            <div><b>Phone:</b> ' . $phone. '</div>
            <div><b>Country:</b> ' . $country. '</div>
            <div><b>Gender:</b> ' . $gender. '</div>
            <div><b>Message:</b> ' . $message.'</div>


            <p>Best regards,<br />The Murattil Team</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Egensolve. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
            ';

            $mail->send();
            session_start();
            $_SESSION['message'] = 'Message has been sent successfully!';
            $_SESSION['message_type'] = 'success';
        } catch (Exception $e) {
            session_start();
            $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $_SESSION['message_type'] = 'error';
        }
    } else {
        session_start();
        $_SESSION['message'] = implode('<br>', $errors);
        $_SESSION['message_type'] = 'error';
        
    }
    header('Location: index.php');
    exit();
} else {
    echo "<p style='color:red;'>Not Allowed</p>";
}

// Function to sanitize input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
