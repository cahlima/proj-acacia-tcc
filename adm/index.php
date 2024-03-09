<?php
// Constante que define que o usuário está acessando páginas internas através da página "index.php".
define('C7E3L8K9E5', true);

session_start(); // Iniciar a Sessão
ob_start();  // Buffer de saída

//Carregar o Composer
require './vendor/autoload.php';

//Instanciar a classe ConfigController, responsável em tratar a URL
$home = new Core\ConfigController();

//Instanciar o método para carregar a página/controller
$home->loadPage();