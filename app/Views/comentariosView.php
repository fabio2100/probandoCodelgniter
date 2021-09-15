
<style>
.contenedor{
  width:90px;
  height:240px;
  position:absolute;
  right:0px;
  bottom:0px;
}
.botonF1{
  width:60px;
  height:60px;
  border-radius:100%;
  background:#F44336;
  right:0;
  bottom:0;
  position:absolute;
  margin-right:16px;
  margin-bottom:16px;
  border:none;
  outline:none;
  color:#FFF;
  font-size:36px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  transition:.3s;  
}
span{
  transition:.5s;  
}
.botonF1:hover span{
  transform:rotate(360deg);
}
.botonF1:active{
  transform:scale(1.4);
}
</style>
<div class="contenedor" onClick='location.href="/comentariosControlador/crearComentario"'>
<button class="botonF1">
  <span>+</span>
</button>
 </div>
<?php if(!empty($comentarios) && is_array($comentarios)): ?>

<style>
    table,td,th{
        margin-left: 3px;
        border: 0.5px solid white;
        background-color: silver;
        box-shadow: 10px 10px 5px 0px rgba(192,172,172,0.75);
    }
</style>
<h3>Cantidad de comentarios: <?= count($comentarios);?></h3>
<table class='table sortable' id='tabla'>
    <thead>
        <th>#</th>
        <th>Comentario</th>
        <th>Fecha</th>
        <th colspan="2">Acciones</th>
    </thead>
    <tbody>
        <?php foreach ($comentarios as $index=>$comentarioItem): ?>
            <?= "<tr><td>$index</td><td contentEditable id=editComentario$index>".$comentarioItem['informacion']."</td><td>".$comentarioItem['fecha']."</td><td onClick='actualizaText($index)'><i class='far fa-edit'></i></td><td><a href=/ComentariosControlador/borrarComentario/".$comentarioItem['id']."><i class='far fa-trash-alt'></i></a></td><input type='hidden' value='".$comentarioItem['id']."'></tr>"?>
        <?php endforeach;?>

    </tbody>    
</table>
<script src="/js/sorttable.js"></script>
<script>
    function actualizaText(index){
        var valores = $('table#tabla').find('tbody').find('tr').find('td#editComentario'+index)[0].textContent;
        var id = $('table#tabla').find('tbody').find('tr').find('input')[index].value;
        location.replace('/comentariosControlador/editarComentario/'+id+'/'+valores);
    }
</script>
<?php else: ?>
<h1>Aún no hay comentarios</h1>
<?php endif ?>

