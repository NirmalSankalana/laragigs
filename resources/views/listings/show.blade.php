@extends('layout')

@section('content')


    <x-card>
        <div class="listing-details">
            <h2>{{$listing->title}}</h2>
            <p>{{$listing->description}}</p>
            <p>Location: {{$listing->location}}</p>
            <p>Email: {{$listing->email}}</p>
            <p>Website: {{$listing->website}}</p>
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>
    </x-card>


@endsection