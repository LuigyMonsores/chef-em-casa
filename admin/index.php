<?php

// Informações da página, como título, descrição e nome da página
$pageInfo = array(
    'title' => 'Dashboard',
    'description' => 'Visualize as estatísticas do site.',
    'pageName' => 'index',
);

// Obtendo o nome da página a partir das informações
$pageName = $pageInfo['pageName'];

// Incluindo o cabeçalho da página que contém o HTML e os meta-dados iniciais
include_once('../components/admin/header.php');
?>

    <!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                // Incluindo o menu lateral da área administrativa
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <div class="row">
                <!-- Cards exibindo estatísticas -->
                <div class="col-md-4">
                    <!-- Card 1 - Usuários cadastrados -->
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header"><i class="fa fa-users"></i> Usuários</div>
                        <div class="card-body">
                            <h5 class="card-title">150</h5>
                            <p class="card-text">Usuários cadastrados no site.</p>
                        </div>
                    </div>
                </div>
                <!-- Adicione mais Cards conforme necessário (Card 2, Card 3, etc.) -->

                <div class="row">
                    <!-- Gráficos exibindo estatísticas -->
                    <div class="col-md-6">
                        <!-- Gráfico 1 - Estatísticas de Usuários -->
                        <div class="card">
                            <div class="card-header"><i class="fa fa-chart-bar"></i> Estatísticas de Usuários</div>
                            <div class="card-body">
                                <!-- Aqui você pode inserir um gráfico usando uma biblioteca como Chart.js -->
                            </div>
                        </div>
                    </div>
                    <!-- Adicione mais Gráficos conforme necessário (Gráfico 2, Gráfico 3, etc.) -->

                </div>

                <div class="row my-3">
                    <!-- Tabelas exibindo informações detalhadas -->
                    <div class="col-md-6">
                        <!-- Tabela 1 - Últimos Usuários Cadastrados -->
                        <div class="card">
                            <div class="card-header"><i class="fa fa-users"></i> Últimos Usuários Cadastrados</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Linhas da tabela com dados de usuários -->
                                        <tr>
                                            <td>João Silva</td>
                                            <td>joao@gmail.com</td>
                                            <td>01/01/2023</td>
                                        </tr>
                                        <!-- Adicione mais linhas conforme necessário -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Adicione mais Tabelas conforme necessário (Tabela 2, Tabela 3, etc.) -->

                </div>
            </div>
        </section>
    </div>
</main>

<?php
// Definindo a página atual e incluindo o rodapé da página
$currentPage = 'index';
include_once('../components/admin/footer.php');
?>
