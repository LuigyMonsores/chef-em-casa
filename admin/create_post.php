<?php
// Informações da página, como título, descrição e nome da página
$pageInfo = array(
    'title' => 'Criar Nova Postagem',
    'description' => 'Crie uma nova postagem para compartilhar com seus leitores.',
    'pageName' => 'new_post',
);

// Inclusão do cabeçalho da página, que contém elementos comuns a todas as páginas do painel
include_once('../components/admin/header.php');
?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                // Inclusão do menu lateral do painel administrativo
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <!-- Título e descrição da página -->
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            <hr>

            <!-- Exibição de mensagens de sessão (ex: mensagens de sucesso ou erro) -->
            <div class="card">
                <div class="card-body">
                    <?php
                    // Verifica se há uma mensagem de sessão e exibe-a se existir
                    if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php
                        // Remove a mensagem de sessão após exibição
                        unset($_SESSION['message']);
                    }
                    ?>

                    <!-- Formulário para criar uma nova postagem -->
                    <form action="requests/request_create_post.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Título da Postagem</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título da postagem">
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo da Postagem</label>
                            <textarea class="form-control" id="content" name="content" rows="6" placeholder="Escreva o conteúdo da postagem"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Imagem da Postagem</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
// Inclusão do rodapé da página, que contém elementos comuns a todas as páginas do painel
$currentPage = 'new_post';
include_once('../components/admin/footer.php');
?>
