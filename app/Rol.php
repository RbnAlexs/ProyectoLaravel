<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'estatus',
    ];
}