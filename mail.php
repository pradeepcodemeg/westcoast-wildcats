<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if ($_POST && $_POST['first_name'] && $_POST['last_name'] && $_POST['email'] ) {
    try {
        $mail->isSMTP();
        $mail->Host = 'send.one.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@aiviking.se';
        $mail->Password = 'viking2020';
        $mail->SMTPSecure = 'ssl'; // Use 'tls' or 'ssl'
        $mail->Port = 465; // Adjust port accordingly

        // Sender and recipient settings
        $mail->setFrom('info@aiviking.se', 'Westcoast Wildcats Team');
        $mail->addAddress('info@wildcatsbasket.se', 'Sales Team');
        $mail->addAddress('pradeep.codemegsoft@gmail.com', 'Sales Team');


        // Email content
        $mail->isHTML(true);
        $mail->Subject  =   'Enquiry Form Mail';
        $content        =   '<table border="1" cellpadding="0" align="center" cellspacing="0"
                            style="border: 1px solid #ccc; width: 100%; max-width: 650px; font-family: Arial, Helvetica, sans-serif;font-size: 15px; border-collapse: collapse;">
                            <tbody>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                    </th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                        <b>Contact Request</b>
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        First Name</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                        ' . $_POST['first_name'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        First Name</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                        ' . $_POST['last_name'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Email</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['email'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Description</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['message'] . '</td>
                                </tr>
                            </tbody>
                        </table>';

        $mail->Body     =   $content;

        // Send email
        $mail->send();
        echo 'Your request has been submitted successfully. We will contact you shortly.';
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // echo 'Something went wrong please try again later.';
    }
}
