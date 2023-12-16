@extends('layout')

<div class="d-flex justify-content-center">
    <div class="form-container">
        <h2 class="text-center">User Login</h2>
        <h6 class="text-muted text-center">Please LogIn here</h6>

        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{old('email')}}" required>
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                <small id="passwordHelp" class="form-text text-muted">Password must be at least 8 characters long.</small>
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p>Don't have an account? <a href="/Register">Register</a></p>
    </div>
</div>


