<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Models\Character;
use App\Models\House;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return view('character.index',["data" => Character::all()->sortBy('name')]);
    }
    public function create()
    {
        return view('character.create',["data" => House::all()]);
    }
    public function store(StoreCharacterRequest $request)
    {
        //
    }
    public function show($id)
    {
        return view('character.show',["data" => Character::findOrFail($id)]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $data = Character::findOrFail($id);
        $data->delete();
        return redirect()->action(
            [CharacterController::class, 'index'], ["phones" => Character::all()]
        );
    }
}
