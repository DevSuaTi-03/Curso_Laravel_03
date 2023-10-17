<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    // protegendo o acesso e cadastro aos dados de outras colunas das tabelas por segurança
    protected $fillable = [
        'subject',
        'status',
        'body'
        
    ];
}
