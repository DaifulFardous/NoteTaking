<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
   public function index(){
    return view('create');
   }
   public function store(Request $request){
    $request->validate([
        'title'=> 'required',
        'content'=> 'required',
    ]);
    $note = new Note();
    $note->user_id = Auth::user()->id;
    $note->title = $request->title;
    $note->content = $request->content;
    $note->save();
    return redirect()->back()->with('message','Note saved successfully!!');
   }
   public function list(){
    $notes = Note::where('user_id',Auth::user()->id)->get();
    return view('list', compact('notes'));
   }
   public function edit($id){
    $note = Note::find($id);
    return view('edit', compact('note'));
   }
   public function update(Request $request){
    $note = Note::find($request->id);
    $note->title = $request->title;
    $note->content = $request->content;
    $note->update();
    return redirect('/note/list')->with('message','Note updated successfully!');
   }
   public function destroy($id){
    $note = Note::find($id);
    $note->delete();
    return redirect('/note/list')->with('message','Note deleted successfully!');
   }
   public function search(Request $request)
   {
       $query = $request->input('query');

       $notes = Note::where('title', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->get();
       return view('search', compact('notes'));
   }
}