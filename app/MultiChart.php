<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultiChart extends Model
{
    public $timestamps = false;

    protected $table = 'multicharts';
    protected $fillable = ['name','percent','color','icon','data_id'];
    protected $primarykey = 'id';
}
