<h1>edicao</h1>

<?php
extract($data)
?>

<form action="" method="post">

    

    <input type="text" name="name" value="<?=$product['name']?>" id="name" class="form-control" placeholder="digite seu nome"><br>
    
    <textarea name="description"  id="description" class="form-control" cols="2" rows="2"><?=$product['description']?></textarea><br>

    <input type="text" name="value"  value="<?=$product['value']?>" id="value" class="form-control" placeholder="preço"><br>

    <input type="text" name="quantity" value="<?=$product['quantity']?>" class="form-control" placeholder="quantidade"><br>
    
    <input type="text" name="photo" value="<?=$product['photo']?>" id="photo" class="form-control" placeholder="photo"><br>

    <button class="btn btn-primary">Salvar</button>
</form>