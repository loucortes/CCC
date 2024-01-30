<?php
  $fname = $_POST["fname"];
  $pwd = $_POST["pwd"];
  
  $conec = new mysqli("localhost", "root", "1234");

  function queryExec($query, $conec = new mysqli("localhost", "root", "1234")) {
    try {
        $result = $conec->prepare($query);
        $result->execute();
        $result->close();
    } catch (Exception $e) {
        echo "". $e->getMessage() ."";
    }
  }

  queryExec("CREATE DATABASE IF NOT EXISTS act1;");
  $conec->select_db("act1");
  queryExec("CREATE TABLE IF NOT EXISTS personas(id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, user VARCHAR(255), pwd VARCHAR(255);");

  try {
    $result = $conec->prepare("INSERT INTO personas (user,pwd) VALUES (?, ?)");
    $result->bind_param("ss", $fname, $pwd);
    $result->execute();

    if($result){
        echo "Los datos han sido insertados correctamente";
    } else {
        echo "Hubo un error en la inserción";
    }

    $result->close();
  } catch (Exception $e) {
    echo "". $e->getMessage() ."";
  }

