<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        return response()->view('welcome');
    }

    public function sendEmail(Request $request)
    {
        // untuk melihat hasilnya pesan terkirim ke emailnya, harus login ke website https://mailtrap.io/ dengan email fisikamodern00@gmail.com

        // ambil email address
        $emailAddress = $request->emailAddress;

        // mengambil subject
        $subject = 'Test Subject';
        
        // ubah \r\n menjadi <br/>
        $body = str_replace("\r\n", "<br/>", $request->body);

        // $body = "Hi Jidan!, fggdfgvfxvvxdv 121212121212212<br/> gftfrt Agency Sandbox Normal[campaign-module-name]<br/> Your Password Has been reset to: MlHbSWgW<br/> If you have any questions, don't hesitate to email fisikamodern00@gmail.com<br/> Thank you!";

        Mail::to($emailAddress)->send(new TestMail($subject, $body));

        dd('Berhasil');
    }

}
