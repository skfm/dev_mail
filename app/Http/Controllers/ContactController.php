<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //入力画面
    public function input()
    {
        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '入力画面',
        );

        return view('contact.input')->with($hash);
    }

    // 確認画面
    public function confirm(Request $request)
    {
        $hash = array(
            'request' => $request,
            'title' => 'お問い合わせ',
            'subtitle' => '確認画面',
        );
        return
        view('contact.confirm')->with($hash);
    }

    // 完了画面
    public function finish(Request $request)
    {
        $contact = $request;

        Mail::to($contact->email)->send(new ContactMail($contact));
        // Mail::to($contact->email)->send(new \App\Mail\ContactMail($contact));

        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '完了画面',
        );

        return view('contact.finish')->with($hash);
    }
}
