<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\MyMail;
use App\Mail\SendEmailContactWithUser;
use App\Mail\SendMailToContact as MailSendMailToContact;
use App\Mail\SendMailToContactUs;
use App\Notifications\SendMailToContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::latest()->paginate(15);
        return view('dashboard.contact.index',['contacts'=>$contacts]);
    }

    public function destroy($id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        Session::flash('success','Operation accomplished successfully');
        return redirect()->back();
    }

    public function sendEmail(Request $request)
    {

       $user=Contact::findOrFail($request->id);


       // $contact->notify(new SendMailToContact($message,$contact));
       // Mail::to($user->email)->send(new MailSendMailToContact($user->message,$user));
       //Notification::route('mail',$contact->email)->notify(new SendMailToContact($message,$contact));



      // Mail::to($user->email)->send(new SendMailToContactUs);




        session()->flash('success', __('Email sent successfully .'));
        $user->delete();
        return redirect()->back();
    }

}
