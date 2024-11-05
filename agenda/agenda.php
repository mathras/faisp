<form method="get" action="agenda.php">
Nome:<br> 
<input type="text" name="nome">
<br>
Telefone<br>
<input type="text"  name="telefone"><br>
<input type="submit" value="Salvar">
</form>


<?php
session_start();

if(!isset($_SESSION['agenda'])){
    $_SESSION['agenda'] = [];
}

if(isset($_GET['nome']) && isset($_GET['telefone'])){
    $_SESSION['agenda'][] = [
    'nome' => $_GET['nome'],
    'telefone' => $_GET['telefone'],
    ];
}


if(isset($_SESSION['agenda'])){
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
if(isset($_SESSION['agenda'])){
for($i=0 ; $i < count($_SESSION['agenda']) ; $i++){
//print_r($_SESSION['agenda'][$i]);
?>


        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $_SESSION['agenda'][$i]['nome']?></td>
            <td><?php echo $_SESSION['agenda'][$i]['telefone']?></td>
        </tr>
        <?php

}
}
?>    
    
    </tbody>    
</table>






