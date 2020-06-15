<?php

require_once ROOT_DIR . '/lib/PHPMailer/class.phpmailer.php';
require_once ROOT_DIR . '/lib/PHPMailer/class.pop3.php';
require_once ROOT_DIR . '/lib/PHPMailer/class.smtp.php';

class Mailer extends Service
{
    public function sendMessage($from, $to, $subject, $body, $attachments = null)
    {
        $config = $this->get('config')->data['services']['mailer'];
        $mail   = new PHPMailer;

        // Configure SMTP

        ob_start();

        if($config['smtp'])
        {
            $mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->Timeout    = 15;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = $config['smtpSecure'];
            $mail->Host       = $config['smtpHost'];
            $mail->Port       = $config['smtpPort'];
            $mail->Username   = $config['smtpUser'];
            $mail->Password   = $config['smtpPass'];

            if(empty($mail->SMTPSecure))
            {
                // Disable SSL verification

                $mail->SMTPOptions = array(

                    'ssl' => array(

                        'verify_peer'       => false,
                        'verify_peer_name'  => false,
                        'allow_self_signed' => true
                    )
                );
            }

            $mail->setFrom($config['smtpUser']);
        }
        else
        {
            // Construct default host-based address

            $appLabel    = $this->get('config')->data['appLabel'];
            $defaultFrom = $appLabel . '@' . $this->get('request')->getServerHost();

            $mail->setFrom($defaultFrom);
        }

        // Prepare the message

        $mail->addAddress($to);
        $mail->addReplyTo($from);
        $mail->isHTML(true);

        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        // Add attachments

        if(is_array($attachments))
        {
            foreach($attachments as &$a)
            {
                if(isset($a['name']) && isset($a['content']))
                {
                    $type = isset($a['type']) ? $a['type'] : '';

                    $mail->addStringAttachment($a['content'], $a['name'], 'base64', $type);
                }
            }
        }

        // Send

        $success = $mail->send();

        $debugInfo = ob_get_contents();
        ob_end_clean();

        if(!$success)
        {
            $this->get('logger')->error($mail->ErrorInfo . "\nDebug information:\n\n" . $debugInfo);
        }

        return $success;
    }
}

?>
