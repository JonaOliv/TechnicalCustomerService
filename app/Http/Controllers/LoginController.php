<?php

namespace App\Http\Controllers;  
use Illuminate\Http\Request;

class LoginController extends Controller  {  
    public function login()  {  
        $viewData = [];  
    
        return view('pages.login')->with("viewData", $viewData);   
    }   
}