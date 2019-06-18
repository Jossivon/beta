function agregaform(datos){
          d=datos.split('||');
          $('#cedulau').val(d[0]);
          $('#nombreu').val(d[1]);
          $('#apellidou').val(d[2]);
          $('#correou').val(d[3]);
          $('#telefonou').val(d[4]);
          $('#cargau').val(d[5]);
}

function preguntar(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro?',
				  function(){ eliminardatos(id) }
                , function(){ alertify.error('Cancel')});

}

function eliminardatos(id){
	cadena = "id" + id,

	$.ajax({
		url: 'eliminar',
		type: 'POST',
		data: cadena,
		success:function(r){
			if(r==1){
			  alertify.success('Se elimino con exito');
			}else{
			  alertify.success('Fallo el servidor');
			}
		}
		
	});
	


}