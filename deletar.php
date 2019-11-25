<?php
require 'banco.php';

$id = 0;

if(!empty($_GET['id']))
{
    $id = $_REQUEST['id'];
}

if(!empty($_POST))
{
    $id = $_POST['id'];

    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM pessoa where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();
    header("Location: index.php");
}
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Deletar Pessoa</title>
    </head>

    <body>
    <br>
        <br>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                    <h3 class="well">Excluir Pessoa</h3>
                </div>
                <form class="form-horizontal" action="deletar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>" />
                    <div class="alert alert-danger"> Deseja excluir a pessoa?
                    </div>
                    <div class="form actions">
                        <button type="submit" class="btn btn-danger">Sim</button>
                        <a href="index.php" type="btn" class="btn btn-default">Não</a>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>
