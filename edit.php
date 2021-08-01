    <?php
    include_once("templates/header.php");
    ?>
    <div class="container">

        <!--BOTÃO DE VOLTAR-->
        <?php include_once("templates/back.html"); ?>
        <h1 id="main-title">Editar Contato</h1>
        <!--DIRECIONANDO FORMULARIO PARA A BASE DE PROCESSAMENTO-->
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

            <!-- DEFININDO TIPO DO FORMULARIO PARA ACHAR NO PROCESSAMENTO-->

            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact["id"] ?>">

            <!--FORMULARIO DE EDIÇÃO-->
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
        <!--FORMULARIO DE EDIÇÃO ACABA AQUI-->

    </div>
    <?php
    include_once("templates/footer.php");
    ?>