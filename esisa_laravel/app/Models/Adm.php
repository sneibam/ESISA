<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Adm
 * 
 * @property string $Username
 * @property string $Password
 *
 * @package App\Models
 */
class Adm extends Eloquent
{
	protected $table = 'adm';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'Username',
		'Password'
	];
}
