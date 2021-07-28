<?php

namespace App\Http\Controllers;

use App\Models\all_notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllNotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_get(){
        return view('create');
    }

    public function create_post(){
        $note = new all_notes();
        $note->username = request("curr_user");
        $note->topic = request("topic");
        $note->desc = request("desc");
        $note->save();

        return redirect("/home");
    }

    public function delete_note($username, $id){
        $note = all_notes::findorFail($id);
        $note->delete() ; 
        return redirect("/home");
    }

    public function update_get($username, $id){
        $note = all_notes::where("id", $id)->get()[0];
        return view("/update", ['note'=>$note]);
    }

    public function update_post($username, $id){
        $note = all_notes::findorFail($id);
        $note->username = request("curr_user");
        $note->topic = request("topic");
        $note->desc = request("desc");
        $note->save();

        return redirect("/home");
    }
}