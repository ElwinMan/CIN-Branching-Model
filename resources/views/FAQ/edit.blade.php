@extends('layout')

@section('title')
    FAQ Edit
@endsection

@section('content')
    <div id="page" class="container">
        <h1>Update FAQ</h1>

        <form method="POST" action="/FAQ/{{ $faq->id }}">
            @csrf
            @method('put')

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <input class="input" type="text" name="question" id="question" value="{{ $faq->question }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer">{{ $faq->answer }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/FAQ/{{ $faq->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </div>
@endsection
