@extends('layout')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
        <a href="#" class="btn btn-secondary back-link">Back</a>
        <h2 class="text-center">Edit Listing</h2>
        <h6 class="text-muted text-center">Edit: {{$listing->title}}</h6>
                </div>
    
                <div class="card-body">
        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="companyName">Company Name</label>
            <input type="text" class="form-control" name="company" placeholder="Enter company name" value="{{$listing->company}}" required>
            @error('company')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter job title" value="{{$listing->title}}" required>
            @error('title')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="jobLocation">Job Location</label>
            <input type="text" class="form-control" name="location" placeholder="Enter job location" value="{{$listing->location}}" required>
            @error('location')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="url">Website/Application URL</label>
            <input type="url" class="form-control" name="website" placeholder="Enter URL" value="{{$listing->website}}" required>
            @error('location')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$location}}
              </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$listing->email}}"  required>
            @error('email')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" value="{{$listing->tags}}" placeholder="Enter tags (comma separated)">
            @error('tags')
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{$message}}
              </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="logo">Company Logo</label>
            <input type="file" class="form-control-file" name="logo" accept="image/*">
            <img src="{{$listing->logo ? asset('storage/'. $listing->logo): asset('images/img1.jpg')}}" class="img-fluid mt-3" alt="Listing Image">
            @error('logo')
            <div class="alert alert-danger my-2">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="jobDescription">Job Description</label>
            <textarea class="form-control" name="description" rows="6" placeholder="Enter job description" required>{{$listing->description}}</textarea>
            @error('description')
            <div class="alert alert-danger my-2">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
                </div>
    </div>
  </div>
</div>
</div>