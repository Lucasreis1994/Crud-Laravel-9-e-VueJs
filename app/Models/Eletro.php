<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eletro extends Model
{
    use HasFactory;

    protected $table = 'eletro';

    protected $fillable = [
        'nome',
        'descricao',
        'tensao',
        'marca'
    ];
}
