<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    //
    protected $fillable = ['name', 'phone', 'fax', 'address'];
}
