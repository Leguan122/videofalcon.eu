<?php

namespace App\Http\Controllers;

use App\Mail\contactForm;
use App\Models\Video_url;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TimeHunter\LaravelGoogleReCaptchaV3\GoogleReCaptchaV3;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function aboutme() {
        return view('aboutme');
    }

    public function contact() {
        return view('contact');
    }

    public function email() {
        $request = [
            'name' => "Adam Kiss",
            'email' => 'tu je kontakt',
            'msg' => 'Toto je proste random text'
        ];
        return view('emails.form')->with($request);
    }

    public function references() {
        $videos = Video_url::all();
        $videos = [
            ["https://www.youtube.com/embed/3R4NcDzF1NQ", "Janka & Martin"],
            ["https://www.youtube.com/embed/LJwszlzvErU", "Katka & Michal"],
            ["https://www.youtube.com/embed/77pjs5BoC7Q", "Lenka & Marek"],
            ["https://www.youtube.com/embed/V9yJnW349rE", "Vianočná výzdoba"],
            ["https://www.youtube.com/embed/-IgK7736TK8", "Svadobný zostrih z Budatína"],
            ["https://www.youtube.com/embed/46wBz69H4z8", "Ľudka a Rastík"]

        ];
//        dd($videos);
//        return view('welcome')->with($videos);
        return view('welcome',['videos' => $videos]);
    }

    public function sendingMsg(Request $request) {
//        dd($request);
        Mail::to('form@videofalcon.eu')
//        ->cc('leguan25@gmail.com')
        ->send(new contactForm($request));
        return view('contact');
    }
}
