<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vans_motors_accidents extends Model
{
    protected $table = "van_accidents";

    public $primaryKey =  "id_accidents";

    public $fillable = [
		'vans_id',
		'id_additional_driver',
		'type',
		'date',
		'damage',
		'cost',
		'fault',
		'any_injuries'];

    public function vans()
    {
    	return $this->belongsTo('App\Vans','vans_id');
    }
}
