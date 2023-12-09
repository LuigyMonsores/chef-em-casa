<?php
// Iniciar a sessão (se ainda não estiver iniciada)
session_start();

// Limpar todas as variáveis de sessão, tornando-as vazias
$_SESSION = array();

// Destruir completamente a sessão
session_destroy();

// Redirecionar para a página de login ou qualquer outra página desejada
header("Location: ../login.php");
exit();
?>
