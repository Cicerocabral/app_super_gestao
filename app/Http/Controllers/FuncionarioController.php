<?php

namespace App\Http\Controllers;
use app\Model\Funcionario;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{
    public function Funcionario(){
        return view('funcionarios.create');
        
        }

    public function Listar(){
        
        $Funcionario = Funcionario::all();
        return view('funcionarios.listar')->with(['funcionario' => $Funcionario]);    
        }
}
