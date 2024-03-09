<?php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}
?>

<h1>Novo Usuário</h1>

<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<span id="msg"></span>

<form method="POST" action="" id="form-new-user">    
    <?php
    $name = "";
    if (isset($valorForm['name'])) {
        $name = $valorForm['name'];
    }
    ?>
    <label>Nome: </label>
    <input type="text" name="name" id="name" placeholder="Digite o nome completo" value="<?php echo $name; ?>" required><br><br>
    
    <?php
    $email = "";
    if (isset($valorForm['email'])) {
        $email = $valorForm['email'];
    }
    ?>
    <label>E-mail: </label>
    <input type="text" name="email" id="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $email; ?>" required><br><br>


    <?php
    $telefone_usu = "";
    if (isset($valorForm['telefone_usu'])) {
        $telefone_usu = $valorForm['telefone_usu'];
    }
    ?>
    <label>Telefone: </label>
    <input type="number" name="telefone_usu" id="telefone_usu" placeholder="Digite o seu telefone" value="<?php echo $telefone_usu; ?>" required><br><br>

    <?php
    $dataNascimento = "";
    if (isset($valorForm['dataNascimento'])) {
        $dataNascimento = $valorForm['dataNascimento'];
    }
    ?>
    <label>Data Nascimento: </label>
    <input type="date" name="dataNascimento" id="telefone_usu" placeholder="Insira sua Data de Nascimento" value="<?php echo $dataNascimento; ?>" required><br><br>

    <?php
    $password = "";
    if (isset($valorForm['password'])) {
        $password = $valorForm['password'];
    }
    ?>
    <label>Senha: </label>
    <input type="password" name="password" id="password" placeholder="Digite a senha" value="<?php echo $password; ?>" required><br><br>



    <button type="submit" name="SendNewUser" value="Cadastrar">Cadastrar</button>
</form>
<p><a href="<?php echo URLADM; ?>">Clique aqui</a> para acessar</p>



