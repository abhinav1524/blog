<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.index');
    }
    public function about(){
        return view('website.about.index');
    }

    public function contact(){
        return view('website.contact.index');
    }

    public function privacyPolicy(){
        return view('website.privacyPolicy.index');
    }

    public function termsandCondition(){
        return view('website.termsandCondition.index');
    }

    public function faq(){
        return view('website.faq.index');
    }

    public function error(){
        return view('website.error.index');
    }

    public function standardFormat(){
        return view('website.standardFormat.index');
    }
}
