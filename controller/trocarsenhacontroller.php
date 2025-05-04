<?php
require '../service/conexao.php';
session_start();

$email = $_SESSION['email_recuperacao'] ?? null;
$valido = $_SESSION['codigo_validado'] ?? false;
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];

if (!$email || !$valido) {
    $_SESSION['msg_erro'] = "Acesso inválido.";
    header("Location: ../view/senhas/senha.php");
    exit();
}

if ($senha1 !== $senha2) {
    $_SESSION['msg_erro'] = "As senhas não coincidem.";
    header("Location: ../view/senhas/nova_senha.php");
    exit();
}

$hash = password_hash($senha1, PASSWORD_DEFAULT);
$conn = new usePDO;
$db = $conn->getInstance();

$update = $db->prepare("UPDATE usuario SET SENHA = ? WHERE `E-MAIL` = ?");
$update->execute([$hash, $email]);

$_SESSION['msg_sucesso'] = "Senha atualizada com sucesso!";
unset($_SESSION['email_recuperacao'], $_SESSION['codigo_validado']);
header("Location: ../view/index/login.php");
exit();