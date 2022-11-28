<?php

namespace App\Http\Controllers;

use App\Models\Video_url;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function aboutme() {
        return view('aboutme');
    }

    public function contact() {
        return view('contact');
    }

    public function references() {
        $videos = Video_url::all();
//        dd($videos);
//        return view('welcome')->with($videos);
        return view('welcome',['videos' => $videos]);
    }
}
