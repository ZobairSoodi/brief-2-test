<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    
    
    public function apprenants(){
        return $this->hasMany(apprenant::class, 'id');
    }
}
