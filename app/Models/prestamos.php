<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    protected $table = 'prestamos';

    protected $fillable = [
        'libro_id',
        'socio_id',
    ];
}
