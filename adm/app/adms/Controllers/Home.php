<?php

namespace App\adms\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Controller da página Home
 * @author Acacia <caciabad@gmail.com>
 */
class Home

{
    /** @var array|string|null $data Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data;

    /** @var array|string|null $dataForm Recebe os dados do formulário */
    private $dataForm = null;
    /**
     * Instanciar a MODELS e receber o retorno
     * Instantiar a classe responsável em carregar a View e enviar os dados para View.
     *
     * @return void
     */
    public function index(): void
    {
        $this->data =  "Bem Vindo"; // Atribui um array associativo com uma mensagem
        $loadView = new \Core\ConfigView("adms/Views/home/home", $this->data);
        $loadView->loadView();
    }
}
