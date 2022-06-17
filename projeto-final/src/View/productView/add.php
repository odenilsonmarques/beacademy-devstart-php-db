<h1>cadastro de Produto</h1>

<form action="" method="post">

    <select class="form-select" name="category_id" id="category">
        <option selected>---SELECIONE A CATEGORIA---</option>
        <?php
            while($category = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($category);

                echo "<option value='{$id}'>{$name}</option>";
            }
        ?>
    </select><br>

    <input type="text" name="name" id="name" class="form-control" placeholder="digite seu nome"><br>
    
    <textarea name="description" id="description" class="form-control" cols="2" rows="2"></textarea><br>

    <input type="text" name="value"  id="value" class="form-control" placeholder="preço"><br>

    <input type="text" name="quantity" class="form-control" placeholder="quantidade"><br>
    
    <input type="text" name="photo" id="photo" class="form-control" placeholder="photo"><br>

    <button class="btn btn-primary">Enviar</button>
</form>