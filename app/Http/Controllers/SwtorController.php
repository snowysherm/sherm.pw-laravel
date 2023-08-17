<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Prestige;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SwtorController extends Controller
{
    public function index()
    {
        $characters = Characters::all();

        $prestiges = Prestige::all();

        return view('swtor.index', compact('characters', 'prestiges'));
    }

    public function show()
    {


        return view('swtor.show');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);


        $character = new Characters();
        $character->name = $request->input('name');
        $character->save();

        return redirect(route('swtor.index'));
    }
}


