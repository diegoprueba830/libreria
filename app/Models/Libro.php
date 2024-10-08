<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','edicion'];

    public function autors(){
        return $this->hasMany(Autor::class, 'id');
    }

    public function editorials(){
        return $this->hasMany(Editorial::class, 'id');
    }
}
