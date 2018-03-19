<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultiChart extends Model
{
    public $timestamps = false;

    protected $table = 'multicharts';
    protected $fillable = ['title','name','description','percent','color','icon','data_id','user_id'];
    protected $primarykey = 'id';
}
