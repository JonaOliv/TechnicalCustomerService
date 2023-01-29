<?php

namespace App\Http\Controllers;  
use Illuminate\Http\Request;

class HomeController extends Controller  {  
    public function home()  {  
        $viewData = [];  
    
        return view('pages.home')->with("viewData", $viewData);   
    }   
}