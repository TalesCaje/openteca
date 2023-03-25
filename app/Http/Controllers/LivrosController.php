<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function meusLivrosView(){
    return view('livros/meus-livros');
   }
    public function informacaoLivrosView(){
    return view('livros/informacao-livros');
   }
public function pesquisaView(){
    return view('livros/resultados');
   }

}

?>