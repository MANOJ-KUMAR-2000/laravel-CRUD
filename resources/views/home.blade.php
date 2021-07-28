@extends('layouts.app')

@section('content')
<div class="container home-main-con">
    <h2>All your Notes</h2>
    <a href="/create" class="add-note">+ Add a Note</a>
    <div class="row justify-content-center all-notes-div">
        @if (count($notes)>0)
            @foreach ($notes as $note)
            <div class="col-md-3 note-div">
            <div class="card-topic"><h3>{{$note->topic}}</h3></div>
            <div class="card-desc">
                <p>{{$note->desc}}</p>
            </div>
            <div class="card-link">
                <a href={{'/note/'.$note->username.'/'.$note->id}}><i class="bi bi-trash"></i></a>
                <a href={{'/update/'.$note->username.'/'.$note->id}}><i class="bi bi-pencil-square"></i></a>
            </div>
            </div>
            @endforeach

            @else
                <div class="no-note">No Notes Availabel</div>

        @endif
            

    </div>
</div>
@endsection
