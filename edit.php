    <?php
    include_once("templates/header.php");
    ?>
    <div class="container">
        <?php include_once("templates/back.html"); ?>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="type" value="<?= $contact["id"] ?>">
            <div class="form-group">
                <label for="name">Nome do Contato: </label>
                <input id="line" type="text" class="form-control" id="name" name="name" placeholder="Nome do Contato: " value="<?= $contact["name"] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do Contato: </label>
                <input id="line" type="text" class="form-control" id="phone" name="phone" placeholder="(00) 00000-0000 " value="<?= $contact["phone"] ?>" required>
            </div>
            <div class="form-group">
                <label for="observation">Observações: </label>
                <textarea id="line" type="text" class="form-control" id="observation" name="observation" placeholder="Observações: " rows="3"><?= $contact["observation"] ?></textarea>
            </div>
            <button type="submit" class=" btn btn-primary"> Atualizar </button>
        </form>
    </div>
    <?php
    include_once("templates/footer.php");
    ?>