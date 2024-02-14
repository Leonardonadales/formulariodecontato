<?php

$nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_STRING );
$telefone= filter_input(INPUT_POST,"telefone", FILTER_VALIDATE_INT);
$msg= filter_input(INPUT_POST,"msg", FILTER_SANITIZE_STRING);


$to= "Leonardonadales18@gmail.com";
$subject= "Novo contato pelo site";
$Mensagem= "nome: $nome; 
Telefone: $telefone ; 
Menssagem: $msg";
$headers = 'From: leonardonadales18@gmail.com'. "\r\n" .
'Reply-To:leonardonadales18@gmail.com' .  "\r\n" . 
'X-Mailer: PHP/' . phpversion();
$enviarEmail= mail($to , $subject , $Mensagem , $headers );

if ($enviarEmail) {
    echo 'Email enviado com sucesso';
} else {
    echo 'Erro ao enviar sua mensagem';

}





