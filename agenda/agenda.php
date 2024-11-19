<?php
require "../conexao.php";
$sql = "select * from agenda";

$dados = $conn->query($sql);


?>

<form method="get" action="acoes/inserir.php">
    Nome:<br>
    <input type="text" name="nome">
    <br>
    Telefone<br>
    <input type="text" name="telefone"><br>
    <input type="submit" value="Salvar">
</form>


<?php
session_start();

if (!isset($_SESSION['agenda'])) {
    $_SESSION['agenda'] = [];
}

if (isset($_GET['nome']) && isset($_GET['telefone'])) {
    $_SESSION['agenda'][] = [
        'nome' => $_GET['nome'],
        'telefone' => $_GET['telefone'],
    ];
}


if (isset($_SESSION['agenda'])) {
    //print_r($_SESSION['agenda']);
}

?>

<table border=1>
    <thead>
        <th>#</th>
        <th>Nome</th>
        <th>Telefone</th>
    </thead>
    <tbody>

        <?php
        while ($row = $dados->fetch_assoc()) {
            //print_r($_SESSION['agenda'][$i]);
            ?>


            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nome'] ?></td>
                <td><?php echo $row['telefone'] ?></td>
            </tr>
            <?php

        }
        ?>

    </tbody>
</table>