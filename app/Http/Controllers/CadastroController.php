<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CadastroController extends Controller {
    public function Cadastrar() {
        return view ('cadastro');
    }
}