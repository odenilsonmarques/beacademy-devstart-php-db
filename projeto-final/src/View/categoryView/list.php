
<h1>Listar Categorias</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <td>#ID</td>
            <td>NOME</td>
            <td>DESCRIÇÃO</td>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($category = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($category);
                echo '<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td>
                            <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                            <a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                         </td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>