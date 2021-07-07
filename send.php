<?php
date_default_timezone_set('Asia/Calcutta');
require "phpmailer/PHPMailerAutoload.php";
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST["number"];
$message = $_POST['message'];
$date = date("d/M/Y D");
$time = date("h:i A");

$mail = new PHPMailer;

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sanchitguptaitronix@gmail.com';                 // SMTP username
$mail->Password = 'itronix123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, $name);
$mail->addAddress('sanchitgupta0144@gmail.com');     // Add a recipient
$mail->addReplyTo($email, $name);
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Message from " . $name;
$mail->Body = "
    <table width='100%' style='background:transparent' border='0' cellpadding='0' cellspacing='0'>
        <tr>
            <td>
                <table bgcolor='#ffffff' style='width: 100%;max-width: 600px;' align='center' cellpadding='0'
                    cellspacing='0' border='0'>
                    <tr>
                        <td
                            style='padding: 40px 30px 20px 30px;background-image:radial-gradient(circle, rgba(255,115,0,1) 10%, rgba(254,69,0,1) 63%);'>
                            <table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td height='70' style='padding: 0 20px 20px 0;'>
                                        <img style='height:auto;'
                                            src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/icon.gif'
                                            width='70' height='70' border='0' alt='' />
                                    </td>
                                </tr>
                            </table>
                            <table align='left' border='0' cellpadding='0' cellspacing='0'
                                style='width: 100%; max-width: 425px;'>
                                <tr>
                                    <td height='70'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td style='padding: 0 0 0 3px;
                                                            font-size: 15px;
                                                            color: #fff;
                                                            font-family: sans-serif;
                                                            letter-spacing: 5px;'>
                                                    To
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style='padding: 5px 0 0 0;
                                                            color: #153643;
                                                            font-family: sans-serif;
                                                            font-size: 33px;
                                                            line-height: 38px;
                                                            font-weight: bold;'>
                                                    Sanchit Gupta
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td style='color: #153643;
                                                font-family: sans-serif;
                                                padding: 0 0 15px 0;
                                                font-size: 24px;
                                                line-height: 28px;
                                                font-weight: bold;'>
                                        Dear <span style='font-size:22px'>Mr. Sanchit Gupta</span>,
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px;
                                                line-height: 22px;
                                                color: #153643;
                                                font-family: Lucida Console;'>$message
                                        <br><br><b>Regards,</b><br>$name<br><a href='mailto:$email' style='color:orangered;text-decoration:none'>$email</a><br><a
                                            href='tel:$number' style='color:orangered;text-decoration:none'>$number</a><br>$date<br>$time
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style='padding: 20px 30px 15px 30px;
                                    background-image: radial-gradient(circle, rgba(255,115,0,1) 10%, rgba(254,69,0,1) 63%);'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td align='center' style='font-family: sans-serif;font-size: 14px;color: #fff;'>
                                        &copy; Sanchit Gupta, India 2021<br />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
	";
$mail->AltBody = 'Name: ' . $name . '\r\nEmail: ' . $email . '\r\nMessage: ' . $message . '\r\nDate:' . $date . '\r\nTime:' . $time;


if ($mail->send()) {
	echo "success";

	$mail2 = new PHPMailer;
	$mail2->isSMTP();                                      // Set mailer to use SMTP
	$mail2->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail2->SMTPAuth = true;                               // Enable SMTP authentication
	$mail2->Username = 'sanchitguptaitronix@gmail.com';                 // SMTP username
	$mail2->Password = 'itronix123';                           // SMTP password
	$mail2->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail2->Port = 587;                                    // TCP port to connect to

	$mail2->setFrom('sanchitgupta0144@gmail.com', 'Sanchit Gupta');
	$mail2->addAddress($email);     // Add a recipient
	$mail2->isHTML(true);                                  // Set email format to HTML
	$mail2->Subject = "Message from Sanchit Gupta";
	$mail2->Body = "
    <table width='100%' style='background:transparent' border='0' cellpadding='0' cellspacing='0'>
        <tr>
            <td>
                <table bgcolor='#ffffff' style='width: 100%;max-width: 600px;' align='center' cellpadding='0'
                    cellspacing='0' border='0'>
                    <tr>
                        <td
                            style='padding: 40px 30px 20px 30px;background-image:radial-gradient(circle, rgba(255,115,0,1) 10%, rgba(254,69,0,1) 63%);'>
                            <table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td height='70' style='padding: 0 20px 20px 0;'>
                                        <img style='height:auto;'
                                            src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/icon.gif'
                                            width='70' height='70' border='0' alt='' />
                                    </td>
                                </tr>
                            </table>
                            <table align='left' border='0' cellpadding='0' cellspacing='0'
                                style='width: 100%; max-width: 425px;'>
                                <tr>
                                    <td height='70'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td style='padding: 0 0 0 3px;
                                                            font-size: 15px;
                                                            color: #fff;
                                                            font-family: sans-serif;
                                                            letter-spacing: 5px;'>
                                                    From
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style='padding: 5px 0 0 0;
                                                            color: #153643;
                                                            font-family: sans-serif;
                                                            font-size: 33px;
                                                            line-height: 38px;
                                                            font-weight: bold;'>
                                                    Sanchit Gupta
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td style='color: #153643;
                                                font-family: sans-serif;
                                                padding: 0 0 15px 0;
                                                font-size: 24px;
                                                line-height: 28px;
                                                font-weight: bold;'>
                                        Dear <span style='font-size:22px'>$name</span>,
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px;
                                                line-height: 22px;
                                                color: #153643;
                                                font-family: Lucida Console;'>Thank You for contacting me, I will get back to you as soon as possible.
                                        <br><br><b>Regards,</b><br>Sanchit Gupta<br><a
                                            href='tel:+918146090777' style='color:orangered;text-decoration:none'>8146090777</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style='padding: 20px 30px 15px 30px;
                                    background-image: radial-gradient(circle, rgba(255,115,0,1) 10%, rgba(254,69,0,1) 63%);'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td align='center' style='font-family: sans-serif;font-size: 14px;color: #fff;'>
                                        &copy; Sanchit Gupta, India 2021<br />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
	";
	$mail2->send();
} else {
	echo "failed";
}