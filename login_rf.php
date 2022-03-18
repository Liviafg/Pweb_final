<?php
$nome = $_POST['nome'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('127.0.0.1','root','');
$db = mysql_select_db('pweb');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE nome =
    '$nome' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"Nome e/ou senha incorretos";
        die();
      }else{
        setcookie("nome",$nome);
        header("Location:index_rf.php");
      }
  }
?>