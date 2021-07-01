    <?php
    include_once("templates/header.php");
    ?>
    <div class="container">
        <?php if (isset($printmsg) && $printmsg) : ?>
            <p id="msg"><?= $printmsg ?></p>
        <?php endif ?>
        <h1 id="main-titel">Minha Agenda</h1>
        <?php if (count($contacts) > 0) : ?>
            <p>TEM CONTATOS</p>
        <?php else : ?>
            <p id="empty-list-text">Ainda não tem contatos na sua agenda,<a href="<?= $BASE_URL ?>create.php">
                    Clique aqui para adicionar</a>.</p>
        <?php endif; ?>
    </div>
    <?php
    include_once("templates/footer.php");
    ?>