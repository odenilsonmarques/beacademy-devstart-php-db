
<form action="" method="post">
    <div class="row  mt-5">
        <div class="col-lg-6">
            <input type="text" name="name" id="name" value="<?=$data['name']?>" class="form-control">
        </div>
        <div class="col-lg-6">
            <input type="text" name="description"  value="<?=$data['description'];?>" id="description" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary  mt-3">salvar</button>
</form>