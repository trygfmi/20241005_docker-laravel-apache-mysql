<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MailService;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send()
    {
        $mailService = new MailService();
        // dd($mailService);
        $mailService->sendEmail('gvgbd4_gvok@yahoo.co.jp', 'Test Email', 'This is a test email using Gmail API.');
    }

    public function sendLog(){
        Mail::raw('This is a test email.', function ($message) {
            $message->to('test@example.com')
                    ->subject('Test Email');
        });
    }
}
