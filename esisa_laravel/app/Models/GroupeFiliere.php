<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GroupeFiliere
 * 
 * @property int $id
 * @property int $idf
 * @property int $niveau
 * @property int $annee
 * @property int $nbr_groupe
 *
 * @package App\Models
 */
class GroupeFiliere extends Eloquent
{
	protected $table = 'groupe_filiere';
	public $timestamps = false;

	protected $casts = [
		'idf' => 'int',
		'niveau' => 'int',
		'annee' => 'int',
		'nbr_groupe' => 'int'
	];

	protected $fillable = [
		'idf',
		'niveau',
		'annee',
		'nbr_groupe'
	];
}
