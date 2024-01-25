<?php
session_start();
require_once('conn.php');
$user = $_POST['username'];
$password = $_POST['password'];
$verifica_login= "SELECT * FROM usuarios WHERE user = '$user' AND password = '$password'";
$sql =  mysqli_query($conn, $verifica_login);
$total_email = mysqli_num_rows($sql);
if ($total_email == 1){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $password;
        echo "<meta http-equiv='refresh' content='0; URL=./sistema.html'/>";
        } else {
            echo "<script>
            window.alert('Senha incorreta.');
            window.location.href = './login.php';
            </script>";
        }         
?>