<script>
function click_eliminar(){

alertify.confirm("Desea eliminar este registro.",
  function(){
    alertify.success('eliminado');
  },
  function(){
    alertify.error('Cancelado');
  });

}
</script>