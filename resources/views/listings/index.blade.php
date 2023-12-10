@extends('layout')

@section('content')
    

    @include('partials._header')
    <div class="container my-5">
        @if(count($listings)==0)
            <p>No Listings Found</p>
        @else
            <div class="row">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
        @endif
        <div class="d-flex justify-content-center">
            {{$listings->links('pagination::bootstrap-4')}}
        </div>
    </div>
    @endsection