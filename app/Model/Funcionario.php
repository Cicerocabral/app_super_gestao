<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    //
    protected $fillable = ['chapa', 'nome', 'setor', 'email'];
}