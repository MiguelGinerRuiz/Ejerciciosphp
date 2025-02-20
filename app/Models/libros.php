<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'id';
    
    public function socios(){
        return $this->belongsToMany(socios::class, 'prestamos','id','
        libro_id');
        }
}
