<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function about(){
        return view('users.about');
    }
    public function contact(){
        return view('users.contact');
    }
    public function doctor(){
        return view('users.doctor');
    }
    public function testimonials(){
        return view('users.testimonial');
    }
    public function service(){
        return view('users.service');
    }
    

}
