<?php
require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SendQuery'])) {
    // Collect form data
    $first_name = htmlspecialchars(trim($_POST['First_NAME']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $phone = htmlspecialchars(trim($_POST['phonenumber']));
    $email = htmlspecialchars(trim($_POST['emailid']));
    $course = htmlspecialchars(trim($_POST['SelectedCourses']));

    // Validate form data
    if (empty($first_name) || empty($last_name) || empty($phone) || empty($email) || empty($course)) {
        header("Location: index.php?error=1");
        exit();
    }

    // Email details
    $to = "gauravsinghigc@gmail.com, traderzden1@gmail.com";
    $subject = "New Login Received @ TraderzDen.com";

    // HTML Email Template
    $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 0; }
            .container { max-width: 600px; margin: 20px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
            .header { background: #007bff; color: #fff; padding: 20px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px; }
            .header img { max-width: 100px; margin-bottom: 10px; }
            .content { padding: 20px; }
            .content h2 { color: #007bff; }
            .content table { width: 100%; border-collapse: collapse; margin: 20px 0; }
            .content table th, .content table td { padding: 10px; border: 1px solid #ddd; text-align: left; }
            .content table th { background: #f8f9fa; color: #333; }
            .footer { background: #f8f9fa; padding: 10px; text-align: center; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; font-size: 12px; color: #666; }
            .footer a { color: #007bff; text-decoration: none; }
            @media only screen and (max-width: 600px) {
                .container { width: 100%; margin: 10px; }
                .header img { max-width: 80px; }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>TRADERZ DEN</h2>
                <h1>New Enquiry Received</h1>
            </div>
            <div class="content">
                <h2>Dear Team</h2>
                <p>We have received an enquiry from TraderzDen.com Website. Please contact them as soon as possible. details are mentioned below;</p>
                <table>
                    <tr>
                        <th>Field</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>' . $first_name . '</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>' . $last_name . '</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>' . $phone . '</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>' . $email . '</td>
                    </tr>
                    <tr>
                        <td>Selected Course</td>
                        <td>' . $course . '</td>
                    </tr>
                </table>
            </div>
            <div class="footer">
                <p>TraderzDen | <a href="https://traderzden.com">traderzden.com</a></p>
                <p>Contact us at: info@traderzden.com | &copy; ' . date("Y") . ' TraderzDen</p>
            </div>
        </div>
    </body>
    </html>';

    // Set headers for HTML email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: no-reply@traderzden.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to index page with success parameter
        header("Location: index.php?success=1");
        exit();
    } else {
        // Redirect to index page with error parameter
        header("Location: index.php?error=1");
        exit();
    }
} else {
    header("Location: index.php?error=1");
    exit();
}
