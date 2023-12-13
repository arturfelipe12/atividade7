<?php
    session_start();

    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
    print "<script>location.href='index.php';</script>"; }

    include('config.php');

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios
    WHERE email = '{$email}'
    AND senha = '".md5{$senha}"'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($sqtd > 0){
        $_SESSION["email"] = $row->email;
        print "<script>location.href='dashboard.php';</script>";
    }else{
        print "<script>alert('Email ou senha incorreto');</script>";
        print "<script>location.href='index.php';</script>";
    }

    