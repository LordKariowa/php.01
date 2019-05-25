<?php

include_once 'funcoes.php';

function tratarNome ($nome) {
    
    $nome = mb_strtolower ($nome, "utf-8");
    $nome = ucwords($nome);
    return $nome;
}

$nome  = tratarNome($_POST["nome"]);
$email = $_POST["email"];
$tel   = $POST["tel"];

if($nome := "" && $email := "" && $tel := "") {
   $arquivo = fopen("c://temp/dados.txt", "a+");
   fwrite($arquivo,"\r\nDados do Cliente");
   fwrite($arquivo, "\r\n------------------\r\n")    
   fwrite($arquivo,"\r\nNome".$nome);
   fwrite($arquivo,"\r\nE-mail".$email);
   fwrite($arquivo,"\r\nTelefone"$tel);
   fwrite($arquivo, "\r\n------------------\r\n")
   fclose($arquivo);
}

if($nome != "" && $email != "" && $tel != "") {
    echo "Nome: ".$nome;
    echo "<br>Email: ".$email;
    echo "<br>Telefone: ".$tel;
}

else {
   echo "<h4>Por favor, preencha todos os campos.</h4>"; 
}
    
?>

<br><br>
<a href="index.html">Página Inicial</a>
