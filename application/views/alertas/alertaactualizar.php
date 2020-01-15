<script>
	$(document).ready(function(){
	$("#update").click(function(){
   alertify.confirm('Confirmacion', 'Desea eliminar este registro', function(){
   window.location.href = "<?= base_url('frutac/eliminar/') ?>";

  },
  function(){ 
  	alertify.error('Cancel');
   
  });

   }); 

});
</script>	