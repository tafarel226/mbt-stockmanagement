<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class userController extends Controller
{
    public function userData(Request $request){
        return $request->user();

    }

    public function logout(){
 
    }
}
