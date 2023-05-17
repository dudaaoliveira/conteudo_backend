<?php

//local temporario onde foi realizado o upload da imagem
$origem = $_FILES['foto']['tap_name'];

//cria um nome unico para a foto
$nome_foto = time().$FILES['foto']['name'];

//local para onde a foto de upload vai ser movoda
$destino = "../uploads/$nome_foto";

//move o arquivo de upload para a pasta de destino
move_uploaded_file($origem, $destino);

die();                                       
