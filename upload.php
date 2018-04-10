<?php

function enviarFoto($array_upload, $dir_foto) {
    $arquivo = $array_upload;
    $filename = $arquivo['tmp_name'];
    $destination = "{$dir_foto}/{$arquivo['name']}"; //salvando arquivo em pasta
    $podeUpar = true;
    
    $tamanhoArquivo = $arquivo['size'] / 1024; //deixando o tamanho em KB
    if ($tamanhoArquivo > 500) { //verifica tamanho do arquivo
        $podeUpar = false;
    }
    $extensaoArquivo = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    if ($extensaoArquivo != "jpg" && $extensaoArquivo != "png") { //verifica tipo do arquivo
        $podeUpar = false;
    }
    $existeArquivo = file_exists($destination); //verificando se o arquivo já existe
    if ($existeArquivo) {
        $podeUpar = false;
    }
    if ($podeUpar) {
        $foiUpado = move_uploaded_file($filename, $destination);
        if ($foiUpado) {
            return true;
        }
        return false;
    }
}

//$nomeArquivo = str_replace("-", "_", $arquivo['name']);












//
//if ($foiUpado){
//    echo "Arquivo {$nomeArquivo} enviado com sucesso!";
//} else {
//    echo "Desculpe, ocorreu um erro ao enviar seu arquivo!";
//}