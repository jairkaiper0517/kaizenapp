<!-- Page Wrap -->
<div class="pageWrap">

  <!-- Page content -->
  <div class="pageContent extended">
    <div class="container">
      <h1 class="pageTitle">
        <a href="#" title="#">Editar perfil</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html">Home</a></li>
        <li class="active">Editar perfil</li>
      </ol>

      <div class="box rte">

        <h2 class="boxHeadline">Información de usuario</h2>
        <!-- <h3 class="boxHeadlineSub">Subtitle of the input fields goes here</h3> -->
        <form>

          <div class="row">

            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <label for="basicInput">Nombres</label>
                <input type="text" class="form-control" id="basicInput" placeholder="Placeholder">
              </div>
            </div>

            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <label for="basicInputActive">Apellidos</label>
                <input type="text" class="form-control" id="basicInputActive" placeholder="Placeholder">
              </div>
            </div>

            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <label for="basicInputActive">Correo electronico</label>
                <input type="text" class="form-control" id="basicInputActive" placeholder="Placeholder">
              </div>
            </div>

            <!-- Cargar foto -->
            <div class="col-xs-12 col-sm-4">
              <label for="basicInputActive">Avatar</label>
                <div class="fileUploadWrap">
                  <input type="file" class="form-control">
                  <div class="btn btn-green">Subir imagen</div>
                </div>
            </div>
          </div>

          <button type="submit" id="btnGuardar"class="btn btn-primary">Actualizar</button>

        </form>
      </div>

    </div>
  </div>
</div>
