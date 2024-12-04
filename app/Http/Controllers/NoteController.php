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
        return Note::create($request-all());
    }

    function show($id){
        return Note::findOrFail($id);
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
