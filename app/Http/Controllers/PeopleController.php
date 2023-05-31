<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }

    public function show($id)
    {
        $person = People::find($id);
        
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        return response()->json($person);
    }

    public function update(Request $request, $id)
    {
        $person = People::find($id);
        
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        $person->update($request->all());
        
        return response()->json($person);
    }

    public function destroy($id)
    {
        $person = People::find($id);
        
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        $person->delete();
        
        return response()->json(['message' => 'Person deleted']);
    }

    public function store(Request $request)
    {
        $person = People::create($request->all());
        
        return response()->json($person, 201);
    }
}