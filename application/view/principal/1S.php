<div class="section pp-section" id="div1s">
  <div class="container-fluid">
    <div class="row">
      <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 align-self-center flechaIzq">
        <a href="<?php echo URL;?>principal/cincoS"><i class="fa fa-chevron-circle-left"></i></a>
      </div>
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-4 col-xl-4" id="img5s">
        <div class='selector'>
          <ul>
            <li>
              <input id='c1' type='checkbox' >
              <label for='c1' onclick="mostrarSeiri()" style="background-image: url(<?php echo URL;?>public/user/assets/images/Kaizen/Moneda1.jpg); background-size: cover;">SEIRI</label>
            </li>
            <li>
              <input id='c2' type='checkbox'>
              <label for='c2' onclick="mostrarSeiton()" style="background-image: url(<?php echo URL;?>public/user/assets/images/Kaizen/Moneda1.jpg); background-size: cover;">SEITON</label>
            </li>
            <li>
              <input id='c3' type='checkbox'>
              <label for='c3' onclick="mostrarSeiso()" style="background-image: url(<?php echo URL;?>public/user/assets/images/Kaizen/Moneda1.jpg); background-size: cover;">SEISO</label>
            </li>
            <li>
              <input id='c4' type='checkbox'>
              <label for='c4' onclick="mostrarSeiketsu()" style="background-image: url(<?php echo URL;?>public/user/assets/images/Kaizen/Moneda1.jpg); background-size: cover;">SEIKETSU</label>
            </li>
            <li>
              <input id='c5' type='checkbox'>
              <label for='c5' onclick="mostrarShitsuke()" style="background-image: url(<?php echo URL;?>public/user/assets/images/Kaizen/Moneda1.jpg); background-size: cover;">SHISUKE</label>
            </li>
          </ul>
          <button>5S</button>
        </div>
      </div>
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-6 col-xl-6" id="Pergamino">
        <img class="img-fluid" src="<?php echo URL;?>public/user/assets/images/Kaizen/Pergamino11.png" alt="Pergamino">

        <div class="col-9 col-md-12 col-lg-9" id="seiri" style="display: none;">
          <h2>SEIRI (Clasificación)</h2>
          <p>
            Retirar de las zonas de trabajo todo aquello que no sirve y no se utiliza para las tareas diarias y habituales.
          </p>
          <p>
            <b>Ejemplo Servicios: </b>El uso del equipo de Finanzas para generar un informe que tenía los datos a partir de 2010 hasta la fecha. 
            El equipo sólo requiere datos del año pasado para hacer el análisis. 
            La lógica utilizada para extraer información fue modificada y esto ha reducido el tiempo de generación de informes.
          </p>
          <h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
        </div>

        <div class="col-9 col-md-12 col-lg-9" id="seiton" style="display: none;">
          <h2>SEITON (Orden)</h2>
          <p>
            Cada pieza, elemento o herramienta debe estar en su sitio al inicio de la actividad.
          </p>
          <p>
            <b>Ejemplo Servicios: </b>El equipo necesario dispone de datos en un orden determinado, mientras que la realización de análisis y por lo tanto el equipo habría puesto todas las columnas en ese orden en particular. 
            Se guarda el tiempo de análisis.
          </p>
          <h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
        </div>

        <div class="col-9 col-md-12 col-lg-9" id="seiso" style="display: none;">
          <h2>SEISO (Limpieza)</h2>
          <p>
            Todo el entorno de trabajo y aquello que utilicemos para realizar las labores debe estar limpio: suelo, mesas, herramientas…
          </p>
          <p>
            <b>Ejemplo Servicios: </b>El informe completo se limpió. 
            Se eliminaron las células y columnas de datos los que no fueron requeridos. Esto acelera el tiempo de generación de informes.
          </p>
          <h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
        </div>

        <div class="col-9 col-md-12 col-lg-9" id="seiketsu" style="display: none;">
          <h2>SEIKETSU (Estandarización)</h2>
          <p>
            Las prácticas anteriores deben expandirse por toda la organización y formar parte de la cultura de la empresa.
          </p>
          <p>
            <b>Ejemplo Servicios: </b>Informe anterior se llevó a cabo durante el día y antes se requería mucho tiempo, la productividad del trabajador y la máquina. 
            Ahora se ha creado un proceso estandarizado en torno a la hora de creación. 
            Cada mañana antes de que el cambio se inicie, una persona va a ejecutar el informe durante 10 minutos.
          </p>
          <h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
        </div>

        <div class="col-9 col-md-12 col-lg-9" id="shitsuke" style="display: none;">
          <h2>SHISUKE (Mantener disciplina)</h2>
          <p>
            Convertir esta metodología en un hábito de obligado cumplimiento.
          </p>
          <p>
            <b>Ejemplo Servicios: </b>Todas las actividades descritas anteriormente se mantienen durante los 3 últimos meses y ahora es negocio como de costumbre para el equipo.
          </p>
          <h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
        </div>
      </div>
      <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 align-self-center flechaDer">
        <a href="<?php echo URL;?>principal/mudas"><i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
    <div class="container" id="containerBotones">
      <div class="row text-center">
        <div class="btn-group btn-group-justified col-xs-12 col-sm-12 col-md-12" id="botones5S">
          <a onclick="mostrarSeiri()" href="#" class="btn btn-md btn-primary">Seiri</a>
          <a onclick="mostrarSeiton()" href="#" class="btn btn-md btn-primary">Seiton</a>
          <a onclick="mostrarSeiso()" href="#" class="btn btn-md btn-primary">Seiso</a>
          <a onclick="mostrarSeiketsu()" href="#" class="btn btn-md btn-primary">Seiketsu</a>
          <a onclick="mostrarShitsuke()" href="#" class="btn btn-md btn-primary">Shitsuke</a>
        </div>
      </div>
    </div>
  </div>
</div>
