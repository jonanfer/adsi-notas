    <script src="dist/js/jquery-1.10.2.min.js"></script>
	<script src="dist/js/semantic.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#adsi, #ads').click(function() {
		      $('#modal2').modal('show');
		      });

		$('#inicio, #ini').click(function() {
		      $('#modal1').modal('show');
		      });

		$('#form1').form({
                 Usuario: {
                   identifier  : 'nom_usuario',
                   rules: [
                     {
                       type   : 'empty',
                       prompt : 'Por Favor Ingrese su Nombre de Usuario.'
                     }
                   ]
                 },
                 Contraseña: {
                   identifier : 'clave',
                   rules: [
                     {
                       type   : 'empty',
                       prompt : 'Por Favor Ingrese su Contraseña'
                     },
                     {
                       type   : 'length[6]',
                       prompt : 'Su Contraseña debe tener al menos 6 caracteres.'
                     }
                   ]
                 }
               });
	});
	
	</script>
</body>
</html>