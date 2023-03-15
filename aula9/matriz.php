<h2>Matriz</h2>
<p> 
    São estruturas de dados biodimensional,
    onde é nescessario informar 2 indices para realizar
    o acesso de um valor.
</p>
<p>
    Na pratica consiste de um valor que armazena outros valores.
</p>
<?php
$produto1 = [
               "nome" => "Câmera",
               "marca" => "Lg",
               "preço" => 2500 ];

$produto2 = [
                "nome" => "Smatphone",
                "marca" => "Sansung",
                "preço" => 3500 ];

$produto3 = [
                    "nome" => "Notebook",
                    "marca" => "Dell",
                    "preço" => 7500 ];

$produtos = [$produto1, $produto2, $produto3];

//imprimir todos os valores da matriz, ultilizando duas estruturas
//de repetição, 1 para as linhas, outra para as colunas
for($i=0; $i<=2; $i++){
    foreach($produtos[$i] as $key => $value){
        echo $value. "<br>";
    }
}

echo "<table border=1>";
//outra forma
foreach($produtos as $produto){
    echo "<tr>";
    echo "<td>" . $produto["nome"] . "<br>";
    echo "<td>" . $produto["marca"] . "<br>";
    echo "<td>" . $produto["preço"] . "<br>";
    echo "</tr>";
}
echo "</table>";
