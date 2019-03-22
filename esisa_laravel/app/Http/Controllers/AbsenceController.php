<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absences2014;
use App\Models\Absences2015;
use App\Models\Absences2016;
use App\Models\Absences2017;
use App\Models\Etudiantl;

class AbsenceController extends Controller
{
    public function all() {
      $a2014 = Absences2014::all();
      $a2015 = Absences2015::all();
      $a2016 = Absences2016::all();
      $a2017 = Absences2017::all();


      foreach ($a2015 as $value) {
        $a2014[] = $value;
      }

      foreach ($a2016 as $value) {
        $a2014[] = $value;
      }

      foreach ($a2017 as $value) {
        $a2014[] = $value;
      }

      $data = $a2014;

      $this->mapAbsenceEtudiant($data);
      return $data;
    }

    public function absencesByYear($year) {
       $absences = $this->all();
       $absencesByYear = [];
       foreach ($absences as $value) {
         $date = $value['date'];
         $absenceYear = explode("-", $date)[0];
         if ($absenceYear == $year) {
            $absencesByYear[] = $value;
         }
       }
       $this->mapAbsenceEtudiant($absencesByYear);
       return $absencesByYear;
    }
    public function absencesBySubject($subject) {
      $absences = $this->all();
      $absencesBySubject = [];
      foreach ($absences as $value) {
        $absenceSubject = $value['matiere'];
        if (strtolower($absenceSubject) == strtolower($subject)) {
           $absencesBySubject[] = $value;
        }
      }
      $this->mapAbsenceEtudiant($absencesBySubject);
      return $absencesBySubject;
    }

    public function absencesByStudent($ide) {
      $a2014 = Absences2014::where('ide', $ide)->get();
      $a2015 = Absences2015::where('ide', $ide)->get();
      $a2016 = Absences2016::where('ide', $ide)->get();
      $a2017 = Absences2017::where('ide', $ide)->get();

      foreach ($a2015 as $value) {
        $a2014[] = $value;
      }

      foreach ($a2016 as $value) {
        $a2014[] = $value;
      }

      foreach ($a2017 as $value) {
        $a2014[] = $value;
      }

      $data = $a2014;

      $this->mapAbsenceEtudiant($data);
      return $data;
    }

    public function absencesByStudentAndYear($ide, $year) {
          $absences = $this->absencesByStudent($ide);
          $absencesByYear = [];
          foreach ($absences as $value) {
            $date = $value['date'];
            $absenceYear = explode("-", $date)[0];
            if ($absenceYear == $year) {
               $absencesByYear[] = $value;
            }
          }
          return $absencesByYear;
    }

    private function mapAbsenceEtudiant($absences) {
        foreach ($absences as $absence) {
          $ide = $absence['ide'];
          unset($absence['ide']);
          $etudiant = Etudiantl::where('id', $ide)->get()[0];
          $absence['etudiant'] = $etudiant;
        }
    }

}
