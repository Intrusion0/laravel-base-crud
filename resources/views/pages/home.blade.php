@extends('layouts.main-layout')
@section('content')
    
    <div class="home-page">
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection