<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleChart extends Model
{
    public $timestamps = false;

    protected $table = 'singlecharts';
	protected $fillable = ['title','name','description','percent','color','icon','user_id'];
    protected $primarykey = 'id';
		

}
