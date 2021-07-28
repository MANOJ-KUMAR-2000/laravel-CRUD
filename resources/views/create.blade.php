@extends('layouts.app')

@section('content')
<div class="container create-page">

    <h2>
        ADD A NOTE
    </h2>
    <form action="/create" method="POST">
        @csrf
        <div class="form-group row">
            <label for="topic" class="col-md-4 col-form-label text-md-right">{{ __('Topic') }}</label>

            <div class="col-md-6">
                <input id="topic" type="topic" class="form-control" name="topic" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('What you noted') }}</label>

            <div class="col-md-6">
                <textarea id="desc" type="desc" class="form-control" name="desc" required autofocus></textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-dark">
                    Add
                </button>
            </div>
        </div>
 
        <input type="hidden" name="curr_user" value={{ Auth::user()->username }}>
    </form>

</div>
@endsection