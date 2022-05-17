<?php

use Database\Database;

require_once "../src/model/Database.php";

$db = new Database();

// $db->insert(
//     "INSERT INTO usuarios (nome, email, senha)
//     VALUES ('Paulo' , 'paulo@qi.com' , '1234')"
// );

//var_dump($db);

?>

<?php require_once "../src/views/header.php"; ?>

    <div class="login-center">
        <h1>::: LOGIN :::</h1>
        <form method="post" action="receba.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" required />
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required />
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="btn btn-success col-lg-4 offset-lg-2 col-sm-12" value="Entrar" />
                    &nbsp;
                    <input type="reset" class="btn btn-warning col-lg-4 col-sm-12" value="Limpar" />
                    <br><br>
                    <a href="receba.php"> Entrar como visitante </a>
                </div>
            </div>
        </form>
    </div>

<?php require_once "../src/views/footer.php"; ?>