<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags para configurar o documento -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link para o conjunto de ícones FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Link para a folha de estilo principal -->
    <link rel="stylesheet" href="../src/css/main.css">

    <?php
    // Inclui as informações da página atual (título e descrição)
    if (isset($pageInfo)) {
        // Se $pageInfo estiver definido, use suas informações
        echo "<title>{$pageInfo['title']}</title>";
        echo "<meta name='description' content='{$pageInfo['description']}'>";
    } else {
        // Caso contrário, use informações padrão
        echo "<title>Chef em Casa</title>";
        echo "<meta name='description' content='Bem-vindo ao Chef em Casa'>";
    }
    ?>
</head>
<body>
    <!-- Navbar do dashboard -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Chef em Casa | Painel de Controle
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Dropdown para o perfil do usuário -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Ícone de usuário e nome do usuário (se disponível) -->
                            <i class="fa fa-user"></i> <?= $_SESSION['user_name'] ?? 'Usuário' ?>
                        </a>
                        <!-- Itens do menu dropdown -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user"></i> Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog"></i> Configurações
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
