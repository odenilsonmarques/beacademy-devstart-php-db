<?php

declare(strict_types = 1);

namespace App\Connection;

abstract class Connection
{
    // a chamada de metodo sem instanciar classe deve ser declarado como static
    public static function getConnection():\PDO //essa controbarra diz que essa classe PDO é propria do php
    { 
        $dataBase = 'db_story';
        $userName = 'root';
        $password = '123456';

        try{
            return new \PDO('mysql:host=localhost;dbname='.$dataBase, $userName, $password);
            // echo "conectado";
        }catch(PDOException $e){
            echo "Erro ao conectar".$e->getMessage();
        }
      
        
    }
}