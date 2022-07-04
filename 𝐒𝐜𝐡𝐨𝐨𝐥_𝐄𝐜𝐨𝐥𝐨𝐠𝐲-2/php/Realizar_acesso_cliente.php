<?php
    $Nome = $_POST['Nome'];
    $RA = $_POST['email'];
    $Nome = $_POST['Nome'];
    $RA = $_POST['RA'];
    $StringSQL = "SELECT id FROM clientes WHERE Nome='$Nome' AND ra='$RA'";
    $ConexãoSQL = new mysqli("127.0.0.1", "root", "", "dbname");
    if($ConexãoSQL -> connect_errno){
        echo "Falha ao abrir a conexão com o serviço Mysql: " . $ConexãoSQL -> connect_error;
        exit();
    }
    $Resultado = $ConexãoSQL -> query($StringSQL);
    if($Resultado -> num_rows == 1) {
        echo "SEJA BEM VINDO " . $Nome;
    } else{
        echo "ACESSO NEGADO!";
    }
?>