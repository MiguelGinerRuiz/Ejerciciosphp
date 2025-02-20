<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class socios extends Model
{
    protected $table = 'socios';

    protected $fillable = [
        'nombre',
        'email',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'id';
    public function libros(){
        return $this->belongsToMany(libros::class, 'prestamos','id','
        socio_id');
        }
}
