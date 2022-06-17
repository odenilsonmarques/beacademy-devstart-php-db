<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>editar</h1>

<form action="" method="post">
    <input type="text" name="name" id="name" value="<?=$data['name']?>" class="form-control" placeholder="digite seu nome">
    
    <input type="text" name="description"  value="<?=$data['description'];?>" id="description" class="form-control" placeholder="digite a descrição">
    
    <button class="btn btn-primary">salvar</button>
</form>