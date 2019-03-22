<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Mail;

class ContactUsController extends Controller
{
  private $contact;

  public function contactUSPost(Request $request)
  {

      $this->contact = [];

      $this->contact['lastName'] = $request->get('lastName');
      $this->contact['firstName'] = $request->get('firstName');
      $this->contact['gender'] = $request->get('gender');
      $this->contact['phone'] = $request->get('phone');
      $this->contact['email'] = $request->get('email');
      $this->contact['subject'] = $request->get('subject');
      $this->contact['msg'] = $request->get('msg');



      Mail::to(env("MAIL_USERNAME", 'info@esisa.ma'))->send(new ContactEmail($this->contact));

      return back()->with('success', 'Thanks for contacting us!');
  }
}
