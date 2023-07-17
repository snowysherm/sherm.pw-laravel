<?php

namespace App\Http\Controllers;

class SwtorController extends Controller
{
    public function index()
    {
        return view('swtor');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);
}

}


