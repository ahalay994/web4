<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Models\Contacts;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable|string
     */
    public function index(Request $request)
    {
        $data = [];
        $data['title'] = 'Главная | ' . env('APP_NAME');
        $data['menu'] = $this->buildMenu();
        $data['settings'] = $this->buildSettings();

        if ($request->isMethod('post') == true) {
            $post_data = $request->all();;
            Contacts::create($post_data);

            $post_data['ip'] = $_SERVER['REMOTE_ADDR'];
            $post_data['body'] = $post_data['message'];

            Mail::send('emails.feedback', $post_data, function ($message) {
                $message->from(env('MAIL_FROM_ADDRESS'), 'Sender');
                $message->to(env('MAIL_FROM_ADDRESS', 'Receiver'));
                $message->subject('Письмо с формы обратной связи');
                $message->cc(env('MAIL_FROM_ADDRESS', ''));
            });

            return redirect()->route('contacts')
                ->with('msg.success', 'Ваше сообщение отправлено!.')
                ;
        }

        return view('contacts', $data);
    }
}
