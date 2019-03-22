<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Note;
use PDF;
use App;
class IntranetController extends Controller
{


    public function authenticate(Request $request) {
      $credentials = $request->only('nom', 'mdp');

      if (Auth::attempt($credentials)) {
          // Authentication passed...
          return redirect()->intended('Index');
      }
    }

    public function logout(Request $request) {
      $request->session()->forget('user');
      return redirect('parent');
    }

    public function connect(Request $request) {
      $request->session()->forget('user');
      $userdata = array('nom' => $request['nom'], 'mdp' => $request['mdp']);
      $user = app('App\Http\Controllers\UserController')->authenticate($userdata['nom'], $userdata['mdp']);

      if ($user != "NOTHING") {
          $request->session()->put('user', $user);
      }
      return $this->toAuthentifiateView($request);

    }

    private function check(Request $request) {
      if ($request->session()->has('user')) {
        return $request->session()->get('user');
      } else {
        return null;
      }
    }
    public function loginView(Request $request) {
       return $this->toAuthentifiateView($request);
    }

    public function toAuthentifiateView(Request $request) {
      if (($user = $this->check($request))) {

        $data = $this->getDataInSession($user);

        return view("intranet.Index", $data);
      } else {
        return view('parent');
      }
    }


    private function getDataInSession($user) {
      $data = [];
      $data['lastName'] = $user['etudiant']['Nom'];
      $data['firstName'] = $user['etudiant']['Prenom'];
      $data['etudiant'] = $user['etudiant'];
      $levels = Niveau::where('ide', $user['etudiant']['id'])->get();
      $data['level'] = $levels[count($levels) -1];
      return $data;
    }

    public function absences(Request $request) {
      if (($user = $this->check($request))) {

        $data = $this->getDataInSession($user);

        $absences = app('App\Http\Controllers\AbsenceController')->absencesByStudent($user['etudiant']['id']);
        $data['absences'] = $absences->reverse();

        return view("intranet.absences", $data);
      } else {
        return view('parent');
      }
    }

    public function absencesPDF(Request $request) {
        if (($user = $this->check($request))) {

          $data = $this->getDataInSession($user);

          $absences = app('App\Http\Controllers\AbsenceController')->absencesByStudent($user['etudiant']['id']);
          $data['absences'] = $absences->reverse();



          $pdf = App::make('dompdf.wrapper');
          $pdf = PDF::loadView('pdfs.absencePDF ', $data);
          return $pdf->stream();
          //return view('pdfs.test', $data);
        } else {
          return view('parent');
        }
    }

    public function notes(Request $request) {
      if (($user = $this->check($request))) {

        $data = $this->getDataInSession($user);

        $notes1 = Note::where('ide', $data['etudiant']['id'])
                  ->where('annee1', $data['level']['annee1'])
                  ->where('semestre', 1)
                  ->get();

        $notes2 = Note::where('ide', $data['etudiant']['id'])
                  ->where('annee1', $data['level']['annee1'])
                  ->where('semestre', 2)
                  ->get();

        $data['notes1'] = $notes1;
        $data['notes2'] = $notes2;
        return view("intranet.notes", $data);
      } else {
        return view('parent');
      }
    }

    public function notesPDF(Request $request) {
      if (($user = $this->check($request))) {

        $data = $this->getDataInSession($user);

        $notes1 = Note::where('ide', $data['etudiant']['id'])
                  ->where('annee1', $data['level']['annee1'])
                  ->where('semestre', 1)
                  ->get();

        $notes2 = Note::where('ide', $data['etudiant']['id'])
                  ->where('annee1', $data['level']['annee1'])
                  ->where('semestre', 2)
                  ->get();

        $data['notes1'] = $notes1;
        $data['notes2'] = $notes2;
        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('pdfs.notesPDF ', $data);
        return $pdf->stream();
      } else {
        return view('parent');
      }
    }
}
