<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorat extends Model
{
    use HasFactory;

    protected $table = 'Professorat';

    //s'indica les dades que es volen omplir amb $fillable
    protected $fillable = [
        'name',
        'address',
        'cp',
        'city'
    ];

    protected $hidden = [];
}
