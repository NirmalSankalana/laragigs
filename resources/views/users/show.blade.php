@extends('layout')
<div>
    @auth
    <h2>Welcome {{auth()->user()->name}}</h2> 
    <a href="/listings/manage" class="btn btn-sm mx-1" type="submit">Manage Listings</a>
    <a href="/listings/create" class="btn btn-sm mx-1" type="submit">Post a Job</a>
    @else
    <a href="/login" class="btn btn-sm mx-1" type="submit">Login</a>
    <a href="/register" class="btn btn-sm mx-1" type="submit">Register</a>
    @endauth
</div>