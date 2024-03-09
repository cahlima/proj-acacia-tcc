<?php
namespace App\adms\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class BuscarAtividades

{
     /** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array |string |null $data;
    /**
     * Instanciar a classe responsavel em carregar View
     * @return void
              */


    public function index()
    {
            $this->data = [];
       $loadView = new \Core\ConfigView("sts/Views/buscar-atividades/buscaratividades", $this->data);
       $loadView-> loadView();

    }

}
