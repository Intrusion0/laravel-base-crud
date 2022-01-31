@extends('layouts.main-layout')
@section('content')
    
    <div class="home-page">
        <h2>
            <a href="{{ route('create') }}">Create new Comic</a>
        </h2>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                    <span>
                        <a href="{{ route('edit', $comic->id) }}">EDIT</a>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>

@endsection