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

    public function removeAction():void
    {
        $con = Connection::getConnection();
        $id = $_GET['id'];

        $query = "DELETE FROM tb_product WHERE id = '{$id}'";
        $result = $con->prepare($query);
        $result->execute();
        $message = 'Produto excluiído com sucesso !';
        include dirname(__DIR__)."/View/templates/message.php";
    }
    
    public function updateAction():void
    {
        $con = Connection::getConnection();
        $id = $_GET['id'];
        //select para buscar as categorias
        // $categories = $con->prepare( 'SELECT *FROM tb_category');
        // $categories->execute();

        if($_POST){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $photo = $_POST['photo'];
            $value = $_POST['value'];
            $quantity = $_POST['quantity'];
            
            $query = "UPDATE tb_product SET name = '{$name}', description = '{$description}', photo = '{$photo}', quantity = '{$quantity}' WHERE id ='{$id}'";
            $resultUpdate = $con->prepare($query);
            $resultUpdate->execute();
            echo "Produto atualizado";
        }

        //select para trazer os dados do produto de
        $product = $con->prepare("SELECT *FROM tb_product WHERE id='{$id}'");
        $product->execute();

        parent::render('productView/edit', [
            'product' => $product->fetch(\PDO::FETCH_ASSOC),

        ]);


    }

}