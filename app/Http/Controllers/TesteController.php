<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //utilizando parametros do controlador na rota
    public function teste(int $p1, int $p2){
        //echo "A soma de $p1 + $p2 é: ".($p1+$p2);
        return view ('site.teste', ['x' => $p1]);
    }
    
    // public function teste(int $param1, int $param2){
    //     //echo "A soma de $param1 + $param2 é: ".($param1+$param2);
    //     //return view('site.teste', ['param1' => $param1], ['param2' => $param2]); //aray associativo
    //     //return view('site.teste', compact('param1','param2'));  //compact
        
    //     return view('site.teste')->with('param1', $param1)->with('param2',$param2); //with
    //     /*utiliza-se o "site." para obedecer a hierarquia dos diretorios da pasta views*/
    //}
}
