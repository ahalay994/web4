<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class FeedbackController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return string
     */
    public function send(Request $request): string
    {
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = env('MAIL_FROM_ADDRESS');
        Mail::to($toEmail)->send(new FeedbackMail($comment));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
}
