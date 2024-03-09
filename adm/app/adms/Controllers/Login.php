<?php
namespace App\adms\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Controller da página sair
 * @author Acacia <acacia.lima@ufpr.br>
 */
class Login{

  /** @var array|string|null $data Recebe os dados que devem ser enviados para VIEW */
private array|string|null $data = [];
/** @var array $dataForm Recebe os dados do formulario */
private array|null $dataForm;

/**
* Instantiar a classe responsável em carregar a View e enviar os dados para View.
* Quando o usuário clicar no botão "acessar" do formulário da página de login. Acessa o IF e *instância a classe "AdmsLogin" responsável em validar o usuário e a senha.
* Dados do login corretos, redireciona para a página dashboard.
*
* @return void
*/

public function index(): void
{
 /*unset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_nickname'], $_SESSION['user_email'], $_SESSION['user_image']);
        $_SESSION['msg'] = "<p style='color: green;'>Logout realizado com sucesso!</p>";
        $urlRedirect = URLADM . "login/index";
        header("Location: $urlRedirect");*/
  $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($this->dataForm['SendLogin'])) {
$valLogin = new \App\adms\Models\AdmsLogin();
$valLogin->login($this->dataForm);
if ($valLogin->getResult()) {
$urlRedirect = URLADM . "home/index";
header("Location: $urlRedirect");
} else {
$this->data['form'] = $this->dataForm;
}
}


$loadView = new \Core\ConfigView("adms/Views/login/login", $this->data);
$loadView->loadView();
}
}