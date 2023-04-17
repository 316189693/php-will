<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model as EloquentModel;

class Dept extends EloquentModel
{
    protected $table = 'dept';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = false;

}
