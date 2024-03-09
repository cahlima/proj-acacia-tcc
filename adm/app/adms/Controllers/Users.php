<?php

namespace App\adms\Controllers;

if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}


class Users
{
    public function index()
    {
        echo "Pagina listar usuarios<br>";
    }
}
