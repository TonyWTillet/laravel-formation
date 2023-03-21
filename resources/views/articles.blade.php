@extends('layouts.app')
@section('content')
        @foreach($articles as $article)
            <li>
                <a href="/articles/">
                    {{ $article['title'] }}
                </a>
            </li>
        @endforeach
@endsection
