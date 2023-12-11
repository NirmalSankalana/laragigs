@extends('layout')

@section('content')


    <x-card>
        <div class="listing-details">
            <h2>{{$listing->title}}</h2>
            <img src="{{$listing->logo ? asset('storage/'. $listing->logo): asset('images/img1.jpg')}}" class="card-img-top" alt="Listing Image">
            <p>{{$listing->description}}</p>
            <p>Location: {{$listing->location}}</p>
            <p>Email: {{$listing->email}}</p>
            <p>Website: {{$listing->website}}</p>
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>
    </x-card>


@endsection