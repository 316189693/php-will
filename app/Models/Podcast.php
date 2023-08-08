<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model as EloquentModel;

class Podcast extends EloquentModel
{
    protected $table = 'podcast';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = false;

}
