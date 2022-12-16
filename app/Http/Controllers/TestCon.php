<?php

namespace App\Http\Controllers;

class TestCon extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Test';
        return view('test.test1', compact('data'));
    }

    // public function 
}
