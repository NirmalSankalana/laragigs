<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // show all listing
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create form
    public function create()
    {
        return view('listings.create');
    }

    // store create form
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')], // Rule::unique('table', 'field')
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show edit function
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }


    // update create form
    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    // Destroy
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}

// GET	    /photos/{photo}/comments	    index	photos.comments.index
// GET	    /photos/{photo}/comments/create	create	photos.comments.create
// POST	    /photos/{photo}/comments	    store	photos.comments.store
// GET	    /comments/{comment}	            show	comments.show
// GET	    /comments/{comment}/edit	    edit	comments.edit
// PUT/PATCH	/comments/{comment}	        update	comments.update
// DELETE	/comments/{comment}	            destroy	comments.destroy