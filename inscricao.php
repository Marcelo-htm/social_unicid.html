<?php
$nome_e_sobrenome = $_POST["nome_e_sobrenome"];
$idade = $_POST["idade"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
echo $nome_e_sobrenome . '<br>' . $idade . '<br>' . $endereco . '<br>' . $telefone . '<br>' . $email;

if (isset($_FILES['imagem'])) {
    $imagem = $_FILES['imagem'];
   
} else {
  .
}
?>
