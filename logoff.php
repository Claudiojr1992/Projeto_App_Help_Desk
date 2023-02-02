<?php
/*session_start();

print_r($_SESSION);

//remover ,indice do array de sessão um a um;
//unset()
unset($_SESSION[x]); //para remover o indice apenas se existir 

echo '</pre>';
print_r($_SESSION);
echo '</pre>';

//destruir a variável de sessão
//session_destroy()

session_destroy(); // sera destruída 
// forçar um redirecionamento 

echo '<pre>';
print_r($_SESSION);
echo '</pre>'
*/

//Ao clicar em sair direionar para a index.php
session_destroy();
header('location: index.php');
?>