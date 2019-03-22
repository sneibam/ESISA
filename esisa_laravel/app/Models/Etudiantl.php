<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 20:42:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Etudiantl
 * 
 * @property int $id
 * @property string $Nom
 * @property string $Prenom
 * @property string $LieuNaissance
 * @property string $NumInscription
 * @property string $CIN
 * @property string $Adresse
 * @property string $teldom
 * @property string $tel
 * @property string $telpere
 * @property string $telmere
 * @property int $an
 * @property int $mn
 * @property int $jn
 * @property int $ai
 * @property int $mi
 * @property int $ji
 *
 * @package App\Models
 */
class Etudiantl extends Eloquent
{
	protected $table = 'etudiantl';
	public $timestamps = false;

	protected $casts = [
		'an' => 'int',
		'mn' => 'int',
		'jn' => 'int',
		'ai' => 'int',
		'mi' => 'int',
		'ji' => 'int'
	];

	protected $fillable = [
		'Nom',
		'Prenom',
		'LieuNaissance',
		'NumInscription',
		'CIN',
		'Adresse',
		'teldom',
		'tel',
		'telpere',
		'telmere',
		'an',
		'mn',
		'jn',
		'ai',
		'mi',
		'ji'
	];
}
