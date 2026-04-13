<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('website.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
            'agree'   => 'nullable|boolean',
        ]);

        $lastSubmit = session('last_contact_submit', 0);
        $now = time();
        
        if ($now - $lastSubmit < 5) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.'
            ]);
        }
        
        session(['last_contact_submit' => $now]);
        
        Contact::create($validated);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.'
            ]);
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
