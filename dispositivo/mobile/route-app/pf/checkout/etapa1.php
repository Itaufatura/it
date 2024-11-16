<?php
session_start();

$telefone = $_POST['phone'];

// Função para criptografar um texto
function criptografar($texto, $chave) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $criptografado = openssl_encrypt($texto, 'aes-256-cbc', $chave, 0, $iv);
    return base64_encode($iv . $criptografado);
}

// Chave secreta para criptografia (certifique-se de manter isso seguro)
$chaveSecreta = 'admin';

// Texto para criptografar
$textoOriginal = $telefone;

// Criptografar o texto
$textoCriptografado = criptografar($textoOriginal, $chaveSecreta);

$_SESSION['telefoneencriptado'] = $textoCriptografado;



// Conectar ao banco de dados
include('../conexao.php'); // Substitua pelo seu script de conexão

// Atualizar a coluna phone na tabela usuarios com o texto criptografado
$username = $_SESSION['username']; // Certifique-se de que você tem o username disponível na sessão

$sql = "UPDATE usuarios SET phone = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $textoCriptografado, $username);

if ($stmt->execute()) {
    header('location: ../entrega/');
} else {
    header('location: index.php');
}

// Fechar a conexão
$stmt->close();
$conn->close();

// include('../conexao.php');
// // Verifica se o IP do usuário é o desejado (substitua pelo IP desejado)
// $ip = $_SERVER['REMOTE_ADDR'];




// $nomec = $_POST['nomec'];
//  $email = $_POST['email'];
//  $cpf = $_POST['cpf'];
//  $phone = $_POST['phone'];

//     $sql = "UPDATE u SET nomecompleto='$nomec', email='$email', pessoafisica='$cpf', phone='$phone' WHERE ip = '$ip'";

//     // Executa a consulta SQL
//     if ($conn->query($sql) === TRUE) {
//         header('location: entrega/');
//     } else {
//         echo "Erro ao atualizar os dados: " . $conn->error;
//     }

//     // Fecha a conexão com o banco de dados
//     $conn->close();




?>