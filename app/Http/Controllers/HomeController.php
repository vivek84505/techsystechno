<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use session;
use DB;

class HomeController extends Controller
{
    //
    public function index(){

        return View::make('home');

    }

    

}
