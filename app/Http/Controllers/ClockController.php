<?php

namespace App\Http\Controllers;

use App\Models\Clock;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClockController extends Controller
{
    public function index()
    {
        $timeLeft = Carbon::parse(Clock::where('id', 1)->first()->date);
        $diff = $timeLeft->diffInDays();

        return view('clock.clock', compact('diff'));
    }

    public function store(Request $request)
    {

        $clock = new Clock();
        $clock->date = $request->input('date');
        $clock->name = $request->input('name');
        $clock->save();

        return redirect(route('clock.index'));
    }
}
