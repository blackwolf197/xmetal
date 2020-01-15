<script>

  function click_eliminar(id){
  	
    alertify.confirm("Desea eliminar este registro",
  function(){
    //alertify.success('Ok');
    window.location.href ="<?= base_url('frutac/eliminar/')?>"+id;
  },
  function(){
    alertify.error('Cancel');
  });
}
</script>
