<?php
// File: app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi request disini jika diperlukan
        $contact = Contact::create($request->all());
        return response()->json(['data' => $contact], 201);
    }

    public function index(Request $request)
    {
        // Logika untuk pencarian kontak
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json(['data' => $contact], 200);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return response()->json(['data' => $contact], 200);
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return response()->json(['data' => true], 200);
    }
}