<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    public function index()
    {

        return view('championships.index', [
            'championships' => Championship::all()
        ]);
    }

    public function create()
    {
        return view('championships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
        ]);

        $championship = new Championship();
        $championship->name = $request->name;
        $championship->description = $request->description;
        $championship->start_date = $request->start_date;
        $championship->save();

        return redirect()->route('championships');
    }

    public function edit(Championship $championship)
    {
        return view('championships.edit', [
            'championship' => $championship
        ]);
    }

    public function update(Request $request, Championship $championship)
    {
        //
    }


    public function destroy(Championship $championship)
    {
        //
    }
}
