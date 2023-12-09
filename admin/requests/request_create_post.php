<?php
session_start();

include_once ('../../helpers/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $content = $_POST["content"];

    // confg para upload do arquivo

    $targetDir = "../../src/img/receitas/";
    $randomName = uniqid() . "_" . basename($_FILES['image']['name']);
    $targetFile = $targetDir . $randomName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // validação da img

    if(!getimagesize($_FILES['image']['tmp_name']) || file_exists($targetFile) || $_FILES['image']['size'] > 500000){
        $_SESSION['form_error'] = "Desculpe, a sua imagem deve ter no máximo 5mb.";
        $_SESSION['message_type'] = "danger";
        $uploadOk = 0;
        header("location: ../create_post.php");
    }

    if($uploadOk == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
        
        // conecta ao banco de dados

        $connection = connectDatabase();

        $title = mysqli_real_escape_string($connection, $title);
        $content = mysqli_real_escape_string($connection, $content);
    

        // obtém o id do usuario logado

        $user_id = $_SESSION['user_id'];

        $image = "src/img/receitas/" . $randomName;

        $query = "INSERT INTO posts (user_id, title, content, image, views) VALUES ('$user_id', '$title', '$content', '$image', 0)";

        if(mysqli_query($connection, $query)){
           $_SESSION['message'] = "Sua postagem foi publicada com sucesso.";
           $_SESSION['message_type'] = "sucess.";
           header("location: ../posts.php");
        }else{
           $_SESSION['message'] = "Ocorreu um erro ao cadastrar sua publicação.";
           $_SESSION['message_type'] = "Danger.";
           header("location: ../create_post.php");
        }

    }

}    