<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        // return view('menu.topbar');
        // return view('menu.sidebar');
        return view('dashboard.dashboard');
    }

    /**
     * Show the Profile update page.
     *
     * @return view
     */
    public function indexProfile(Request $request)
    {
        $url = 'http://www.cms.co.in/api/v1/test?id=1563';
        $response = $this->client->get($url);
        $results = $response->getBody();
        $results = json_decode($results);
        return response()->json($results);
        $data = [];
        return view('profile');
    }

    /**
     * Show the profile update page.
     * @param json
     * @return json
     */
    public function updateInfo(Request $request)
    {
        try {
            $data['status'] = 200;
            $data['message'] = 'Profile Updated successfully.';
            return response($data, 200);
        } catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }
}
