<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        //
        $user = User::all();
        

        return view('home', ['users' => $user]);
    }
}
