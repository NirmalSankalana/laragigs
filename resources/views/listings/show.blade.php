@extends('layout')

@section('content')

    <div class="container mx-auto mt-8">
        <x-card>
            <div class="listing-details p-6">
                <h2 class="text-2xl font-semibold mb-4">{{$listing->title}}</h2>
                <img src="{{$listing->logo ? asset('storage/'. $listing->logo): asset('images/img1.jpg')}}" class="card-img-top w-full mb-4" alt="Listing Image">
                <p class="mb-4">{{$listing->description}}</p>
                <p><strong>Location:</strong> {{$listing->location}}</p>
                <p><strong>Email:</strong> {{$listing->email}}</p>
                <p><strong>Website:</strong> {{$listing->website}}</p>
                <x-listing-tags :tagsCsv="$listing->tags" />
            </div>
        </x-card>
        
        <x-card class="mt-4">
            <div class="p-4">
                <a href="/listings/{{$listing->id}}/edit" class="text-blue-500 hover:underline">
                    <i data-feather="edit" class="mr-2"></i>Edit Listing
                </a>
            </div>
            <div class="p-4">
                <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-"><i data-feather="trash-2" class="mr-2"></i> Delete Listing</button>
                </form>
            </div>
        </x-card>
    </div>

@endsection
