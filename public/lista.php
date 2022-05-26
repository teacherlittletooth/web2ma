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
        <th></th>
        <th></th>
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
                <td>
                    <a href="../public/edit_pedido.php?cod=<?= $linha->cod ?>">
                        <img src="../public/assets/img/pencil.svg" alt="Editar">
                    </a>
                </td>
                <td>
                    <a onclick="confirmaDelete(<?= $linha->cod ?>);" >
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<?php require_once "../src/views/footer.php"; ?>

<script>
    function confirmaDelete(id) {
        if( confirm("Deseja excluir o registro "+id+"?") ) {
            window.location.href='../banco/delete.php?cod='+id;
        } else {
            alert('Exclusão cancelada!');
        }
    }
</script>