@extends('templates.base')

@section('pageTitle', 'Home')

@section('mainContent')
<main> 
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->id}} -- {{$movie->title}} -- {{$movie->original_title}}  -- {{$movie->nationality}} -- {{$movie->date}} -- {{$movie->vote}}
            </li>
        @endforeach
    </ul>
</main>
@endsection