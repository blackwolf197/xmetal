<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>actualizar</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('props/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('props/alertifyjs/css/alertify.css'); ?>">
	<script src="<?= base_url('props/js/jquery.js'); ?>"></script>
	<script src="<?= base_url('props/js/bootstrap.js'); ?>"></script>
	<script src="<?= base_url('props/alertifyjs/alertify.js'); ?>"></script>
	

</head>

<body>
<?php foreach ($frutas as $p) : ?>

<div class="container">

<form method="POST" action="<?= base_url('frutac/actualizar');?>">
<input type="hidden" name="ID" value="<?= $p->id_fruta ?>">

<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">Nombre fruta</div>
<div class="col-md-3">
 <input type="text" name="nombre" class="form-control" value="<?= $p->nombre_fruta ?>">	
</div>
<div class="col-md-3"></div>
</div>

<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">Cantidad</div>	
<div class="col-md-3">
<input type="number" name="cantida" class="form-control" value="<?= $p->cantidad ?>" >	
</div>
<div class="col-md-3"></div>
</div>

<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">Color fruta</div>	
<div class="col-md-3">
<select class="form-control" name="tcolor">
<option>--seleccione--</option>
<?php foreach ($color as $k) : ?>
<option value="<?= $k->id_color ?>" <?php echo $k->id_color == $p->id_color ? 'selected' : '' ?> ><?= $k->nombre_color ?></option>	
<?php endforeach ; ?>	
</select>	
</div>	
<div class="col-md-3"></div>	
</div>

<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">Sabor fruta</div>	
<div class="col-md-3">
<select class="form-control" name="tsabor">
<option>--seleccione--</option>
<?php foreach ($sabor as $k) : ?>
<option value="<?= $k->id_sabor ?>" <?php echo $k->id_sabor == $p->id_sabor ? 'selected' : '' ?>><?= $k->nombre_sabor ?></option>
<?php endforeach ; ?>	
</select>
</div>
<div class="col-md-3"></div>
</div>
 	
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3">
	<button class="btn btn-block btn-info"  id="update"  name="actualizar"   value="Actualizar">Actualizar</button>
</div>	
<div class="col-md-3"></div>
</div>

</form>
</div>	

<?php endforeach ; ?>

<?php $this->load->view("alertas/alertaactualizar.php") ?>
</body>
</html>