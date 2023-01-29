<?php

namespace App\Http\Controllers;  
use Illuminate\Http\Request;

class CustomerAttentionController extends Controller  {  
    public function customer_attention()  {  
        $viewData = [];  
    
        return view('pages.customer_attention')->with("viewData", $viewData);   
    }   
}