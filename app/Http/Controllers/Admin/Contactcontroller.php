<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class Contactcontroller extends Controller
{
    public function index()
    {
        menuSubmenu('contacts', 'contactListAll');
        $contacts = Contact::latest()->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('success', 'Contact message deleted successfully!');
    }

    
    private function sendAppointmentEmails(Contact $contact)
    {
        // $emails = [
        //     // $validatedData->email, // User email
        //     // 'marketing@northbengaldairy.com', // Admin email
        // ];
        $adminEmail = 'marketing@northbengaldairy.com';
        Mail::to($adminEmail)->send(new ContactConfirmation($contact));

    }
}
