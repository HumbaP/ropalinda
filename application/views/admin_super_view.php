
<div id="super_wrapper">

	<div id="panel_info">
		<h2>Panel administrativo</h2>
		<p> Gestión de administradores</p>
	</div>

	<div id="super_general">


		<div id="filter_wrapper">
			<span>Estado</span>
			<select>
				<option value="all">Todos</option>
  				<option value="super_admin">Super admin</option>
 				<option value="designer">Diseñador</option>
 				<option value="admin_clients">Admin. de clientes</option>
			</select>
			<input type="button" name="filter" value="Aplicar">
			<button class="add" type="submit" >
				<i class="fa fa-plus"><span>Agregar</span></i>
			</button>
		</div>


		<div id="table_wrapper">
			<table>

				<tr class="header">
    				<th>Nombre</th>
    				<th>Apellido</th> 
   					<th>Correo</th>
   					<th>Rol</th>
  				</tr>

  				<tr>
    				<td>Danel</td>
    				<td>Jeje</td> 
   					<td>fewfewfwe@fgrg.com</td>
   					<td>Diseñador</td>
  				</tr>

  				<tr>
    				<td>Danel</td>
    				<td>Jeje</td> 
   					<td>fewfewfwe@fgrg.com</td>
   					<td>Diseñador</td>
  				</tr>

  				<tr>
    				<td>Danel</td>
    				<td>Jeje</td> 
   					<td>fewfewfwe@fgrg.com</td>
   					<td>Diseñador</td>
  				</tr>

  				<tr>
    				<td>Danel</td>
    				<td>Jeje</td> 
   					<td>fewfewfwe@fgrg.com</td>
   					<td>Diseñador</td>
  				</tr>

  				<tr>
    				<td>Danel</td>
    				<td>Jeje</td> 
   					<td>fewfewfwe@fgrg.com</td>
   					<td>Diseñador</td>
  				</tr>

  				<tr>
    				<td>Danel</td>
    				<td>Jeje</td> 
   					<td>fewfewfwe@fgrg.com</td>
   					<td>Diseñador</td>
  				</tr>


			</table>
		</div>

	</div>

	<div id="super_detail">

		<div class="super_information">
			<p class="title">Nombre</p>
			<input class="super_input" type="text" name="name" >
			<p class="title">Apellido </p>
			<input class="super_input" type="text" name="last_name" >
			<p class="title">Correo</p>
			<input class="super_input" type="text" name="email" >
			<p class="title">Contraseña</p>
			<input class="super_input" type="password" name="password" >
			<p class="title">Rol</p>
			<select class="super_input" id="rol_select">
				<option value="all">Todos</option>
  				<option value="super_admin">Super admin</option>
 				<option value="designer">Diseñador</option>
 				<option value="admin_clients">Admin. de clientes</option>
			</select>
		</div>

		<div id="super_options">
			<button class="save" type="submit" >
				<i class="fa fa-floppy-o"> <span>Guardar</span></i>
			</button>
			<button class="delete" type="submit" >
				<i class="fa fa-trash-o"> <span>Borrar</span></i>
			</button>
		</div>
	</div>
	
</div>