<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_domicilio extends Model
{
    use HasFactory;
    protected $table = 'user_domicilio';

    public function user(){
        return $this->hasOne('App\Models\User','id');
    }
}
