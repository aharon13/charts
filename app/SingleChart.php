<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleChart extends Model
{
    public $timestamps = false;

    protected $table = 'singlecharts';
	protected $fillable = ['name','percent','color','icon'];
    protected $primarykey = 'id';
		

}
