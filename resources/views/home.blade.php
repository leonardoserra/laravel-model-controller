@extends('layouts.app')

@section('page-title','Homepage')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie )
            <div class="col-3 mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Titolo: {{$movie['title']}}
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Titolo originale: {{$movie['original_title']}}
                    </li>
                    <li class="list-group-item">
                       Nazionalitá: {{$movie['nationality']}}
                    </li>
                    <li class="list-group-item">
                       Data: {{$movie['date']}}
                    </li>
                </ul>
                    <div class="card-footer">
                       Voto: {{$movie['vote']}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        

@endsection