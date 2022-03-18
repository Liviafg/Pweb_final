<?php

$nome = $_POST['nome'];

$senha = MD5($_POST['senha']);

$connect = mysql_connect('127.0.0.1','root','');

$db = mysql_select_db('usuarios');

$query_select = "SELECT nome FROM usuarios WHERE nome = '$nome'";

$select = mysql_query($query_select,$connect);

$array = mysql_fetch_array($select);

$nomearray = $array['nome'];

  if($nome == "" || $nome == null){
    echo "O campo nome deve ser preenchido";

    }else{
      if($nomearray == $nome){

        echo"Esse nome já existe";
        die();

      }else{
        $query = "INSERT INTO usuarios (nome,senha) VALUES ('$nome','$senha')";
        $insert = mysql_query($query,$connect);

        if($insert){
          echo"Usuário cadastrado com sucesso!";
        }else{
          echo"Não foi possível cadastrar esse usuário";
        }
      }
    }
?>