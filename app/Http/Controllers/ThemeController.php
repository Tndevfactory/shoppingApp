<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function theme($val){

       

        if($val){
            
                Session::put('themedark', $val);
                Session::save();
        }else {

               Session::put('themedark', $val);
               Session::save();
        }
        
        return ['dark' => Session::get('themedark')] ;
    }
}
