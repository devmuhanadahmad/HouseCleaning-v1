<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact=new Contact();
        return view('website.contact',compact('contact'));
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'phone'=>'required|string',
            'email'=>'required|email',
            'question'=>'required|string|min:5'
        ]);

        Contact::create($request->all());

        session()->flash('success', __('Thank you, your question will be answered as soon as possible.'));
        return redirect()->back();
    }
}
