<?php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

echo "VIEW - Página Dashboard!<br>";
echo $this->data . " " . $_SESSION['user_name'] . "!<br>";
echo "<a href='" . URLADM . "logout/index'>Sair</a><br>";
