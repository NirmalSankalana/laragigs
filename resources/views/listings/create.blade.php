@extends('layout')
<div class="d-flex justify-content-center">
    <div class="form-container">
        <a href="#" class="btn btn-secondary back-link">Back</a>
        <h2 class="text-center">Create a GIG</h2>
        <h6 class="text-muted text-center">Post a gig to find a developer</h6>
    
        <form>
        <div class="form-group">
            <label for="companyName">Company Name</label>
            <input type="text" class="form-control" id="companyName" placeholder="Enter company name" required>
        </div>
    
        <div class="form-group">
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" id="jobTitle" placeholder="Enter job title" required>
        </div>
    
        <div class="form-group">
            <label for="jobLocation">Job Location</label>
            <input type="text" class="form-control" id="jobLocation" placeholder="Enter job location" required>
        </div>
    
        <div class="form-group">
            <label for="url">Website/Application URL</label>
            <input type="url" class="form-control" id="url" placeholder="Enter URL" required>
        </div>
    
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" id="tags" placeholder="Enter tags (comma separated)">
        </div>
    
        <div class="form-group">
            <label for="companyLogo">Company Logo</label>
            <input type="file" class="form-control-file" id="companyLogo" accept="image/*">
        </div>
    
        <div class="form-group">
            <label for="jobDescription">Job Description</label>
            <textarea class="form-control" id="jobDescription" rows="4" placeholder="Enter job description" required></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Create a Gig</button>
        </form>
    </div>
  </div>