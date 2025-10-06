<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // List all contacts
    public function index()
    {
        // Paginate contacts
        $contacts = Contact::latest()->paginate(10);

        // Return the admin view for listing contacts
        return view('admin.contacts.index', compact('contacts'));
    }

    // Show a specific contact
    public function show($id)
    {
        // Find the contact by ID
        $contact = Contact::findOrFail($id);

        // Return the admin view to show the contact details
        return view('admin.contacts.show', compact('contact'));
    }

    // Delete a contact
    public function destroy($id)
    {
        // Find and delete the contact
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect with a success message
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
