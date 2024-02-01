<?php

require_once('conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$user = $_POST['username'];
$password = $_POST['password'];

$busca_email= "SELECT * FROM usuarios WHERE email = '$email'";
$resultado_email =  mysqli_query($conn, $busca_email);
$total_email = mysqli_num_rows($resultado_email);

$busca_user = "SELECT * FROM usuarios WHERE user = '$user'";
$resultado_user = mysqli_query($conn, $busca_user);
$total_user = mysqli_num_rows($resultado_user);
if ($total_email == 0){
    if ($total_user == 0) {
        $add_usuario = "INSERT INTO usuarios (nome,email,user,password,tipo) VALUES ('$nome', '$email', '$user', '$password', '0')";
        $resultado_add = mysqli_query($conn, $add_usuario);
        echo "<script>
            window.alert('Cadastro realizado com sucesso.');
            window.location.href = './login.php';
            </script>";
        }
        else echo "<h1> Nome de usuário já está sendo utilizado";        
    } else echo "<h1> Email já está sendo utilizado";
?>