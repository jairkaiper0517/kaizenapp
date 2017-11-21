<style>

.colorTitulos{
  font-family: berlin sans FB;
  color: #FFFFFF;
}


.filaTituloKanban{
  height: auto;
  margin-bottom: 20px;
  /*background: #e8e8e8;*/
}

.filaContenidoKanban{
  margin-bottom: 20px;
}

.contenidoKanban{
  height: 300px;
  overflow: auto;
  background-color: #E3E3E3;
}

.colorTareas{
  background-color:
}


@media (max-width: 767px){
  .filaContenidoKanban>div{
    margin-bottom: 5%;
  }
}

</style>

<div class="pp-section section fondoPagina2">

  <div class="container-fluid">

    <div class="row filaTituloKanban align-items-center">
      <div class="col-12 text-center colorTitulos">
        <h1 style="font-weight: 400;">KANBAN
          <span class="tooltip-demo">
            <i class="fa fa-question-circle fa-1x" data-content="Listado de las actividades prioritarias pendientes a realizar que aún no han comenzado." data-placement="bottom" data-toggle="popover" aria-hidden="true"></i>
          </span>
        </h1>
      </div>
    </div>

    <!-- kanban -->
    <div class="row filaContenidoKanban ui-widget ui-helper-clearfix">

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg">

        <div class="card">

          <div class="card-header card-info colorTitulos">

            <div class="row">
              <div class="col-10 text-center">
                <h3 style="font-weight: 400;" class="ml-5">TO DO</h3>
              </div>
              <div class="col-1 text-right">
                <span class="tooltip-demo">
                  <i class="fa fa-question-circle fa-2x" data-content="Listado de las actividades prioritarias pendientes a realizar que aún no han comenzado." data-placement="bottom" data-toggle="popover" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="card-block contenidoKanban" id="listaToDo">



          </div>


          <div class="card-footer">

            <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                  <div class="col col-xs-  col-sm- col-md  col-lg text-left">
                    <a href="#modalKanban" data-toggle="modal" class="btn btn-block" data-target="#modalKanban">Crear tarea</a>
                  </div>

                  <div class="col col-xs-  col-sm- col-md  col-lg-2 text-left" >
                     <a style="display: none" href="#modalEditar" id="btnEditarToDo" data-toggle="modal"  data-target="#modalEditar"><i class="zmdi fa fa-pencil-square-o fa-2x zmdi-hc-fw icon"></i></a>
                  </div>

                  <div class="col col-xs-  col-sm- col-md  col-lg-2 text-left" >
                    <a style="display: none" href="#" id="btnDeleteToDo"><i class="zmdi fa fa-trash-o fa-2x zmdi-hc-fw icon"></i> </a>
                  </div>
                  <!-- ocultar en xs -->
                  <div class="col col-xs-  col-sm- col-md  col-lg-2 text-right hidden-xs-down">
                    <a href="#" id="btnMoverToDo"><i class="zmdi fa fa-chevron-right fa-2x zmdi-hc-fw icon"></i> </a>
                  </div>


                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg">

        <div class="card">

          <div class="card-header card-warning colorTitulos">

            <div class="row">
              <div class="col-10 text-center">
                <h3 style="font-weight: 400;" class="ml-5">DOING</h3>
              </div>
              <div class="col-1 text-right">
                <span class="tooltip-demo">
                  <i class="fa fa-question-circle fa-2x" data-content="Listado de actividades que están actualmente en progreso.
                  Para evitar cuellos de botella se debe limitar el número de actividades en progreso." data-placement="bottom" data-toggle="popover" aria-hidden="true"></i>
                </span>
              </div>
            </div>

          </div>

          <div class="card-block contenidoKanban" id="listaDoing">

            <!-- contenido -->

          </div>

          <div class="card-footer">

            <div class="row">

              <div class="col-xs col-sm col-md col-lg text-left">
                <div class="row">

                  <!-- ocultar en xs -->
                  <div class="col  text-left">
                    <a href="#" id="btnRegresarDoing"><i class="zmdi fa fa-chevron-left fa-2x zmdi-hc-fw icon hidden-xs-down"></i> </a>
                  </div>

                  <div class="col col-xs-  col-sm- col-md  col-lg-2 text-left">
                    <a href="#modalEditar" style="display: none" id="btnEditarDoing" data-toggle="modal"  data-target="#modalEditar"><i class="zmdi fa fa-pencil-square-o fa-2x zmdi-hc-fw icon"></i> </a>
                  </div>

                  <div class="col col-xs-  col-sm- col-md  col-lg-2 text-left">
                    <a href="#" style="display: none" id="btnDeleteDoing"><i class="zmdi fa fa-trash-o fa-2x zmdi-hc-fw icon"></i> </a>
                  </div>

                  <div class="col  text-right">
                    <a href="#" id="btnMoverDoing"><i class="zmdi fa fa-chevron-right fa-2x zmdi-hc-fw icon hidden-xs-down"></i> </a>
                  </div>

                  <!-- Mostrar en xs -->
                  <!-- <div class="col  text-left">
                    <a href="#"><i class="zmdi fa fa-arrow-up fa-2x zmdi-hc-fw icon hidden-sm-up"></i> </a>
                  </div>

                  <div class="col  text-right">
                    <a href="#"><i class="zmdi fa fa-arrow-down fa-2x zmdi-hc-fw icon hidden-sm-up"></i> </a>
                  </div> -->

                </div>
              </div>

                  <!-- <div class="col-xs col-sm col-md col-lg text-right">
                    <a href="#"><i class="zmdi fa fa-chevron-right fa-2x zmdi-hc-fw icon"></i> </a>
                  </div> -->

                </div>
              </div>

            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg">

            <div class="card">

              <div class="card-header card-success colorTitulos">

                <div class="row">
                  <div class="col-10 text-center">
                    <h3 style="font-weight: 400;" class="ml-5">DONE</h3>
                  </div>
                  <div class="col-1 text-right">
                    <span class="tooltip-demo">
                      <i class="fa fa-question-circle fa-2x" data-content="Listado de actividades que están completas en un 100%." data-placement="bottom" data-toggle="popover" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="card-block contenidoKanban" id="listaDone">

                <!-- contenido -->

              </div>

              <div class="card-footer">
                <div>
                  <div class="row">

                    <div class="col text-left">
                      <a href="#" id="btnRegresarDone"><i class="zmdi fa fa-chevron-left fa-2x zmdi-hc-fw icon"></i> </a>
                    </div>

                    <div class="col col-xs-  col-sm- col-md  col-lg-2 text-left">
                      <a href="#modalEditar" style="display: none" id="btnEditarDone" data-toggle="modal"  data-target="#modalEditar"><i class="zmdi fa fa-pencil-square-o fa-2x zmdi-hc-fw icon"></i> </a>
                    </div>

                    <div class="col col-xs-  col-sm- col-md  col-lg-2 text-left">
                      <a href="#" style="display: none" id="btnDeleteDone"><i class="zmdi fa fa-trash-o fa-2x zmdi-hc-fw icon"></i> </a>
                    </div>

                    <div class="col  text-right">
                      <a href="#" id="btnMoverDone"><i class="zmdi fa fa-chevron-right fa-2x zmdi-hc-fw icon hidden-xs-down"></i> </a>
                    </div>

                  </div>
                </div>
              </div>


            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg">

            <div class="card">

              <div class="card-header card-primary colorTitulos">

                <div class="row">
                  <div class="col-10 text-center">
                    <h3 style="font-weight: 400;" class="ml-5">HANSEI</h3>
                  </div>
                  <div class="col-1 text-right">
                    <span class="tooltip-demo">
                      <i class="fa fa-question-circle fa-2x" data-content="" data-placement="left" data-toggle="popover" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="card-block contenidoKanban" id="listaHansei">

                <!-- contenido -->

              </div>

              <div class="card-footer">

                <div class="row">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                      <div class="col col-xs-12  col-sm-12 col-md-12  col-lg-12 text-center">
                        <a class="btn btn-outline-info" href="<?php echo URL;?>principal/hansei">Ir a Hansei</a>
                      </div>
                      <!-- ocultar en xs -->
                      <!-- <div class="col col-xs-6  col-sm-6 col-md-6  col-lg-6 text-right hidden-xs-down">
                        <a href="#" id="btnMoverToDo"><i class="zmdi fa fa-chevron-right fa-2x zmdi-hc-fw icon"></i> </a>
                      </div> -->
                      <!-- mostrar en xs -->
                      <!-- <div class="col col-xs-6  col-sm-6 col-md-6  col-lg-6 text-right hidden-sm-up">
                        <a href="#"><i class="zmdi fa fa-arrow-down fa-2x zmdi-hc-fw icon"></i> </a>
                      </div> -->

                    </div>
                  </div>

                </div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <!-- Formulario oculto -->
      <form
      class="text-center"
      id="frmOculto"
      name="frmOculto"
      enctype="multipart/form-data">

      <!-- <label for="" class="text-white">ID</label> -->
      <input type="hidden" id="txtid" name="txtid">
      <!-- <label for="" class="text-white">Tarea</label> -->
      <input type="hidden" id="txttarea" name="txttarea">
    </form>
    <!-- end formulario oculta-->

  </div>
