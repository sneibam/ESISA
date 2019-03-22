<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AnneeUniv
 * 
 * @property int $annee
 *
 * @package App\Models
 */
class AnneeUniv extends Eloquent
{
	protected $table = 'annee_univ';
	protected $primaryKey = 'annee';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'annee' => 'int'
	];
}
