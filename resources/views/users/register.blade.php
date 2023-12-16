@extends('layout')

<div class="d-flex justify-content-center">
    <div class="form-container">
        <h2 class="text-center">User Registration</h2>
        <h6 class="text-muted text-center">Create your account</h6>

        <form method="POST" action="/users" onsubmit="return validateForm()">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}" required>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>

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

            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="confirmPassword" placeholder="Re Enter your password" required>
                @error('password_confirmation')
                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p>Already have an account? <a href="/login">Login</a></p>
    </div>
</div>

<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
</script>
