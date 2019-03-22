<?php
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function() {
  return view('Index');
});


Route::get('/Mot-President', function() {
  return view('Mot-President');
});

Route::get('/Etudier-ESISA', function() {
  return view('Etudier_Esisa');
});

Route::get('/Objectifs', function() {
  return view('Objectifs_Esisa');
});

Route::get('/Anciens', function() {
  return view('Voix_Anciens');
});

Route::get('/Conferences-ESISA', function() {
  return view('Conferences_Esisa');
});

Route::get('/Conferences-Etranger', function() {
  return view('Conferences_Etranger');
});

Route::get('/Workshop', function() {
  return view('WorkShop');
});

Route::get('/Themes-Recherche', function() {
  return view('Themes_Recherche');
});
Route::get('/Systeme-Enseignement', function() {
  return view('Systeme_Enseignement');
});
Route::get('/Parcours-Procedures', function() {
  return view('Parcours_Procedures');
});
Route::get('/Bac3', function() {
  return view('Bac3');
});
Route::get('/Bac5', function() {
  return view('Bac5');
});
Route::get('/CCNA', function() {
  return view('CCNA');
});
Route::get('/ESISA-International', function() {
  return view('ESISA_Interntional');
});
Route::get('/Admis-Etranger', function() {
  return view('Admis_Etranger');
});
Route::get('/ESISA-Entreprises', function() {
  return view('ESISA_Entreprises');
});
Route::get('/Stages', function() {
  return view('Stages');
});
Route::get('/Emplois', function() {
  return view('Emplois');
});
Route::get('/Partenaires', function() {
  return view('Nos_Partenaires');
});
Route::get('/PartenairesEntreprises', function() {
  return view('Nos_Partenaire2');
});
Route::get('/Presse', function() {
  return view('Presse');
});
Route::get('/Galerie', function() {
  return view('Galerie');
});
Route::get('/Contactez-nous', function() {
  return view('Contactez_nous');
});
Route::get('/Saida-Event', function() {
  return view('Saida_Eve');
});
Route::get('/Douzi-Event', function() {
  return view('Douzi_Eve');
});
Route::get('/Lartiste-Event', function() {
  return view('Lartiste_Eve');
});
Route::get('/register', function() {
  return view('inscription_en_ligne');
});
Route::get('/parent', 'IntranetController@loginView');

Route::get('/logout', 'IntranetController@logout');

Route::get('/absences', 'IntranetController@absences');
Route::get('/notes', 'IntranetController@notes');

Route::get('/absences/pdf', 'IntranetController@absencesPDF')->name('absencesPDF');
Route::get('/notes/pdf', 'IntranetController@notesPDF')->name('notesPDF');

Route::get('/{locale}/', function($locale) {
  App::setLocale($locale);
  return view('Index');
});
// POST
Route::post('contact-us', ['as' => 'contactus.sendmail', 'uses' => 'ContactUsController@contactUSPost']);
Route::post('register', ['as' => 'register', 'uses' => 'RegisterController@register']);
Route::post('connect', ['as' => 'intranet.connect', 'uses' => 'IntranetController@connect']);
