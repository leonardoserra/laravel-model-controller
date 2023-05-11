@extends('layouts.app')

@section('page-title','Homepage')

@section('content')

        <ul>
        @foreach ($movies as $movie )

        <li>
            {{$movie}}
        </li>
            
        @endforeach
        </ul>

@endsection