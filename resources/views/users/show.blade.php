@extends('layout')
<div>
    @auth
    <h2>Welcome {{auth()->user()->name}}</h2> 

    <form class="inline" method="POST" action="/logout">
        <a href="/listings/manage" class="btn btn-sm mx-1" type="submit"><i data-feather="sliders"></i> Manage Listings</a>
        <a href="/listings/create" class="btn btn-sm mx-1" type="submit"><i data-feather="plus-circle"></i> Post a Job</a>
        @csrf
        <button type="submit" class="btn btn-sm"><i data-feather="user-x"></i> Logout</button>
    </form>
    @else
    <a href="/login" class="btn btn-sm mx-1" type="submit">Login</a>
    <a href="/register" class="btn btn-sm mx-1" type="submit">Register</a>
    @endauth
</div>