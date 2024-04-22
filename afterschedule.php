<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);
if($_SERVER['REQUEST_METHOD']=="POST") {
    $data = json_decode(file_get_contents('php://input'), true); // Decode JSON data
    $date = $data['date'];
    $time = $data['time'];
    $arr = $data['arr'];
    $rand = rand(1000, 9999);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';  // Specify your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'specareenterprises@gmail.com'; // SMTP username
        $mail->Password = 'XdIG2sMJZjyc6SWY'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to
    
        // Recipients
        $mail->setFrom('account@boom.com', 'Boom'); // Sender's email and name
        
        foreach ($arr as $email) {
            $mail->addAddress($email); // Add each participant as a recipient
        }
    
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Confirmation: Your Meeting is Scheduled for '.$date.' at '.$time.' in Boom App';
        $mail->Body = '
            <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f4f4f4">
                <tr>
                    <td>
                        <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <tr>
                                <td style="padding: 30px;">
                                    <h1 style="color: #333; margin-bottom: 20px;">Meeting Scheduled - Boom</h1>
                                    <p style="color: #666; margin-bottom: 10px;">Your meeting has been scheduled successfully.</p>
                                    <table cellspacing="0" cellpadding="0" width="100%" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                        <tr>
                                            <td>
                                                <p style="margin-bottom: 5px;"><strong>Date:</strong> '.$date.'</p>
                                                <p style="margin-bottom: 5px;"><strong>Time:</strong> '.$time.'</p>
                                                <p style="margin-bottom: 5px;"><strong>Participants:</strong> '.implode(", ", $arr).'</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p style="color: #666; margin-top: 20px;">If you have any questions or need to reschedule, please feel free to contact us.</p>
                                    <table cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td bgcolor="#007bff" style="border-radius: 5px;">
                                                <a href="http://localhost/boom/meeting.html?roomID='.$rand.'" style="color: #ffffff; text-decoration: none; display: inline-block; padding: 10px 20px;" target="_blank">Join the Meeting</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        '; // Load HTML template
        $mail->AltBody = 'This is the text-only body in case HTML email is not supported'; // Optional: plain text alternative
    
        // Send email
        $mail->send();
        echo 'Email sent successfully';
    } catch (Exception $e) {
        echo "Email sending failed: {$mail->ErrorInfo}";
    }
       
}
?>
