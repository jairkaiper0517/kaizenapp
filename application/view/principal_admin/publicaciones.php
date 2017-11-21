<!-- Page Wrap -->
<div class="pageWrap">

  <!-- Page content -->
  <div class="pageContent extended">
    <div class="container">
      <h1 class="pageTitle">
        <a href="#" title="#">Publicaciones</a>
      </h1>
      <ol class="breadcrumb">
        <!-- Pagina principal administrador -->
        <li class="active"><a href="<?php echo URL;?>administrador/">Home</a></li>
        <li class="active">Publicaciones</li>
      </ol>

      <!-- Table Striped -->
      <div class="box rte box-without-bottom-padding">
        <h2 class="boxHeadline">Publicaciones</h2>


        <div class="tableWrap table-responsive">
          <table id="tablaPublicaciones" class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Título</th>
                <th>Fecha</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                  <script src='<?php echo URL;?>public/admin/assets/js/publicaciones.js'></script>
            </tbody>
          </table>
        </div>
      </div>

      

    </div>
  </div>
</div>
