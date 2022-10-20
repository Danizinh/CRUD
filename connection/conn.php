<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "mysql321";
  $db = "crud";
  $port = 4000;

  $conn = new mysqli($host,$user,$pass,$db);
  // if($conn->connect_errno){
  //   echo "Error";
  // }else{
  //   echo "Conexao efetuada com sucesso";
  // }
?>
