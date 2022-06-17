<?php

declare(strict_types = 1);

namespace App\Controller;
use App\Connection\Connection;


class CategoryController extends AbstractController
{
    public function listAction():void
    {
        $con = Connection::getConnection();
        $result = $con->prepare( 'SELECT *FROM tb_category');
        $result->execute();
        parent::render('categoryView/list', $result);
    }

    public function addAction():void
    {
        if($_POST){
            $name = $_POST['name'];
            $description = $_POST['description'];

            $query = "INSERT INTO tb_category (name, description) VALUES ('$name', '$description')";

            $con = Connection::getConnection();

            $result = $con->prepare($query);
            $result->execute();

            echo "cadastro realizado";

        }
        parent::render('categoryView/add');
    }

    public function removeAction():void 
    {
        
        $con = Connection::getConnection();
        $id = $_GET['id'];

        $query = "DELETE FROM tb_category WHERE id = '{$id}'";
        $result = $con->prepare($query);
        $result->execute();
        echo'Pronto';
    }

    public function updateAction():void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        if($_POST){
            $newName = $_POST['name'];
            $newDescription = $_POST['description'];

            $queryUpdate = "UPDATE tb_category SET name= '{$newName}', description= '{$newDescription}' WHERE id='{$id}'";

            $result = $con->prepare($queryUpdate);
            $result->execute();

            echo 'categoria atualizada';

        }

        $query = "SELECT * FROM tb_category WHERE id='{$id}'";

        $result = $con->prepare($query);
        $result->execute();

        //debugando 
        // var_dump($result->fetch(\PDO::FETCH_ASSOC));

        $data = $result->fetch(\PDO::FETCH_ASSOC);


        parent::render('categoryView/edit', $data);
    }
}