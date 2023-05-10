{{-- sezione in cui mostro tutti i Movies --}}
@extends('layouts/main')

@section('content')
    <h2>Movies</h2>
    <ul>
        @foreach ($movies as $singleMovie)
            <li>
                <h3>
                    {{$singleMovie->title}}
                </h3>
            </li>
        @endforeach
    </ul>
@endsection