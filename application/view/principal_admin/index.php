  <!-- Page Wrap -->
  <div class="pageWrap">

    <!-- Page content -->
    <div class="pageContent extended">
      <div class="container">
        <div class="boxHeader pageBoxHeader clearfix">
          <div class="pull-left">
            <h1 class="pageTitle">
              <a href="#" title="#">Administrador</a>
            </h1>
            <ol class="breadcrumb">
              <li class="active"><a href="<?php echo URL;?>administrador/">Home</a></li>
              <li class="active">Administrador</li>
            </ol>
          </div>

          <div class="btn-group pull-right boxHeaderOptions">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="zmdi zmdi-more-vert"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Today</a></li>
              <li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Yesterday</a></li>
              <li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Last week</a></li>
              <li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Last month</a></li>
            </ul>
          </div>
        </div>

        <!-- Contadores -->
        <div class="statsBar">
          <div class="row">
            <div class="col-xs-12 col-md-4 i yellow">
              <a href="#" title="#" class="c">
                <h3 class="title">Publicaciones</h3>
                <div class="num">256,521</div>
                <i class="icon zmdi zmdi-globe"></i>
              </a>
            </div>
            <div class="col-xs-12 col-md-4 i pink">
              <a href="#" title="#" class="c">
                <h3 class="title">Visitas</h3>
                <div class="num">5,478,123</div>
                <i class="icon zmdi zmdi-square-down"></i>
              </a>
            </div>
            <div class="col-xs-12 col-md-4 i green">
              <a href="#" title="#" class="c">
                <h3 class="title">Total sales</h3>
                <div class="num">14,789</div>
                <i class="icon zmdi zmdi-card"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Buscar modal -->
  <div class="modal fade in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <form>
            <input type="text" class="form-control" placeholder="Type search term...">
            <button type="submit" class="btn">Buscar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
