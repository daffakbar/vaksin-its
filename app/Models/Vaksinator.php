<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksinator extends Model
{
    use HasFactory;
    public function vaksinasi(){
    	return $this->hasMany(Vaksinasi::class);
    }
}
