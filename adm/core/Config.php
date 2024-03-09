<?php

namespace Core;

if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Configurações básicas do site.
 *
 * @author Acacia
 */

abstract class Config
{

    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados

     *
     * @return void
     */
    protected function config(): void
    {
        //URL do projeto
        define('URL', 'http://localhost/proj-acacia/');
        define('URLADM', 'http://localhost/proj-acacia/adm/');

        /*define('URL', 'http://localhost/proj_acacia/');
        define('URLADM', 'http://localhost/proj_acacia/adm/');*/ /*Exemplo de endereço mais simplifcado*/

        define('CONTROLLER', 'Login');
        define('METODO', 'index');
        define('CONTROLLER_ERRO', 'Login');

        //Credenciais do banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'tcc1');
        define('PORT', 3306);
        define('EMAILADM', 'acacia.lima@ufpr.br');
    }
}
