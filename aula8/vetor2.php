<h2>Vetor inexado por texto</h2>
<p>
     Os vetores podem usar texto para indexar 
     (identificar) os valores armazenados.
     exemplo:
<pre>
           +-----------+
      nome |Ivan       |
           +-----------+
           +-----------+
     nota1 |9          |
           +-----------+
           +-----------+
     nota2 |7          |
           +-----------+
</pre>           
</P>

<?php

$alunos = [
    "nome" => "Ivan",
    "nota1" => 9,
    "nota2" => 7
];

$alunos["notatotal"] = ($alunos["nota1"] + $alunos["nota2"]);
var_dump($alunos);

echo"<p>$nbsp;</p><pre>";
//imprimir todos os valores de um vetor
//ultilizando o foreach
foreach($alunos as $key => $value){
    echo
    echo "$key |$value  |
}

?>
</pre>