@extends('layout')

@section('content')
    

    @include('partials._header')
    @include('partials._search')
    <div class="container">
        @if(count($listings)==0)
            <p>No Listings Found</p>
        @else
            <div class="row">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
        @endif
    </div>
    
    

    @endsection