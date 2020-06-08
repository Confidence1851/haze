<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

class WebController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function aboutus(){
        return view('about-us');
    }

    public function gallery(){
        return view('gallery');
    }

    public function book_now(){
        $user = Auth::User();
        $artists = User::where('id','<>' ,$user->id)->where('role' , 'Admin')->get();
        return view('book', compact('user' , 'artists'));
    }
}
