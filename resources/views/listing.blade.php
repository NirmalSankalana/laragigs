@extends('layout')

@section('content')


    <div class="container">
        <div class="listing-details">
            <h2>{{$listing->title}}</h2>
            <p>{{$listing->description}}</p>
            <p>Location: {{$listing->location}}</p>
            <p>Email: {{$listing->email}}</p>
            <p>Website: {{$listing->website}}</p>
        </div>
    </div>


@endsection