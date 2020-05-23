<?php

namespace App\Http\Controllers;

use App\PublishingHouse;
use Illuminate\Http\Request;

class AdminPublishingHousesController extends Controller
{
    public function index()
    {
        $houses = PublishingHouse::orderBy('name')->get();
        return view ('admin.publishing_houses.index', compact('houses'));
    }


    public function store(Request $request)
    {
        $house = new PublishingHouse(request()->validate([
            'name' => 'required',
            'country' => 'required'
        ]));
        $house->save();
        return redirect(route('admin.houses.index'));
    }


    public function edit($id)
    {
        $house = PublishingHouse::findOrFail($id);
        return view('admin.publishing_houses.edit', compact('house'));
    }


    public function update(Request $request, $id)
    {
        $house = PublishingHouse::findOrFail($id);
        $house->update(request()->validate([
            'name' => 'required',
            'country' => 'required'
        ]));
        return redirect(route('admin.houses.index'));
    }




}
