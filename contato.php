<?php
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtPhone'];
    $msg = $_POST['txtMessage'];

    echo "A pessoa: {$nome} que possui o email: {$email} e telefone: {$telefone}"
    ."<br>enviou a msg: {$msg}";