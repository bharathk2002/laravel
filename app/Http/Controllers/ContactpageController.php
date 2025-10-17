<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactpageModel;
use Illuminate\Support\Facades\Auth;

class ContactpageController
{
    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'role' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        // Store the contact message
        ContactpageModel::create($validatedData);

        // Redirect or return response
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
