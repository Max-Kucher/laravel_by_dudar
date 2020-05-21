<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
//        $validation = $req->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:5|max:300',
//            'email' => 'required|email:rfc,dns',
//        ]);

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect('contact')->with('success', ['Сообщение оставлено. Мы свяжемся с вами в ближайшее время']);
    }

    public function allData() {
        $contact = new Contact();


        // $contact->orderBy('id', 'desc')->take(12)->get()
        return view('messages', ['data' => $contact->where('subject', '=', 'Subject')->get()]);
    }
}
