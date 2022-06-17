<?php

declare(strict_types = 1);

namespace App\Controller;
use App\Connection\Connection;

class ProductController extends AbstractController{

    public function listAction():void
    {
        $con = Connection::getConnection();
        $result = $con->prepare( 'SELECT *FROM tb_product');
        $result->execute();
        // var_dump($result->fetch());
        parent::render('productView/list', $result);
    }

    public function addAction():void
    {
        $con = Connection::getConnection();

        if($_POST){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $photo = $_POST['photo'];
            $value = $_POST['value'];
            $quantity = $_POST['quantity'];
            $create_at = date('Y-m-d H:i:s');//pegando a data automatica
            $category_id = $_POST['category_id'];
            
            $query = "INSERT INTO tb_product(name, description, photo, value, quantity, create_at, category_id)VALUES('{$name}', '{$description}', '{$photo}', '{$value}', '{$quantity}', '{$create_at}', '{$category_id}')";
        
            $result = $con->prepare($query);
            $result->execute();
            // var_dump($result->fetchAll());

            echo "produto cadastro";

        }

        $result = $con->prepare( 'SELECT *FROM tb_category');
        $result->execute();
        parent::render('productView/add', $result);
    }
    
    public function editAction():void
    {
        parent::render('productView/edit');
    }

}