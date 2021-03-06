
<div class="mt-3 mb-3 text-end"> 
    <a href="/produtos/novo" class="btn btn-dark">Novo produto</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <td>#ID</td>
            <td>NOME</td>
            <td>DESCRIÇÃO</td>
            <th>IMAGEM</th>
            <td>PREÇO</td>
            <td>QUANTIDADE</td>
            <th>DATA DE CADASTRO</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($product = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($product);// essa  funcao (extract) permite capturar os dados  
                echo '<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td><img width='90px' src='{$photo}'></td>";
                    echo "<td>R$ {$value}</td>";
                    echo "<td>{$quantity}</td>";
                    echo "<td>{$create_at}</td>";
                    echo "<td>
                            <a href='/produtos/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                            <a href='/produtos/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                         </td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>