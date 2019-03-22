<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Filiere
 * 
 * @property int $idf
 * @property string $nom
 * @property int $annee_lan
 * @property int $nbr_annee
 * @property int $niveau1
 * @property string $abrv
 *
 * @package App\Models
 */
class Filiere extends Eloquent
{
	protected $table = 'filiere';
	protected $primaryKey = 'idf';
	public $timestamps = false;

	protected $casts = [
		'annee_lan' => 'int',
		'nbr_annee' => 'int',
		'niveau1' => 'int'
	];

	protected $fillable = [
		'nom',
		'annee_lan',
		'nbr_annee',
		'niveau1',
		'abrv'
	];
}
