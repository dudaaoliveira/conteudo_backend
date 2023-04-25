<?php
   
   //importa o arquivo conexão
   require_once "../conexao.php";

   //cria uma nova variável com um comando sql
   $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('duda', 'adimin64654', '123');";

   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL); 

   //executa o comando
   $comando->execute();