@extends('layout')

@section('title')
    FAQ Create
@endsection

@section('content')
    <div id="page" class="container">
        <h1>New FAQ</h1>

        <form method="POST" action="/FAQ">
            @csrf

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <input
                        class="input @error('title') is-danger @enderror"
                        type="text"
                        name="question"
                        id="question"
                        value="{{ old('question') }}">

                    @error('question')
                    <p class="is-danger">{{ $errors->first('question') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea
                        class="textarea @error('answer') is-danger @enderror"
                        name="answer"
                        id="answer"
                    >{{ old('answer') }}</textarea>

                    @error('answer')
                    <p class="is-danger">{{ $errors->first('answer') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection
