<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passers extends Model
{
    protected $table = 'passers';
    protected $guarded = ['id'];

    public $timestamps = false;
}
