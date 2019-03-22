<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Absences2016
 * 
 * @property int $id
 * @property \Carbon\Carbon $date
 * @property string $seance
 * @property string $matiere
 * @property string $motif
 * @property string $appel
 * @property int $ide
 * @property string $controle
 *
 * @package App\Models
 */
class Absences2016 extends Eloquent
{
	protected $table = 'absences_2016';
	public $timestamps = false;

	protected $casts = [
		'ide' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date',
		'seance',
		'matiere',
		'motif',
		'appel',
		'ide',
		'controle'
	];
}
