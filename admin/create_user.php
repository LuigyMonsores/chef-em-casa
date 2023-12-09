<?php
// Informações da página, como título, descrição e nome da página
$pageInfo = array(
    'title' => 'Criar Novo Usuario',
    'description' => 'Crie um novo usuario no sistema',
    'pageName' => 'create_user',
);

// Inclui o cabeçalho da página, que pode conter links para estilos, scripts, etc.
include_once('../components/admin/header.php');
?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                // Inclui o menu lateral do dashboard, que geralmente contém links para diferentes seções do sistema
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <!-- Título e descrição da página obtidos das informações da página -->
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            <hr>
            <div class="card">
                <div class="card-body">
                    <!-- Formulário para criar um novo usuário -->
                    <form>
                        <!-- Campos do formulário para nome, email, senha e nível de acesso -->
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Insira o email">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Insira a senha">
                        </div>
                        <div class="form-group">
                            <label for="level">Nível de Acesso</label>
                            <!-- Dropdown para selecionar o nível de acesso (Admin ou Comum) -->
                            <select class="form-control" id="level" name="level">
                                <option value="admin">Administrador</option>
                                <option value="common">Comum</option>
                            </select>
                        </div>
                        <!-- Botão de envio do formulário -->
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
// Define a página atual para o rodapé, que pode usar essa informação para destacar a seção ativa
$currentPage = 'new_post';
// Inclui o rodapé da página, que pode conter informações adicionais ou scripts
include_once('../components/admin/footer.php');
?>
