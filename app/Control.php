<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    //
      public $timestamps=false;
    protected $table='control';
    protected $primaryKey='con_id';

    protected $fillable = ['con_cantidad','con_fecha','usu_id','cat_id','tip_id',];
}
