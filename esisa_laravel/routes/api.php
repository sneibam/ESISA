<?php

use Illuminate\Http\Request;
use App\Models\Etudiantl;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('etudiants', function() {
  return Etudiantl::all();
});
Route::get('authentication/{name}/{pwd}', ['uses' => 'UserController@authenticate']);
Route::get('etudiants/{id}', ['uses' => 'EtudiantController@get']);
Route::get('absences', 'AbsenceController@all');
Route::get('absences/annee/{year}', ['uses' => 'AbsenceController@absencesByYear']);
Route::get('absences/matiere/{subject}', ['uses' => 'AbsenceController@absencesBySubject']);
Route::get('absences/{ide}', ['uses' => 'AbsenceController@absencesByStudent']);
Route::get('absences/{ide}/{year}', ['uses' => 'AbsenceController@absencesByStudentAndYear']);
