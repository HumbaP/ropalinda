<div id="reg-info">
	
	<h1>Panel de administración</h1>
	<p>Registrar usuario de sistema</p>

</div>

<div class="reg_form_wrapper">
	<form action="register" method="POST">
		<h3>Información general</h3>
		<div class="group">
			<input type="text" name="name" id="name" required="required"/>
			<label for="name">Nombre</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="lastname" id="lastname" required="required"/>
			<label for="lastname">Apellido</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="email" id="email" required="required"/>
			<label for="email">Correo electrónico</label>
			<div class="bar"></div>
		</div>
		<div class="group">
			<input type="password" name="password" id="password" required="required"/>
			<label for="password">Contraseña</label>
			<div class="bar"></div>
		</div>

		<p class="normal_text">Rol</p>
		
		<select class="ropalinda_selector">
			<option value="super_admin">Súper admin</option>
			<option value="designer">Diseñador</option>
			<option value="admin_clients">Admin. clientes</option>
		</select>
	

		<div id="button_wrapper">
		 <input class="action-button" type="submit" name="save" value="Agregar">
		</div>
	  
	</form>
</div>
