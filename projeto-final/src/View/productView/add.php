
<form action="" method="post">
    <div class="row  mt-5">
        <div class="col-lg-6">
            <select class="form-select" name="category_id" id="category" required>
                <option selected>---SELECIONE A CATEGORIA---</option>
                <?php
                    while($category = $data->fetch(\PDO::FETCH_ASSOC)){
                        extract($category);

                        echo "<option value='{$id}'>{$name}</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-lg-6">
            <input type="text" name="name" id="name" class="form-control" placeholder="Nome do produto" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <textarea name="description" id="description" class="form-control" cols="2" rows="2" placeholder="Descrição" required></textarea>
        </div>
    </div>

    <div class="row  mt-3">
        <div class="col-lg-4">
            <input type="text" name="value"  id="value" class="form-control" placeholder="Preço" required>
        </div>
        <div class="col-lg-4">
            <input type="text" name="quantity" class="form-control" placeholder="Quantidade" required>
        </div>
        <div class="col-lg-4">
            <input type="text" name="photo" id="photo" class="form-control" placeholder="Foto" required>
        </div>
    </div>
    <button class="btn btn-primary mt-3">Enviar</button>
</form>