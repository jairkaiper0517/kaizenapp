
<!-- Page Wrap -->
<div class="pageWrap">

  <!-- Page content -->
  <div class="pageContent extended">
    <div class="container">
      <h1 class="pageTitle">
        <a href="#" title="#">Usuarios</a>
      </h1>
      <ol class="breadcrumb">
        <!-- Pagina principal administrador -->
        <li class="active"><a href="<?php echo URL;?>administrador/">Home</a></li>
        <li class="active">Usuarios</li>
      </ol>

      <!--  -->
      <div class="box rte">

					<form>
						<div class="row">

							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInputValidate">Nombre</label>
									<input type="text" class="form-control error" id="basicInputValidate" placeholder="Nombre">
									<div class="input-error-msg"><!--Mensaje de error input--></div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInputValidate">Correo electronico</label>
									<input type="text" class="form-control error" id="basicInputValidate" placeholder="Correo">
									<div class="input-error-msg"><!--Mensaje de error input--></div>
								</div>
							</div>

              <div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Rol</label>
									<select class="error js-select">
										<option disabled selected>- Seleccione un rol -</option>
										<option>Administrador</option>
										<option>Usuario</option>
									</select>
									<div class="input-error-msg"><!--Mensaje de error select--></div>
								</div>
							</div>

						</div>

            <div class="alert alert-success alert-dismissible" role="alert">
						<strong>Warning</strong> - Lorem ipsum dolor sit amet voluptates donor paribus
					</div>

						<button type="submit" class="btn btn-primary">Actualizar</button>
					</form>


				</div>
      <!--  -->

      <!-- Table Striped -->
      <div class="box rte box-without-bottom-padding">
        <h2 class="boxHeadline">Usuarios registrados</h2>


        <div class="tableWrap table-responsive">
          <table id="tablaUsuarios" class="table table-striped">

            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Rol</th>

              </tr>
            </thead>

            <tbody>
               <script src='<?php echo URL;?>public/admin/assets/js/usuarios.js'></script>
            </tbody>
          </table>
        </div>
      </div>

      
    </div>
  </div>
</div>
