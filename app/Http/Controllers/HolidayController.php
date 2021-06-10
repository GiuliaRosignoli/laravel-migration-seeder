<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
    // Archive
    public function index(){
        return view('holidays');
    }
}
