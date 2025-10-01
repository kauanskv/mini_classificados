<?php 
session_start(); // Inicia a sessão para poder destruí-la
session_unset(); // Remove Todas as variáveis da sessão
session_destroy(); // Destrói a sessão

header("location: /mini_classificados/index.php");
exit();
?>