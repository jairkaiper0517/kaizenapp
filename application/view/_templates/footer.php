<!-- ===================== Modal Login ========================= -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labellebdy="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Iniciar sesión</h3>
                <button class="close"  data-dismiss="modal" aria-label="cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario Login -->
                <form id="frmLogin" name="frmLogin" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Correo electronico</label>
                            <input type="email" class="form-control" placeholder="ejemplo@perceptio.net" id="txtCorreoL" name="txtCorreoL">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Contraseña</label>
                            <input type="password" class="form-control" id="txtContrasenaL" name="txtContrasenaL" placeholder="Contraseña">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="button" value="Iniciar sesión" id="btnIniciarS" name="btnIniciarS" style="margin-top: 20px;" class="btn btn-primary btn form-control"></input>
                            <div class="alert-danger" style="margin-top: 20px;" id="mensajeLogin" name="mensajeLogin"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label class="form-check-label text-left">
                            <input type="checkbox" class="form-check-input" id="RecordarContrasena" name="RecordarContrasena">
                            Recordar contraseña
                        </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <button id="btnOContrasena" name="btnOContrasena" class="btn-link">Olvide mi contraseña</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===================== Modal Editar ======================= -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labellebdy="modalEditar" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar Tarea</h3>
                <button id="btnCerrarRegistro" class="close" data-dismiss="modal" aria-label="cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario modal crear tarea -->
                <form id="frmEditar" name="frmEditar" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <!-- <label for="">Tarea</label> -->
                            <input type="text" hidden id="txtIdE" name="txtIdE">
                            <textarea class="form-control" id="txtTareaE" name="txtTareaE" rows="3"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <input type="button" value="Aceptar" id="btnModificar" name="btnModificar" style="margin-top: 20px;" class="btn btn-outline-success"></input>

                            <input type="button" value="Cancelar" id="btnCancelarE" name="btnModificar" style="margin-top: 20px;" class="btn btn-outline-danger"></input>

                            <div class="alert-danger text-center" id="mensajeErrorTarea2" name="mensajeErrorTarea2" style="margin-top: 20px;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ===================== Modal Crear Tarea Kanban ========================= -->
<div class="modal fade" id="modalKanban" tabindex="-1" role="dialog" aria-labellebdy="modalKanban" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Nueva tarea</h3>
                <button class="close" id="btnCerrarModal" name="btnCerrarModal" data-dismiss="modal" aria-label="cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario modal crear tarea -->
                <form id="frmKanban" name="frmKanban" enctype="multipart/form-data" class="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <!-- <label for="">Tarea</label> -->
                            <textarea class="form-control" id="txtTarea" name="txtTarea" rows="3"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <input type="button" value="Añadir" id="btnAñadir" name="btnAñadir" style="margin-top: 20px;" class="btn btn-primary"></input>
                        </div>
                        <div class="alert-danger" id="mensajeErrorTarea" name="mensajeErrorTarea" style="margin-top: 20px;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 20px;">
                            <p><b>¿No estás seguro(a) por dónde comenzar? ...</b></p>
                            <p><b>Explora estas opciones:</b></p>
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ListaHogar" aria-expanded="false" aria-controls="collapseTwo">Casos aplicados al hogar</a>
                                        </h5>
                                    </div>
                                    <div id="ListaHogar" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-block"></div>
                                    </div>
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ListaTrabajo" aria-expanded="false" aria-controls="collapseTwo">Casos aplicados al trabajo</a>
                                        </h5>
                                    </div>
                                    <div id="ListaTrabajo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ===================== Modal Registro ======================= -->
<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labellebdy="modalRegistro" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Registro</h3>
                <button id="btnCerrarRegistro" class="close" data-dismiss="modal" aria-label="cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario Registro -->
                <!-- en js accedemos al formulario atraves del name -->
                <form id="frmRegistro" name="frmRegistro" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombres Apellidos" id="txtNombre" name="txtNombre">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" placeholder="ejemplo@perceptio.net" id="txtCorreo" name="txtCorreo">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Contraseña</label>
                            <input type="text" class="form-control" id="txtContrasena" name="txtContrasena" placeholder="Contraseña">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="txtContrasena2" name="txtContrasena2" placeholder="Contraseña">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="button" 
                                   value="Registrar" 
                                   id="btnRegistrar" 
                                   name="btnRegistrar" 
                                   style="margin-top: 20px;" 
                                   class="btn btn-primary btn">
                            <div class="alert-success" id="mensajeRegistro" name="mensajeRegistro" style="margin-top: 20px;"></div>
                            <div class="alert-danger" id="mensajeError" name="mensajeError" style="margin-top: 20px;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================== JavaScripts ========================== -->
<!-- jquery -->
<script src="<?php echo URL;?>public/user/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL;?>public/user/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<!-- tether -->
<script src="<?php echo URL;?>public/user/tether/dist/js/tether.min.js"></script>
<!-- bootstrap 4-->
<script src="<?php echo URL;?>public/user/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL;?>public/user/sweetalert/dist/sweetalert.min.js"></script>
<script>var url = "<?php echo URL; ?>";</script>
<!-- Login/Registro -->
<script src="<?php echo URL;?>public/user/assets/js/hansei.js"></script>
<script src="<?php echo URL;?>public/user/assets/js/login.js"> </script>
<script src="<?php echo URL;?>public/user/assets/js/propositos.js"> </script>
<script src="<?php echo URL;?>public/user/assets/js/iniciarSesion.js"> </script>
<script src="<?php echo URL;?>public/user/assets/js/kanban.js"> </script>
<script src="<?php echo URL;?>public/user/assets/js/glosario.js"></script>
<!--JS 5S-->
<script src="<?php echo URL;?>public/user/assets/js/5s.js"></script>
<script src="<?php echo URL;?>public/user/assets/js/menu.js"></script>
<script src="<?php echo URL;?>public/user/assets/js/prueba.js"></script>
<script src="<?php echo URL;?>public/user/assets/js/popups.js"></script>


</body>
</html>
