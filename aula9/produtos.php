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

   $produtos = [$produto1, 
                $produto2, 
                $produto3];

   echo json_encode($produtos);