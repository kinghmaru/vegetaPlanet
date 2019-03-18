<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saiyan extends Model
{
    protected $fillable = ['name', 'class', 'powerLevel', 'description'];
}
