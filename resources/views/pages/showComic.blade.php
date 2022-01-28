@extends('layouts.main-layout')
@section('content')
    <div class="container-comic">
        <h2>
            Title: {{ $comic->title }}
        </h2>
        <h3>
            Author: {{ $comic->author }}
        </h3>
        <div>
            Release date: {{ $comic->release_date }}
        </div>
        <div>
            Pages: {{ $comic->pages }}
        </div>
    </div>
@endsection