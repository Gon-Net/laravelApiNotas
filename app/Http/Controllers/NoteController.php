<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    function index(){
        return Note::all();
    }

    function store(Request $request){

        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'content' => 'required'
        // ]);

        $date = date('Y-m-d H:i:s');
        $request->merge(['date' => $date]);
        return Note::create($request->all());
    }

    function show($id){
        $note = Note::find($id);
        if(!$note){
            return response()->json(['message' => 'Nota no encontrada'], 404);
        } 
        return $note;
    }

    function update(Request $request, $id){
        $note = Note::findOrFail($id);
        $note->update($request->all());
        return $note;
    }

    function destroy($id){
        $note = Note::findOrFail($id);
        $note->delete();
        return $note;
    }
}
