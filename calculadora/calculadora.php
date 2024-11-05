<form action="calculadora.php" method="get">
    Valor 1:<br>
    <input type="number" name="valorUm"><br>
    Valor 2:<br>
    <input type="number" name="valorDois"><br>
<select name="operacao">
    <option value="todas">Todas</option>
    <option value="+">Soma</option>
    <option value="-">Subtraçao</option>
    <option value="*">Multiplicacao</option>
    <option value="/">Divisao</option>
</select>
<br>


<input type="submit" value="Calcular">
</form>
<?php 
// linha 10 e 11 é junto, nao da enter!!!
if(isset($_GET['valorUm']) && isset($_GET['valorDois'])){
    $valorUm=$_GET['valorUm'];
    $valorDois=$_GET['valorDois'];
    $operacao=$_GET['operacao'];

if($operacao=='+'){
    $resultado = $valorUm + $valorDois;
} elseif($operacao == '-'){
    $resultado = $valorUm - $valorDois;
} elseif($operacao == '*'){
    $resultado = $valorUm * $valorDois;
} elseif($operacao == '/'){
    if($valorDois > 0){
        $resultado = $valorUm / $valorDois;
    } else {
        $resultado = "Erro na divisao";
    }
} elseif($operacao=='todas'){
    $soma = $valorUm * $valorDois;
    $subtracao = $valorUm - $valorDois;
    $multiplicacao = $valorUm * $valorDois;
    $divisao = $valorUm / $valorDois;

    $resultado = "Soma: $soma - Subtracao: $subtracao - Multiplicacao: $multiplicacao - Divisao: $divisao";


}
    echo $resultado;
}
?>




