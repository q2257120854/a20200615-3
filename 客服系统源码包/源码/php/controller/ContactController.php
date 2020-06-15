<?php

class ContactController extends Controller
{
    public function contactAction()
    {
        $request    = $this->get('request');
        $validators = $this->get('model_validation');
        $template   = $this->get('template_interface');

        // Get the input

        $name     = $request->postVar('name');
        $mail     = $request->postVar('mail');
        $question = $request->postVar('question');
        $userInfo = $request->postVar('userInfo', false);

        // Validate the input

        $errors = $validators->validateContactData(compact('name', 'mail', 'question'));

        if(count($errors) === 0)
        {
            // Create the message

            $question = nl2br($question);
            $userInfo = json_decode($userInfo);

            $message = $template->renderView('email/contact.html.php', compact('mail', 'name', 'userInfo', 'question'), true);

            // Send the e-mail

            $to      = $this->get('config')->data['appSettings']['contactMail'];
            $subject = $this->get('i18n')->trans('app.name') . ' (' . $name . ')';

            $success = $this->get('mailer')->sendMessage($mail, $to, $subject, $message);

            // Return the response

            return $this->json(array('success' => $success));
        }

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }
}

?>
