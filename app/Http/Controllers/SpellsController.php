<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorespellsRequest;
use App\Http\Requests\UpdatespellsRequest;
use App\Models\spells;
//use GuzzleHttp\Psr7\Request;

class SpellsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spells = spells::all();
        return json_encode($spells,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spell = new spells();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorespellsRequest $request)
    {
        $spell = new spells();
        $spell->name = $request->name;
        $spell->description = $request->description;
        $spell->level = $request->level;
        $spell->icon = $request->icon;
        $spell->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $spell = spells::find($id);
        return json_encode($spell,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpdatespellsRequest $request, $id)
    {
        $spell = spells::find($id);
        $spell->name = $request->name;
        $spell->description = $request->description;
        $spell->level = $request->level;
        $spell->icon = $request->icon;
        $spell->save();
        
        return json_encode($spell,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatespellsRequest $request, $id)
    {
        $spell = spells::find($id);
        $spell->name = $request->name;
        $spell->description = $request->description;
        $spell->level = $request->level;
        $spell->icon = $request->icon;
        $spell->save();
        
        return json_encode($spell,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $spell = spells::find($id);
        $spell->delete();
    }
}
