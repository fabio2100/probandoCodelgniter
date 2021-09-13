
<?php if(!empty($comentarios) && is_array($comentarios)): ?>

<style>
    table th{
        cursor: pointer;
        border: 0.5px solid white;
        background-color: silver;
    },
    table,td{
        border: 0.5px solid white;
        background-color: silver;
        box-shadow: 10px 10px 5px 0px rgba(192,172,172,0.75);
    }
</style>
<table class='table sortable'>
    <thead>
        <th>Comentario</th>
        <th>Fecha</th>
        <th colspan="2">Acciones</th>
    </thead>
    <tbody>
        <?php foreach ($comentarios as $comentarioItem): ?>
            <?= "<tr><td>".$comentarioItem['informacion']."</td><td>".$comentarioItem['fecha']."</td><td><a href='". $comentarioItem['id'] ."'><i class='far fa-edit' style='cursor:pointer;'></i></a></td><td><a href='".$comentarioItem['id']."'><i class='far fa-trash-alt' style='cursor:pointer;'></i></a></td></tr>"?>
        <?php endforeach;?>

    </tbody>    
</table>
<script src="js/sorttable.js"></script>
<?php else: ?>
<h1>Aún no hay comentarios</h1>
<?php endif ?>
