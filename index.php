<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Página Inicial</title>
</head>

<body>
        <div class="container">
          <div class="jumbotron">
            <div class="row">
            <h1>Desafio GRAFTSET</h1>
            </div>
          </div>
            </br>
            <div class="row">
                <p>
                    <a href="criar.php" class="btn btn-success"><i class="fa fa-user-plus"></i></a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM pessoa ORDER BY id DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                      echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['cpf'] . '</td>';
                            echo '<td>'. $row['telefone'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-primary" href="ver.php?id='.$row['id'].'"><i class="fa fa-eye"></i></a>';
                            echo ' ';
                            echo '<a class="btn btn-warning" href="atualizar.php?id='.$row['id'].'"><i class="fa fa-pencil"></i></a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="deletar.php?id='.$row['id'].'"><i class="fa fa-trash"></i></a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>
