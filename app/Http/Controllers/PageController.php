<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function PageMain(){
        return view('main');
    }
    public function PageAbout(){
        return view('about');
    }
    public function PageProfile(Request $request){
        if ($request->input('user') == null)
            return view('profile');
        else
            return view('profile', [ 'requested_user' => $request->input('user') ]);
    }
}
