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

        return view('swtor.index', compact('characters'));
    }

    public function show($id)
    {
        $character = Characters::find($id);

        return view('swtor.show', compact('character'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $character       = new Characters();
        $character->name = $request->input('name');
        $character->save();

        return redirect(route('swtor.index'));
    }

    public function storePrestige(Request $request, $id) {
        $character = Characters::findOrFail($id);
        $character->brontes_wings = $request->input('brontes_wings');
        $character->save();

        return redirect(route('swtor.index'));
    }


}


