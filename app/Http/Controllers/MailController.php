<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpmailerException;

class MailController extends Controller
{
    public function sendMail()
    {
        $mail = new \PHPMailer(true);
        try {
            $mail->isSMTP(); // tell to use smtp
            $mail->CharSet = "utf-8"; // set charset to utf8
            $mail->SMTPAuth = false;  // use smpt auth
            $mail->SMTPSecure = false; // or ssl
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Host = "mail2.carlocorinto.com";
            $mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing.
            $mail->Username = "contacto@carlocorinto.com";
            $mail->Password = "con2901";
            $mail->setFrom("contacto@carlocorinto.com", "Firstname Lastname");
            $mail->Subject = "Test";
            $mail->MsgHTML("This is a test");
            $mail->addAddress("patolin00755@hotmail.com", "Recipient Name");
            $mail->send();
        } catch (phpmailerException $e) {
            dd($e);
        } catch (Exception $e) {
            dd($e);
        }
        die('success');
        $transport = \Swift_SmtpTransport::newInstance('mail2.carlocorinto.com', 587)
            ->setUsername('contacto@carlocorinto.com')
            ->setPassword('con2901')
        ;

        /*
        You could alternatively use a different transport such as Sendmail or Mail:

        // Sendmail
        $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

        // Mail
        $transport = Swift_MailTransport::newInstance();
        */

// Create the Mailer using your created Transport
        $mailer = \Swift_Mailer::newInstance($transport);

// Create a message
        $message = \Swift_Message::newInstance('Wonderful Subject')
            ->setFrom(array('john@doe.com' => 'John Doe'))
            ->setTo(array('patolin00755@hotmail.com'))
            ->setBody('Here is the message itself');

        return $message;
    }
}
