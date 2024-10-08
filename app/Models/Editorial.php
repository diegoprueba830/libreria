<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'pais','correo', 'libros_id'];

    //protected $guarded = [];

    public function Libros(){
        return $this->belongsTo(Libro::class, 'libros_id');
    }
}
