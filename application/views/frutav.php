
<body>

<div class="container">
	<br><br>

  <!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevafrutas">
 Nueva fruta
</button></center>

  <br>
	<table class="table table-striped table-dark tabl " id="tablas">
<thead>
<tr>
<td>N°</td>
<td>nombre de fruta</td>
<td>cantidad de fruta</td>
<td>color fruta</td>
<td>sabor de la fruta</td>
<td>Eliminar</td>
<td>Actualizar</td>

</tr>	
</thead>	

<tbody>
<?php

$n = 1;
foreach ($fruta as $k) : ?>
 <tr>
<td><?= $n; $n++; ?></td>
<td><?= $k->nombre_fruta ?></td>
<td><?= $k->cantidad ?></td>
<td><?= $k->nombre_color ?></td>
<td><?= $k->nombre_sabor ?></td>


<td>
  <button class="btn btn-outline-danger eli"  onclick="click_eliminar(<?= $k->id_fruta ?>)"><a>Eliminar</a></button>
</td>

<td>
  <a href="<?= base_url('frutac/get_dbofrutas/'.$k->id_fruta) ?>" class="btn btn-block btn-outline-info" >Actualizar</a></a></button> 

</td>
	
</tr>
<?php endforeach ; ?>	
</tbody>
	
</table>

<br>



<!-- Modal -->
<div class="modal fade" id="nuevafrutas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva frutas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('frutac/ingresar');?>" onsubmit = "return validarfrutas();">
        
        <div class="row">
        <div class="col">
        <input type="text" class="form-control cajas" id="nombre" name="nombre" >	
        </div>	
        </div>
        
        <br> 
        <div class="row">
        <div class="col">
        <input type="number" class="form-control cajas" id="cantida" name="cantida">	
        </div>	
        </div>
         
         <br> 
        <div class="row">
        <div class="col">
        <select class="form-control cajas" name="tcolor" id="tcolor" >
        <option value="0">--seleccione un color--</option>
        <?php foreach ($color as $k) : ?>
        <option value="<?= $k->id_color ?>"><?= $k->nombre_color ?></option>
        <?php endforeach ; ?> 
        </select>	
        </div>	
        </div>

         <br> 
        <div class="row">
        <div class="col">
        <select class="form-control cajas" name="tsabor" id="tsabor" >
        <option value="0">--seleccione un sabor--</option>
        <?php foreach ($sabor as $k) : ?>
        <option value="<?= $k->id_sabor ?>"><?= $k->nombre_sabor ?></option> 
        <?php endforeach ; ?>
        </select>	
        </div>	
        </div>

        <br><br>
       <div class="modal-footer">
        <button type="button" class="boton1" data-dismiss="modal">Close</button>
        <input type="submit" class="boton2" value="ingresar">
      </div>

        </form>

      </div>
      
    </div>
  </div>
</div>

</div>
<?php $this->load->view("alertas/alertaeliminar.php") ?>
