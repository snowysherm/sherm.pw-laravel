<?php

namespace App\Http\Controllers;

use App\Models\Clock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ClockController extends Controller
{
    public function index()
    {
        $dates = Clock::all()->collect();

        $now = Carbon::now();




        return view('clock.clock', compact('dates'));
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
