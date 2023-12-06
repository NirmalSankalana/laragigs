@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp


<ul class="list-inline d-flex">
    @foreach ($tags as $tag)
    <li class="mx-1">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
        
    @endforeach
</ul>