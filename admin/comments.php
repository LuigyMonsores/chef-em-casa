<?php

// Definindo informações da página em um array associativo
$pageInfo = array(
    'title' => 'Listagem de Comentários',
    'description' => 'Visualize e gerencie os comentários nas postagens.',
    'pageName' => 'comments',
);

// Obtendo o nome da página a partir do array
$pageName = $pageInfo['pageName'];

// Incluindo o cabeçalho da página (header.php)
include_once('../components/admin/header.php');
?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                // Incluindo a barra lateral do menu (menu_sidebar.php)
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <!-- Título e descrição da página dinâmicos -->
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            <hr>

            <!-- Conteúdo principal da página -->
            <div class="card">
                <div class="card-body">
                    <!-- Tabela para exibir os comentários -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Postagem</th>
                                <th>Autor</th>
                                <th>Comentário</th>
                                <th>Data de Comentário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Exemplo de uma linha de comentário, você pode adicionar mais conforme necessário -->
                            <tr>
                                <td>1</td>
                                <td>Receita de Massa</td>
                                <td>João Silva</td>
                                <td>Delicioso! Vou experimentar em casa.</td>
                                <td>01/01/2023</td>
                                <td>
                                    <!-- Dropdown de ações para o comentário -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ações
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </a>
                                            <a class="dropdown-item text-danger" href="#">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </a>
                                            <a class="dropdown-item" href="#" target="_blank">
                                                <i class="fas fa-eye"></i>
                                                Detalhes
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </div>
         
