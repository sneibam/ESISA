<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\RegisterRequest;
use App\Mail\RegisterMail;
use Mail;

class RegisterController extends Controller
{

  private $data;

  public function register(Request $request) {

    $this->validate($request,[
        'gender' => 'required',
        'lastName' => 'required',
        'firstName' => 'required',
        'birthDate' => 'required|date',
        'email' => 'required|email',
        'phone' => 'required',
        'bactype' => 'required',
        'filiere' => 'required',
        'mathAvg' => 'required',
        'frenchAvg' => 'required',
        'langAvg' => 'required'
    ]);

      $this->data = [];

      $this->data['gender'] = $request->get('gender');
      $this->data['lastName'] = $request->get('firstName');
      $this->data['firstName'] = $request->get('firstName');
      $this->data['phone'] = $request->get('phone');
      $this->data['email'] = $request->get('email');
      $this->data['birthDate'] = $request->get('birthDate');
      $this->data['adress'] = $request->get('adress');
      $this->data['highschool'] = $request->get('highschool');
      $this->data['bactype'] = $request->get('bactype');
      $this->data['filiere'] = $request->get('filiere');
      $this->data['mathAvg'] = $request->get('mathAvg');
      $this->data['frenchAvg'] = $request->get('frenchAvg');
      $this->data['langAvg'] = $request->get('langAvg');

      Mail::to(env("MAIL_USERNAME", 'info@esisa.ma'))->send(new RegisterMail($this->data));
      return back()->with('success', 'Thanks for registering !');
  }
}
