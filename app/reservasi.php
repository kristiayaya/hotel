<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    public $table ='reservasi';
    protected $primarykey = 'id';
    protected $guarded = [];
}
