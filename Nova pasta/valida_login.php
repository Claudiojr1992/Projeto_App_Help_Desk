<?php
session_start();

/*$_SESSION['x'] = 'Oi, sou um valor de sessão';
print_r($_SESSION);
echo '<hr/>;'
echo $_SESSION['y']. '<br/>';*/
//variavel que verifica se a autenticacao foi realizado
$usuarios_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;
//usuario do sistema com identificado = id

$perfis = array (1=> 'Administrativo',2=> 'Usuário');

$usuarios_app = array(
 array('id'=>1,'email'=> 'adm@teste.com.br', 'senha'=> '123456', 'perfil_id' => 1),
 array('id'=>2,'email'=> 'user@teste.com.br', 'senha'=> '123456', 'perfil_id' => 1),
 array('id'=>3,'email'=> 'jose@teste.com.br', 'senha'=> '123456', 'perfil_id' => 2),
 array('id'=>4,'email'=> 'maria@teste.com.br', 'senha'=> '123456', 'perfil_id' => 2?,
);

/*echo '<pre>'; 
print_r($usuarios_app);|
echo '</pre>';
//metodo get */

foreach($usuarios_app as $user){
    /*
    echo 'Usuario app: ' . $user['email'] . '/' . $user['senha'];
    echo '<br />';
    echo 'Usuario form: ' . $_POST['email'] . '/' . $_POST['senha'];
    echo '<hr />';
    */
    //validando usuario e senha cadastrado na $usuario
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $super['perfil_id'];
    }
}

if($usuario_autenticado){
    echo 'Usuário autenticado.';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;

    header('location: home.php');

}else{  
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
  }

//$user['email'];
//$user['senha'];

//echo $_POST['email'];
//echo '<br/>';
//echo $_POST['senha'];

/*
print_r($_GET);

echo '<br/>';

echo $_GET['email'];
echo '<br/>';
echo$_GET['senha'];
*/

/*print_r ($_POST);
echo '<br/>';

echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];*/
?>