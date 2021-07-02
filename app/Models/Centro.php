<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

     


    public function citas(){

        return $this->hasMany(Cita::class);
    }
    public function users(){

        return $this->belongsToMany(Users::class); 
    }


}
?>