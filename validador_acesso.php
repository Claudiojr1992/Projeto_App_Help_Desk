<?php
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !='SIM'){ //força redirecionameto
header('Location: index.php?login=erro');
}
//diminuindo a redundancia do codigo;
?>