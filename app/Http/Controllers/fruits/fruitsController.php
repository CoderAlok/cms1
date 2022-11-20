<?php

namespace App\Http\Controllers\fruits;

use App\Http\Controllers\Controller;

class fruitsController extends Controller
{
    public function __construct()
    {}

    public function home()
    {
        return view('fruits.home');
    }

    public function contact()
    {
        return view('fruits.contact');
    }

    public function about()
    {
        $data['page_title'] = 'About Us';
        return view('fruits.about', $data);
    }
}
