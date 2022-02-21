@extends('layout')
@section('content')
    <form method="POST" action="/blog/{{$articles->id}}">
        @csrf
        <div class="field">
            <label class="label" for="questions">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" id="title" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="answer">Body</label>
            <div class="control">
                <textarea class="input" type="text" name="body" id="body"></textarea>
            </div>
        </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button-is-text">Submit</button>
            </div>
        </div>
    </form>
    <form method="POST" action="/blog/{{ $articles->id }}/edit">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
