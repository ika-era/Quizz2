<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'gafrenis_dro',
        'dashvebis_dro',
        'gafrena_dasaxeleba',
        'dashveba_dasaxeleba',
    ];
}