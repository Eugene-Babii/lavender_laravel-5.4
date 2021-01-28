<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Rent;



class RentController extends Controller
{
    public static $start_date;
    public static $end_date;

    public function set_range_date($start, $end)
    {
        $start_date = $start;
        $end_date = $end;
    }


    public function index()
    {
        return view('main');
    }

    public function booking()
    {
        return view('booking');
    }

    public function show_booking()
    {
        return view('booking');
    }

    public function add_booking(Request $request)
    {
        $rent = new Rent;
        $rent->date = $request->datepicker;
        $rent->time_begin = $request->timebegin;
        $rent->time_end = $request->timeend;
        $rent->user_id = auth()->id();
        $rent->save();
    }

    public function cabinet()
    {
        return view('cabinet');
    }
}
