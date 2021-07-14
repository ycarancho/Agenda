    <?php
    include_once("templates/header.php");
    ?>
    <div class="container">
        <?php include_once("templates/back.html"); ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do Contato: </label>
                <input id="line" type="text" class="form-control" id="name" name="name" placeholder="Nome do Contato: " required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do Contato: </label>
                <input id="line" type="text" class="form-control" id="phone" name="phone" placeholder="(00) 00000-0000 " required>
            </div>
            <div class="form-group">
                <label for="observation">Observações: </label>
                <textarea id="line" type="text" class="form-control" id="observation" name="observation" placeholder="Observações: " rows="3"></textarea>
            </div>
            <button type="submit" class=" btn btn-primary"> Cadastrar </button>
        </form>
    </div>
    <?php
    include_once("templates/footer.php");
    ?>