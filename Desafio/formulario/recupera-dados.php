<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $hobbie = $_POST["hobbie"];
    
    if (strlen($nome) < 6) {
        echo "Erro: O nome precisa ter no mínimo 6 caracteres.";
        return;
    }
      if ($idade < 18) {
        echo "Erro: A idade precisa ser maior que 18.";
        return;
    }
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Hobbie: " . $hobbie . "<br>";
} else {
    echo "Erro: Os dados não foram enviados via POST.";
}
?>