<?php
namespace App\adms\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Controller da página Erro
 *
 * @author Acacia<acacia.lima@ufpr.br>
 */

class Erro
{
/** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array |string |null $data;
    /**
     * Instanciar a classe responsavel em carregar View
     * @return void
              */
    public function index():void
    {
    $this->data = "<p style='color: #f00;'>Página não encontrada!</p>";

    $loadView = new \Core\ConfigView("sts/Views/erro/erro", $this->data);
    $loadView-> loadView();

    }

}
