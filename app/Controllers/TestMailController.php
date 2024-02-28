<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class TestMailController extends Controller
{
    public function sendMail()
    {
        $to = 'culosisdee@gmail.com';
        $from = 'barangayrawanlala@gmail.com';
        $subject = 'Account Activation - Test Email';
        $message = 'Hello Resident, <br><br>
                    Thanks! your acccount created successfully. Please click the link to activate your account <br>'
            . '<a href="' . base_url() . 'testmailcontroller/verify">Activate Now</a> <br> <br>
                    Thanks <br> Team';

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom($from);
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
            echo "Account Created Successfully. Please activate";
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

    public function verify()
    {
        echo "Activation Verified";
    }
}
