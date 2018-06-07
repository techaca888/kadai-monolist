<?php

namespace App\Http\Controllers;

use Illminate\Http\Request;

use App\Item;

class WelcomeController extends Controller{
    public function index(){
        return view('welcome');
    }
    
}