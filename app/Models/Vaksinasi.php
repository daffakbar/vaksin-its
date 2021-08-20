<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksinasi extends Model
{
    use HasFactory;
    public function vaksinator(){
        return $this->belongsTo(Vaksinator::class);
    }
    public function jenis_vaksin(){
        return $this->belongsTo(JenisVaksin::class);
    }
}
