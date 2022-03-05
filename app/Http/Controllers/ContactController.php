<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Contact::create($data);
        return redirect()->back()->with('status','greate');
    }

    public function index()
    {
        $contact = Contact::all();
        return view('backend.message.index',compact('contact'));
    }
}
