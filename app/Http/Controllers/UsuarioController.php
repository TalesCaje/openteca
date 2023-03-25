<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function homeView(){
        return view('home');
    }
    public function contaView(){
        return view('usuario/minha-conta');
    }

    public function loginView(){
        return view('usuario/login');
    }

    public function cadastroView(){
        return view('usuario/cadastro');
   }
 
}

?>
