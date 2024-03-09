<?php

namespace App\adms\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class NewUser
{
    /** @var array|string|null $data Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data = [];

    /** @var array $dataForm Recebe os dados do formulario */
    private array|null $dataForm;

    /**
     * Instantiar a classe responsável em carregar a View e enviar os dados para View.
     * Quando o usuário clicar no botão "cadastrar" do formulário da página novo usuário. Acessa o IF e instância a classe "AdmsNewUser" responsável em cadastrar o usuário no banco de dados.
     * Usuário cadastrado com sucesso, redireciona para a página a página de login.
     * Senão, instância a classe responsável em carregar a View e enviar os dados para View.
     *
     * @return void
     */
    public function index(): void
    {
        //echo "Cadastrar novo usuario<br>";

        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->dataForm['SendNewUser'])) {
            unset($this->dataForm['SendNewUser']);

            $createNewUser = new \App\adms\Models\AdmsNewUser();
            $createNewUser->create($this->dataForm);
            if ($createNewUser->getResult()) {
                $urlRedirect = URLADM;
                header("Location: $urlRedirect");
            } else {
                $this->data['form'] = $this->dataForm;
                $this->viewNewUser();
            }
        } else {
            $this->viewNewUser();
        }
    }

    private function viewNewUser(): void
    {
        $loadView = new \Core\ConfigView("adms/Views/login/newUser", $this->data);
        $loadView->loadView();
    }
}
