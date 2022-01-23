@extends('layout')

@section('title')
    FAQ
@endsection

@section('content')
    <main>
        <h1>@yield('title')</h1>
        <div>
            <h2><a href="{{ route('FAQ.create') }}">Create New FAQ</a></h2>
        </div>
        <ul>
            @foreach($faqs as $faq)
                <li>{{ $faq->question }}</li>
                {{ $faq->answer }}
                <h4><a href="{{ route('FAQ.edit', $faq) }}">Edit</a></h4>
                <hr>
            @endforeach
        </ul>
    </main>
@endsection
