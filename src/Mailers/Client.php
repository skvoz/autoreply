<?php

namespace Src\Mailers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Client implements MailerInterface
{
    private $mail;

    public function __construct($provider)
    {
        $this->mail = new PHPMailer(true);
    }

    public function auth($params)
    {
        
    }

    public function fetchmail()
    {
        return [1];
    }

    public function reply()
    {
        
    }

    public function markAsNoSpam()
    {

    }

    public function send()
    {



        $this->mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $this->mail->SMTPDebug = 2;
//Set the hostname of the mail server
        $this->mail->Host = 'smtp.gmail.com';
// use
// $this->mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $this->mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
        $this->mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
        $this->mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
        $this->mail->Username = "skvoz.ne";
//Password to use for SMTP authentication
        $this->mail->Password = "270982";
//Set who the message is to be sent from
        $this->mail->setFrom('skvoz.ne@gmail.com', 'First Last');
//Set an alternative reply-to address
        $this->mail->addReplyTo('skvoz.ne@gmail.com', 'First Last');
//Set who the message is to be sent to
        $this->mail->addAddress('skvoz.ne@gmial.com', 'John Doe');
//Set the subject line
        $this->mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//        $this->mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        $this->mail->msgHTML('Gruzite apple bochka');
//Replace the plain text body with one created manually
        $this->mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//        $this->mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors

        //You can change 'Sent Mail' to any other folder or tag
        $path = "{imap.gmail.com:993/imap/ssl}/INBOX";
        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $this->mail->Username, $this->mail->Password);
        $result = imap_append($imapStream, $path, $this->mail->getSentMIMEMessage());
        imap_close($imapStream);
        return $result;
//
//        if (!$this->mail->send()) {
//            echo "Mailer Error: " . $this->mail->ErrorInfo;
//        } else {
//            echo "Message sent!";
//            //Section 2: IMAP
//            //Uncomment these to save your message in the 'Sent Mail' folder.
//            #if (save_mail($this->mail)) {
//            #    echo "Message saved!";
//            #}
//        }

    }
}