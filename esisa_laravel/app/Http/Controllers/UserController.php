<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Etudiantl;

class UserController extends Controller
{
    public function authenticate($name, $pwd) {
      $users = Utilisateur::where('nom', $name)->where('mdp', $pwd)->get();
      if (sizeof($users) != 1) return "NOTHING";
      $this->mapUserEtudiant($users[0]);
      return $users[0];
    }
    private function mapUserEtudiant($user) {
        $ide = $user['ide'];
        unset($user['ide']);
        $etudiant = Etudiantl::where('id', $ide)->get()[0];
        $user['etudiant'] = $etudiant;
    }
}
