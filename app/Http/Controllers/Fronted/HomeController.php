<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	return view("frontend.pages.home");
    }
    public function about(){
    	return view("frontend.pages.about");
    }
    public function contact(){
    	return view("frontend.pages.contact");
    }
}
