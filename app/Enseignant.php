<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $primaryKey= 'ID_ENSEIGNANT';
    public $incrementing = false;

    protected $guarded=[];

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}