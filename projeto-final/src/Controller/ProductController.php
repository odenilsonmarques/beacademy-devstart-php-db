<?php

declare(strict_types = 1);

namespace App\Controller;

class ProductController extends AbstractController{

    public function listAction():void
    {
        parent::render('productView/list');
    }

    public function addAction():void
    {
        parent::render('productView/add');
    }
    
    public function editAction():void
    {
        parent::render('productView/edit');
    }

}