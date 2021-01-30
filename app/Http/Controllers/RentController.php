<?php

namespace App\Http\Controllers;

use App;
use App\Rent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class RentController extends Controller
{
    public static $start_date;
    public static $end_date;

    public function set_range_date($start, $end)
    {
        $start_date = $start;
        $end_date = $end;
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('main');
    }

    public function booking()
    {
        return view('booking');
    }

    public function show_all()
    {
        // $rents = DB::table('rents')->get();
        // $rents = App\Rent::all();
        $rents = DB::table('rents')
            ->join('users', 'rents.user_id', '=', 'users.id')
            ->orderBy('date', 'asc')
            ->get();
        return view('cabinet', compact('rents'));
    }

    public function show_paid()
    {
        // $rents = DB::table('rents')->get();
        $rents = App\Rent::ispaid();
        return view('cabinet', compact('rents'));
    }

    public function sendMail()
    {
        // 1 - имя файла с текстом сообщения
        // 2 - массив данных для представления (имя отправителя)
        // 3 - функция с получатлем, темой и т.п.
        Mail::send(['text' => 'mail'], ['name', 'Лаванда'], function ($message) {
            $message->to('jie.babii@gmail.com', 'To admin')->subject('Бронирование лавандового поля');
            $message->from('jie.babii@gmail.com', 'From admin');
        });
    }

    public function add_booking(Request $request)
    {
        $rent = new Rent;
        $rent->date = $request->datepicker;
        $rent->time_begin = $request->timebegin;
        $rent->time_end = $request->timeend;
        $rent->user_id = auth()->id();
        $rent->save();

        // $rents = DB::table('rents')->where('user_id', '=', auth()->id())->get();
        // $rents = App\Rent::all();
        $this->sendMail();
        if (Auth::attempt(['email' => 'jie.babii@gmail.com', 'password' => '$2y$10$FhLufVgpkV1FVfXdDyNEpOdLpwY9Sy6QSy6BUKxDGiLo8.fwWh6Yi'])) {
            $rents = DB::table('rents')
                ->join('users', 'rents.user_id', '=', 'users.id')
                ->orderBy('date', 'asc')
                ->get();
            // dd($rents);
            return view('cabinet', compact('rents'));
            // return redirect()->intended('dashboard');
        } else {
            $rents = DB::table('rents')
                ->join('users', 'rents.user_id', '=', 'users.id')
                ->where('rents.user_id', '=', auth()->id())
                ->orderBy('date', 'asc')
                ->get();

            // $rents = DB::table('rents')->where('user_id', '=', auth()->id())->orderBy('date', 'asc')->get();
            return view('cabinet', compact('rents'));
        }
        // return view('cabinet', compact('rents'));
    }

    public function cabinet()
    {
        if (Auth::attempt(['email' => 'jie.babii@gmail.com', 'password' => '$2y$10$FhLufVgpkV1FVfXdDyNEpOdLpwY9Sy6QSy6BUKxDGiLo8.fwWh6Yi'])) {
            $rents = DB::table('rents')
                ->join('users', 'rents.user_id', '=', 'users.id')
                ->orderBy('date', 'asc')
                // ->select('rents.*', 'users.name', 'users.email')
                ->get();
            // dd($rents);
            return view('cabinet', compact('rents'));
            // return redirect()->intended('dashboard');
        } else {
            $rents = DB::table('rents')
                ->join('users', 'rents.user_id', '=', 'users.id')
                ->where('rents.user_id', '=', auth()->id())
                ->orderBy('date', 'asc')
                ->get();

            // $rents = DB::table('rents')->where('user_id', '=', auth()->id())->orderBy('date', 'asc')->get();
            return view('cabinet', compact('rents'));
        }
    }
}
