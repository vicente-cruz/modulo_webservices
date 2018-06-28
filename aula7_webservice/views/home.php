<div class="alert alert-primary text-center">
    Instalar o Advanced REST Client para Chrome!<br/>
    Selecionar como Header: <strong>application/x-www-form-urlencoded</strong>
</div>
<table class="table table-bordered table-striped">
    <tr class="text-center">
        <th>ID</th>
        <th>Status</th>
        <th>Titulo</th>
    </tr>
    <?php foreach($tarefas as $tarefa): ?>
    <tr class="text-center">
        <td><?php echo $tarefa['id']; ?></td>
        <td><?php echo $tarefa['status']; ?></td>
        <td><?php echo $tarefa['titulo']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>