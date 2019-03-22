<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Niveau
 *
 * @property int $id
 * @property int $ide
 * @property int $annee2
 * @property int $val
 * @property string $groupe
 * @property int $numero
 * @property int $annee1
 * @property int $idf
 *
 * @package App\Models
 */
class Niveau extends Eloquent
{
	protected $table = 'niveau';
	public $timestamps = false;

	protected $casts = [
		'ide' => 'int',
		'annee2' => 'int',
		'val' => 'int',
		'numero' => 'int',
		'annee1' => 'int',
		'idf' => 'int'
	];

	protected $fillable = [
		'ide',
		'annee2',
		'val',
		'groupe',
		'numero',
		'annee1',
		'idf'
	];
}
