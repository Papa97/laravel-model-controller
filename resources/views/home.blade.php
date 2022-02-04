@extends('layouts.base')

@section('pageTitle')
    home
@endsection

@section('pageContent')
    <div class="container">
        <div class="card-container">
            @foreach ($movies as $movie)
                <div class="card">
                    <ul>
                        <h3>{{$movie['title']}}</h3>
                        <li>Voto: {{$movie['vote']}}</li>
                        <li>Lingua: {{$movie['nationality']}}</li>

                    </ul>


                </div>
            @endforeach
        </div>
    </div>
{{-- @dd($movies) --}}
@endsection