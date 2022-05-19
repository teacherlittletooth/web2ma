<?php

use Database\Database;

 require_once "../src/views/header_nav.php"; ?>

<?php
    require_once "../src/model/Database.php";
    $db = new Database();

    $resultDb = $db->select(
        "SELECT * FROM pedidos; "
    );

    //var_dump($resultDb);
?>

<table class="table container mt-4">
    <thead class="text-white bg-dark">
        <th>Código</th>
        <th>Data e hora</th>
        <th>Itens</th>
        <th>Quantidade</th>
        <th>Pagamento</th>
        <th>Local</th>
    </thead>
    <tbody>

        <?php foreach($resultDb as $linha) : ?>

            <tr>
                <td> <?= $linha->cod ?> </td>
                <td> <?= $linha->data_hora ?> </td>
                <td> <?= $linha->itens ?> </td>
                <td> <?= $linha->quant ?> </td>
                <td> <?= $linha->pag ?> </td>
                <td> <?= $linha->local ?> </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<?php require_once "../src/views/footer.php"; ?>