<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Note
 * 
 * @property int $id
 * @property int $ide
 * @property string $matiere
 * @property string $type
 * @property int $annee1
 * @property int $semestre
 * @property float $valeur
 * @property int $annee2
 * @property float $coef
 *
 * @package App\Models
 */
class Note extends Eloquent
{
	protected $table = 'note';
	public $timestamps = false;

	protected $casts = [
		'ide' => 'int',
		'annee1' => 'int',
		'semestre' => 'int',
		'valeur' => 'float',
		'annee2' => 'int',
		'coef' => 'float'
	];

	protected $fillable = [
		'ide',
		'matiere',
		'type',
		'annee1',
		'semestre',
		'valeur',
		'annee2',
		'coef'
	];
}
