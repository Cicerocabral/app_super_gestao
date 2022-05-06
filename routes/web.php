<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Exemplo
Route::get($uri, $callback) {
    return 'Contato';
};

*/

// Route::get('/', function () {
//     return 'Ola seja bem vindo!';
// });

Route::get('/', 'PrincipalController@Principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@Contato')->name('site.contato');

Route::get('/login', function(){return 'login';})->name('site.login');


Route::prefix('/funcionarios')->group(
function(){
    Route::get('/funcionario', 'FuncionarioController@Funcionario')->name('funcionarios.cadastrar');
    Route::get('/listar', 'FuncionarioController@Listar')->name('funcionarios.cadastrar');
    });


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});  

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});



// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1'); /na utilizacao de funcao de callback sempre é pelo name da rota
// })->name('site.rota2');

//metodo redirect
//Route::redirect('/rota2', '/rota1');

/*Inicio de comandos para tratar dados na URL
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', 
function(string $nome, string $categoria,string $assunto,string $mensagem = "mensagem nao informada"){
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});

Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 //Informação
        ) {
    echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Inicio de comandos para tratar dados na URL*/
