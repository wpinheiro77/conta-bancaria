<?php
  try{
    $pdo = new PDO("mysql:dbname=blog;host=localhost", "root" , "");
  } catch(PDOException $e) {
    echo "Erro de conexão... <br/>";
    echo "Erro: ".$e->getMessage();
  }
?>