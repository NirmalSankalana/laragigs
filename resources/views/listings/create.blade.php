@extends('layout')
<div class="d-flex justify-content-center">
    <div class="form-container">
        <a href="#" class="btn btn-secondary back-link">Back</a>
        <h2 class="text-center">Create a GIG</h2>
        <h6 class="text-muted text-center">Post a gig to find a developer</h6>
    
        <form method="POST" action="/listings">
        <!-- prevents cross-snamee scripting attact -->
        @csrf
        <div class="form-group">
            <label for="companyName">Company Name</label>
            <input type="text" class="form-control" name="company" placeholder="Enter company name" value="{{old('company')}}" required>
            @error('company')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter job title" value="{{old('title')}}" required>
            @error('title')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="jobLocation">Job Location</label>
            <input type="text" class="form-control" name="location" placeholder="Enter job location" value="{{old('location')}}" required>
            @error('location')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="url">Website/Application URL</label>
            <input type="url" class="form-control" name="website" placeholder="Enter URL" value="{{old('website')}}" required>
            @error('location')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$location}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}"  required>
            @error('email')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" value="{{old('tags')}}" placeholder="Enter tags (comma separated)">
            @error('tags')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>
    
        {{-- <div class="form-group">
            <label for="companyLogo">Company Logo</label>
            <input type="file" class="form-control-file" name="companyLogo" accept="image/*">
        </div> --}}
    
        <div class="form-group">
            <label for="jobDescription">Job Description</label>
            <textarea class="form-control" name="description" rows="6" value="{{old('description')}}" placeholder="Enter job description" required></textarea>
            @error('description')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Create a Gig</button>
        </form>
    </div>
  </div>