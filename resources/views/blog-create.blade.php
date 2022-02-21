@extends('layout')
@section('content')
    <form method="POST" action="/blog">
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
@endsection
