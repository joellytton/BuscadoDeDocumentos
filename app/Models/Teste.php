<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $table = 'teste';

    protected $fillable = ['tipo','emitente', 'numero', 'data', 'doe', 'descrocao', 'link'];

    public $timestamps = false;
}
