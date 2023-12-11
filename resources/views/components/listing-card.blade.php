@props(['listing'])
<x-card>
    <div class="card mb-4">
        <img src="{{$listing->logo ? asset('storage/'. $listing->logo): asset('images/img1.jpg')}}" class="card-img-top" alt="Listing Image">
        <div class="card-body">
            <h2 class="card-title"><a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a></h2>
            {{-- <p class="card-text">{{$listing['description']}}</p> --}}
            <p class="card-text font-weight-bold">Location: {{$listing['location']}}</p>
            <p class="card-text">Email: {{$listing['email']}}</p>
            <p class="card-text">Website: {{$listing['website']}}</p>
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>
    </div>
</x-card>