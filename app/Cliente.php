<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
'nome', ‘telefone’, ‘data_nascimento’, ‘endereco’, ‘cpf’
];
}
