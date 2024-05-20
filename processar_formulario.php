<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    // Define o caminho do arquivo onde os dados serão salvos
    $arquivo = 'resultados.txt';

    // Formata a string a ser salva
    $dados = "Email: $email\nSenha: $senha\n\n";

    // Salva os dados no arquivo
    file_put_contents($arquivo, $dados, FILE_APPEND);

    echo "Dados salvos com sucesso!";
}
?>
