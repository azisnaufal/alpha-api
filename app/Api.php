<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    public $primaryKey = 'id';
    protected $table = "tbl_api";
    protected $fillable = [
        'judul', 'sql_stat','url'
    ];  
}
