<?php
$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) &&  !empty($arquivo['tmp_name'])){
    $nomeDoArquivo = md5(time().rand(0,99));

    move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nomeDoArquivo);

    echo "Arquivo enviado com sucesso!";
}