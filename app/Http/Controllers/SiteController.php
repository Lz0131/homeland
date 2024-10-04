<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('e-commerce.index');
    }

    public function buy(){
        return view('e-commerce.buy');
    }

    public function rent(){
        return view('e-commerce.rent');
    }

    public function properties(){
        return view('e-commerce.properties');
    }
    
    public function about(){
        return view('e-commerce.about');
    }

    public function contact(){
        return view('e-commerce.contact');
    }

    public function login(){
        return view('e-commerce.login');
    }

    public function register(){
        return view('e-commerce.register');
    } 

    public function property_details(){
        return view('e-commerce.property-details');
    }

}
