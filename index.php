<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonnaci</title>
</head>
<body>
    <h2>Sequência de Fibonacci</h2>
        <form action="" method="get">
        <input type="num" name="num" />
        <input type="submit" name="submit" value="Calcular" />
        </form> 
 <?php
    $num = $_GET["num"];
    $n=20;
    $ultimo=1;
    $penultimo=0;
    $achou = 0;
            echo "0, 1, ";
        for($count=1 ; $count<=$n-2 ; $count++){
    $atual = $ultimo + $penultimo;
            echo $atual.", ";
   
    $penultimo = $ultimo;
    $ultimo = $atual;
        if($num == $atual){
    $achou = 1;
} 
} 
        if ($achou === 1){
            echo "</br>O número ". $num . " pertence a sequência de Fibonacci!";
}
        else 
{
        echo "</br>O número ". $num . " não pertence a sequência de Fibonacci!";
}
?>   
</body>
</html>