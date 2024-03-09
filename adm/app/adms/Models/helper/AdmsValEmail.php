<?php

namespace App\adms\Models\helper;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Classe genérica para validar o e-mail
 *
 * @author Acacia
 */
class AdmsValEmail
{
    /** @var string $email Recebe o e-mail que deve ser validado */
    private string $email;

    /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
    private bool $result;

    /**
     * @return bool Retorna true quando executar o processo com sucesso e false quando houver erro
     */
    function getResult(): bool
    {
        return $this->result;
    }

    /** 
     * Validar o e-mail.
     * Recebe o e-mail que deve ser validado e válida class AdmsValEmail
     * @param string $email Recebe o e-mail que deve ser validado.
     * 
     * @return void
     */
    public function validateEmail(string $email): void
    {
        $this->email = $email;
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->result = true;
        }else{
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: E-mail inválido!</p>";
            $this->result = false;
        }
    }
}
