<?php
	session_start();

    //pegar as informacao na tela de abrir chamado 
    /*echo '<pre>' 
    print_r($_POST);
    echo '</pre>'*/

    //estamos trabalhando na montagem do texto
    //$arquivo fopen('arquivo.hd','a'); //parametro a para escrita do arquivo  (CREAT)
    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);


    //implode('#', $_POST); desafio retorna com so valores ja validados

    //$texto = $_POST['titulo'].$_POST['categoria'] . $_POST['descricao']; //utilizando metodo post 
    $texto = $_SESSION['id'] . '#' .$titulo '#' . $categoria . '#' . $descricao . PHP_EOL; //PHP_EOL quebra de linda com base no sistema operacional;

    //abrindo o arquivo (CREAT)
    $arquivo = fogen('arquivo.hd','a');
    fwrite ($arquivo, $texto);
    //escrevendo o texto 
    fclose($arquivo);
    //fechando o arquvio 
    //echo $texto;
    header('location: abrir_chamado.php'); //criar mensagem de chamado foi gravado.
    ?>