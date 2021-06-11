<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    // Archive
    public function index(){

        $holidays = Holiday::all();
      //  dump($holidays);

        return view('holidays', compact('holidays'));
    }
}
