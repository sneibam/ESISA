<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Utilisateur
 * 
 * @property int $id
 * @property string $nom
 * @property string $mdp
 * @property int $ide
 *
 * @package App\Models
 */
class Utilisateur extends Eloquent
{
	protected $table = 'utilisateur';
	public $timestamps = false;

	protected $casts = [
		'ide' => 'int'
	];

	protected $fillable = [
		'nom',
		'mdp',
		'ide'
	];
}
