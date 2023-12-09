<?php
session_start();

// Informações da página
$pageInfo = array(
    'title' => 'Minhas Postagens',
    'description' => 'Visualize e gerencie suas postagens.',
    'pageName' => 'posts',
);

// Inclusão do cabeçalho da página
include_once('../components/admin/header.php');

// Consulta ao banco de dados para obter todas as postagens do usuário logado
$query = "SELECT * FROM posts WHERE user_id = " . $_SESSION['user_id'];
$result = mysqli_query($connection, $query);

// Inicialização de um array para armazenar as postagens
$posts = array();

// Verifica se há postagens no resultado da consulta
if(mysqli_num_rows($result) > 0){
    // Armazena todas as postagens no array $posts
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                // Inclusão do menu lateral
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <!-- Título e descrição da página -->
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            
            <!-- Botão para criar nova postagem -->
            <a href="create_post.php" class="btn btn-success my-2 my-sm-0 text-light">
                Criar nova postagem
            </a>
            <hr>
            
            <!-- Exibição de mensagens de sessão, se houver -->
            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php unset($_SESSION['message']); } ?>
                
            <!-- Exibição das postagens em uma tabela -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data de Publicação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($posts as $post){ ?>
                                <tr>
                                    <!-- Exibição das informações da postagem -->
                                    <td><?php echo $post['title']; ?></td>
                                    <td><?php echo substr($post['content'],0, 120) . '...'; ?></td>
                                    <td><?php echo date('d/m/y' , strtotime($post['created_at'])); ?></td>
                                    <td>
                                        <!-- Dropdown de ações para cada postagem -->
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
                                                <a class="dropdown-item" href="../post.php?post_id=<?php echo $post['id']; ?>" target="_blank">
                                                    <i class="fas fa-eye"></i>
                                                    Ver no Blog
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
// Inclusão do rodapé da página
$currentPage = 'index';
include_once('../components/admin/footer.php');
?>
