<link rel="stylesheet" href="<?php echo URL;?>public/user/assets/css/menuMudas.css">

<div class="pp-section" id="mudas">
	<div class="container-fluid">
		<div class="row">
			<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 align-self-center flechaIzqMudas">
				<a href="<?php echo URL;?>principal/primeraS"><i class="fa fa-chevron-circle-left"></i></a>
			</div>
			<div class="col-md-5 col-lg-5 col-xl-5" id="texto1" style="margin-top: 13%;">
				<ul class="abanico">
					<li onclick="mostrarTransporte()"><a href="#">TRANSPORTE</a></li>
					<li onclick="mostrarInventario()"><a href="#">INVENTARIO</a></li>
					<li onclick="mostrarMovimiento()"><a href="#">MOVIMIENTO</a></li>
					<li onclick="mostrarEspera()"><a onclick="mostrarEspera()" href="#">ESPERA</a></li>
					<li onclick="mostrarSobreproduccion()"><a onclick="mostrarSobreproduccion()" href="#">SOBREPRODUCCION</a></li>
					<li onclick="mostrarSobreprocesamiento()"><a href="#">SOBREPROCESAMIENTO</a></li>
					<li onclick="mostrarDefectos()"><a href="#">DEFECTOS/ERRORES</a></li>
					<li onclick="mostrarTalento()"><a href="#">TALENTO NO UTILIZADO</a></li>
					<li style="pointer-events:none;"><a href="javascript:void();"><h1>MUDAS</h1></a></li>
				</ul>
			</div>
			<div class="col-8 ml-5 col-sm-9 ml-sm-5 col-md-9 ml-md-3 col-lg-4 offset-lg-1 col-xl-4" id="divMudas">
				<div class="col-lg-12" id="transporte">
					<h2>TRANSPORTE</h2>
					<p>Movimiento innecesario de productos y materia prima.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>Los materiales se mueven alrededor de la fábrica.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Mover trabajo en proceso de un lado al otro, incluso cuando son distancias cortas.</li>
							<li>Mover materiales, partes o producto terminado hacia y desde el almacenamiento.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>Máquinas demasiado distanciadas y las partes necesitan ser movidas en una carretilla elevadora</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>Demasiados datos / archivos adjuntos al correo electrónico.</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
				<div class="col-lg-12" id="inventario" style="display: none;">
					<h2>INVENTARIO</h2>
					<p>Exceso de materia prima e insumos, producto terminado y en proceso.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>Acumulaciones de lotes de producto terminado o en proceso.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Excesivo almacenamiento de materia prima.</li>
							<li>Incorrecta programación de producción, balance de cargas y previsión de la demanda.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>Existencias y trabajos en proceso superan lo que es necesario para Just In Time.</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>la búsqueda de archivos informáticos en bases de datos mal administradas.</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
				<div class="col-lg-12" id="movimiento" style="display: none;">
					<h2>MOVIMIENTO</h2>
					<p>Movimientos innecesarios realizados por el personal.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>Las personas tienen que hacer rondas para hacer el trabajo.</li>
							<li>Cualquier movimiento que el operario realice aparte de generar valor agregado al producto o servicio.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Están utilizando las herramientas equivocadas.</li>
							<li>No tener toda la información para hacer el trabajo, las personas suben y bajan buscando y escogiendo documentos.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>Personas subiendo y bajando en el ascensor para conseguir la firma de un responsable.</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>caminar para obtener un equipo varias veces en lugar de mantenerlo con usted.</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
				<div class="col-lg-12" id="espera" style="display: none;">
					<h2>ESPERA</h2>
					<p>Tiempo perdido mientras se espera para el próximo paso de un proceso.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>Miembros del equipo inactivos.</li>
							<li>Operarios esperando por información, averías de maquinas, material, etc.</li>
							<li>Clientes esperando por información en el teléfono.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Desincronización de las partes de un proceso.</li>
							<li>Retrasos en unas actividades que impiden que los recursos se utilicen para otras.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>tener que esperar a recibir más materia prima para seguir fabricando.</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>la tardanza de 5 minutos de uno de los asistentes a una reunión.</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
				<div class="col-lg-12" id="sobreproduccion" style="display: none;">
					<h2>SOBREPRODUCCIÓN</h2>
					<p>Producción de más ítems o antes de que se necesiten.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>una organización no entiende el cambio en la demanda del cliente y por lo tanto produce demasiadas cantidades o produce demasiado pronto.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Procesar artículos más temprano o en mayores cantidades que las requeridas por el cliente.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>Acumulación de capital en existencias.</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>Entrega innecesaria de aplicaciones y servicios que no agregan valor.</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
				<div class="col-lg-12" id="sobreprocesamiento" style="display: none;">
					<h2>SOBREPROCESAMIENTO</h2>
					<p>El exceso de procesamiento se refiere a la inclusión de características adicionales, partes, procesos u otras cosas que el cliente no necesita y por lo tanto no está dispuesto a pagar.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>Introducir los mismos datos en más de un lugar en un formulario o en una aplicación de software.</li>
							<li>Múltiples niveles de aprobación para una pequeña solicitud de gasto.</li>
							<li>Ordenar pruebas innecesarias para los pacientes.</li>
						</ul>
					</p>
					<p><b>Cuándo se manifiesta el talento no utilizado:</b>
						<ul>
							<li>Cuando en vez de generar valor a partir del conocimiento, se generan mudas por desconocimiento.</li>
						</ul>
					</p>
					<p><b>Otros:</b>
						<ul>
							<li>Asignación de personal a tareas incorrectas</li>
							<li>Tareas administrativas burocráticas</li>
							<li>Mala comunicación</li>
							<li>Falta de trabajo en equipo</li>
							<li>Administración deficiente</li>
							<li>Entrenamiento insuficiente</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
				<div class="col-lg-12" id="defectos" style="display: none;">
					<h2>DEFECTOS / ERRORES</h2>
					<p>Información, productos o servicios incorrectos o incompletos.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>No hay correcta supervisión del proceso.</li>
							<li>Hay un deficiente control de calidad.</li>
							<li>Hay baja calidad de los materiales.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Repetición o corrección de procesos.</li>
							<li>Re-trabajo en productos y productos devueltos.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>Los productos se devuelven debido a defectos.</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>Los productos o servicios fallan en la inspección y requieren revisión.</li>
						</ul>
					</p>
					<h4 style="color: #0275d8;">
						<a href="<?php echo URL;?>principal/kanban">KANBAN</a> -
						<a href="<?php echo URL;?>principal/pokayoke">POKA-YOKE</a>
					</h4>
					<h4></h4>
				</div>
				<div class="col-lg-12" id="talento" style="display: none;">
					<h2>TALENTO NO UTILIZADO</h2>
					<p>No utilizar la experiencia, conocimiento y creatividad del personal.</p>
					<p><b>Se genera cuando:</b>
						<ul>
							<li>La gestión en un entorno de fabricación no se asegura de que todo su talento no se está utilizando.</li>
						</ul>
					</p>
					<p><b>Se origina por:</b>
						<ul>
							<li>Falta de gestión del conocimiento.</li>
							<li>Falta de capacitación.</li>
						</ul>
					</p>
					<p><b>Ejemplo manufactura:</b>
						<ul>
							<li>Asignación inadecuada de tareas a personas.</li>
						</ul>
					</p>
					<p><b>Ejemplo Servicios:</b>
						<ul>
							<li>Los empleados pasan tiempo en tareas repetitivas o mundanas.</li>
						</ul>
					</p>
					<h4><a href="<?php echo URL;?>principal/kanban">KANBAN</a></h4>
				</div>
			</div>
			<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 align-self-center flechaDerMudas">
				<a href="<?php echo URL;?>principal/pokayoke"><i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
		<div class="container" id="containerBotonesMudas">
			<div class="row text-center">
				<div class="btn-toolbar btn-toolbar-justify col-10 mt-2 col-sm-10 col-md-10" role="toolbar" id="botonesMudas">
					<div class="btn-group mr-2" role="group">
						<button onclick="mostrarTransporte()" type="button" class="btn btn-primary">TRANSPORTE</button>
						<button onclick="mostrarInventario()" type="button" class="btn btn-primary">INVENTARIO</button>
						<button onclick="mostrarMovimiento()" type="button" class="btn btn-primary">MOVIMIENTO</button>
						<button onclick="mostrarEspera()" type="button" class="btn btn-primary">ESPERA</button>
						<button onclick="mostrarSobreproduccion()" type="button" class="btn btn-primary">SOBREPRODUCCION</button>
						<button onclick="mostrarSobreprocesamiento()" type="button" class="btn btn-primary">SOBREPROCESAMIENTO</button>
						<button onclick="mostrarDefectos()" type="button" class="btn btn-primary">DEFECTOS/ERRORES</button>
						<button onclick="mostrarTalento()" type="button" class="btn btn-primary">TALENTO NO UTILIZADO</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo URL;?>public/user/assets/js/menuMudas.js"></script>
