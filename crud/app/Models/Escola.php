<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
    protected $table = "escola";
    protected $fillable = [
        'inep',
        'endereco',
        'nome',
        'status',
      ];
     
}
