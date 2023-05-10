{{-- sezione in cui mostro tutti i Movies --}}
@extends('layouts/main')

@section('content')
<div class="container">
    <h2>Movies</h2>
    <ul id="my-ul">
        @foreach ($movies as $singleMovie)
            <li class="my-li">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://pad.mymovies.it/filmclub/2019/01/033/locandina.jpg" alt="Card image cap">
                    <div class="card-header text-uppercase my-title">
                        <strong>
                            {{$singleMovie->title}}
                        </strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item original-title"><strong>Original title: </strong>{{$singleMovie->original_title}}</li>
                        <li class="list-group-item"><strong>Nationality: </strong>{{$singleMovie->nationality}}</li>
                        <li class="list-group-item"><strong>Date: </strong>{{$singleMovie->date}}</li>
                        <li class="list-group-item"><strong>Vote: </strong>{{$singleMovie->vote}}/10</li>
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection