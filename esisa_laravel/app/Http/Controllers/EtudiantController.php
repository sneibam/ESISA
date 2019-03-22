<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiantl;

class EtudiantController extends Controller
{
    public function get($id) {
      $etudiant = Etudiantl::where('id', $id)->get()[0];
      return $etudiant;
    }
}
