<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LivrosController;


Route::get('/', [UsuarioController::class, 'homeView']);
Route::get('/login', [UsuarioController::class, 'loginView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/minha-conta', [UsuarioController::class, 'contaView']);

Route::get('/resultados-livro', [LivrosController::class, 'pesquisaView']);
Route::get('/informacao-livros', [LivrosController::class, 'informacaoLivrosView']);
Route::get('/meus-livros', [LivrosController::class, 'meusLivrosView']);


?>

