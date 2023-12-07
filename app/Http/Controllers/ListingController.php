<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listing
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}

// GET	    /photos/{photo}/comments	    index	photos.comments.index
// GET	    /photos/{photo}/comments/create	create	photos.comments.create
// POST	    /photos/{photo}/comments	    store	photos.comments.store
// GET	    /comments/{comment}	            show	comments.show
// GET	    /comments/{comment}/edit	    edit	comments.edit
// PUT/PATCH	/comments/{comment}	        update	comments.update
// DELETE	/comments/{comment}	            destroy	comments.destroy