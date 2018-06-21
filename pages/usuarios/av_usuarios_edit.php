<!-- PHP -->
<?php

//Definición de Variables locales *
    // av_datos_personales
    global $id; $codigo; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $dpi; $nacionalidad; $genero; $fecha_nacimiento; $lugar_nacimiento; $vecindad; $estado_civil; $profesion; $direccion; $telefono; $correo;

    // av_datos_servicios
    global $grado_militar; $compañia; $puesto; $fecha_alta; $fecha_baja; $motivo_baja; $computos_servicios; $sueldo_mensual; $zona_militar;

//Inicialización de Variables locales *
    // datos_personales
    $id = '';
    $codigo = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $dpi = '';
    $nacionalidad = '';
    $genero = '';
    $fecha_nacimiento = '';
    $lugar_nacimiento = '';
    $vecindad = '';
    $estado_civil = '';
    $profesion = '';
    $direccion = '';
    $telefono = '';
    $correo = '';

    // datos_servicios
    $grado_militar = '';
    $compañia = '';
    $puesto = '';
    $fecha_alta = '';
    $fecha_baja = '';
    $motivo_baja = '';
    $computos_servicios = '';
    $sueldo_mensual = '';
    $zona_militar = '';

    // Asignar el valor que viene en el request a variables *
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$codigo) { $codigo  = isset_or('codigo', ''); };
    if (!$nombre) { $nombre = isset_or('nombre', ''); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', ''); };
    if (!$apellido) { $apellido = isset_or('apellido', ''); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', ''); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', ''); };
    if (!$dpi) { $dpi = isset_or('dpi', ''); };
    if (!$nacionalidad) { $nacionalidad = isset_or('nacionalidad', ''); };
    if (!$sexo) { $sexo = isset_or('sexo', ''); };
    if (!$fecha_nacimiento) { $fecha_nacimiento = isset_or('fecha_nacimiento', ''); };
    if (!$lugar_nacimiento) { $lugar_nacimiento = isset_or('lugar_nacimiento', ''); };
    if (!$vecindad) { $vecindad = isset_or('vecindad', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$profesion) { $profesion = isset_or('profesion', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };

    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$compañia) { $compañia = isset_or('compañia', ''); };
    if (!$puesto) { $puesto = isset_or('puesto', ''); };
    if (!$fecha_alta) { $fecha_alta = isset_or('fecha_alta', ''); };
    if (!$motivo_baja) { $motivo_baja = isset_or('motivo_baja', ''); };
    if (!$computos_servicios) { $computos_servicios = isset_or('computos_servicios', ''); };
    if (!$sueldo_mensual) { $sueldo_mensual = isset_or('sueldo_mensual', ''); };
    if (!$zona_militar) { $zona_militar = isset_or('zona_militar', ''); };
?>
<!-- HTML -->

<!-- Page Content * -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-user"></i> Administración de Usuarios</h1>
            </div>
            <!-- /.col-lg-12 * -->
        </div>
        <!-- /.row * -->

<!-- PHP -->
<?php
//Pendiente
?>
        <!-- BOX TABS * -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del usuario
                    </div>
                        <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <div class="tabbable header-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-user"></i> <span class="hidden-inline-mobile">Personal</span></a></li>
                    <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-shield"></i> <span class="hidden-inline-mobile">Servicio</span></a></li>
                </ul>
                <div class="tab-content">
                <br>
                    <!----------------------------------------------------------------------------------------------------------------->
                    <!-- Carpeta 1* -->
                     <div class="tab-pane fade in active" id="box_tab1">
                        <input class="text" name="p" type="hidden" value="usuarios/av_usuarios_gestion.php"/>
                         <!-- Codigo/DPI/NIT -->
                        <div class="form-group">
                            <!-- ID: Pendiente ----------------------------------------------------------------------------------------
                            <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>"  >
                            </div>
                             --------------------------------------------------------------------------------------------------------->
                            <label for="codigo" class="col-sm-2 control-label">Código</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="<?php echo $codigo; ?>">
                            </div>
                            <label for="dpi" class="col-sm-1 control-label">D.P.I.</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="dpi" placeholder="Número de D.P.I." name="dpi" value="<?php echo $dpi; ?>">
                            </div>
                            <label for="nit" class="col-sm-1 control-label">N.I.T.</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="nit" placeholder="N.I.T." name="nit" value="<?php echo $nit; ?>">
                            </div>
                        </div>
                         <!-- Nombres -->
                        <div class="form-group">
                            <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre" placeholder="1er. Nombre" name="nombre" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre2" placeholder="2do. Nombre" name="nombre2" value="<?php echo $nombre2; ?>">
                            </div>
                        </div>
                         <!-- Apellidos -->
                        <div class="form-group">
                            <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido" placeholder="1er. Apellido" name="apellido" value="<?php echo $apellido; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido2" placeholder="2do. Apellido" name="apellido2" value="<?php echo $apellido2; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido3" placeholder="Apellido de Casada" name="apellido3" value="<?php echo $apellido3; ?>">
                            </div>
                        </div>
                         <!-- Lugar Nacimiento/Nacionalidad -->
                        <div class="form-group">
                            <label for="lugar_nacimiento" class="col-sm-2 control-label">Lugar de Nacimiento</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="lugar_nacimiento" placeholder="País" name="lugar_nacimiento" value="<?php echo $lugar_nacimiento; ?>">
                            </div>
                            <label for="nacionalidad" class="col-sm-2 control-label">Nacionalidad</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nacionalidad" placeholder="País" name="nacionalidad" value="<?php echo $nacionalidad; ?>">
                            </div>
                        </div>
                         <!-- Fecha Nacimiento/Genero -->
                        <div class="form-group">
                            <label for="nacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control datepicker" id="fecha_nacimiento" placeholder="Fecha" name="fecha_nacimiento" data-mask="9999-99-99" value="<?php echo $nacimiento; ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <label for="genero" class="col-sm-2 control-label">Género</label>
                            <div class="col-sm-4">
                                <select id="sexo" class="form-control col-md-12" name="genero" >
                                    <?php
                                        $sql2="SELECT  id, nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 6 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['comodin'].'" ';
                                            if ($genero == $row2['comodin']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- Estado Civil/Profesion -->
                        <div class="form-group">
                            <label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
                            <div class="col-sm-4">
                                <select id="estado_civil" class="form-control col-md-12" name="estado_civil" >
                                    <?php
                                        $sql2="SELECT  id, nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 15 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($estado_civil == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.$row2['nombre'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <label for="profesion" class="col-sm-2 control-label">Profesión</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="profesion" placeholder="Trabajo" name="profesion" value="<?php echo $profesion; ?>">
                            </div>
                        </div>
                        <!-- Direccion/Vecindad -->
                        <div class="form-group">
                            <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" rows="2" id="direccion" placeholder="Dirección" name="direccion"><?php echo $direccion; ?></textarea>
                            </div>
                            <label for="vecindad" class="col-sm-1 control-label">Vecindad</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="vecindad" placeholder="Vecindad" name="vecindad" value="<?php echo $vecindad; ?>">
                            </div>

                        </div>
                        <!-- Correo/Telefono -->
                        <div class="form-group">
                            <label for="correo" class="col-sm-2 control-label">Correo Electrónico</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="<?php echo $correo; ?>">
                            </div>
                            <label for="celular" class="col-sm-1 control-label">Teléfono</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" value="<?php echo $telefono; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- Carpeta 2* -->
                    <div class="tab-pane fade" id="box_tab2">
                        <!-- Grado Militar/Compañia/Puesto-->
                        <div class="form-group">
                            <label for="grado_militar" class="col-sm-2 control-label">Grado Militar</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="grado_militar" placeholder="Grado" name="grado_militar" value="<?php echo $grado_militar; ?>">
                            </div>
                            <label for="compañia" class="col-sm-1 control-label">Compañia</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="compañia" placeholder="Compañia" name="compañia" value="<?php echo $compañia; ?>">
                            </div>
                            <label for="puesto" class="col-sm-1 control-label">Puesto</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="puesto" placeholder="Puesto" name="puesto" value="<?php echo $puesto; ?>">
                            </div>
                        </div>
                        <!-- Fecha Alta/Fecha Baja -->
                        <div class="form-group">
                            <label for="fecha_alta" class="col-sm-2 control-label">Fecha de Alta</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control datepicker" id="fecha_alta" placeholder=" Fecha" name="fecha_alta" data-mask="9999-99-99" value="<?php echo $fecha_alta; ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <label for="fecha_baja" class="col-sm-2 control-label">Fecha de Baja</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control datepicker" id="fecha_baja" placeholder=" Fecha" name="fecha_baja" data-mask="9999-99-99" value="<?php echo $fecha_baja; ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- Motivo Baja/Computos Servicios -->
                        <div class ="form-group">
                        <label for="motivo_baja" class="col-sm-2 control-label">Motivo de Baja</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" rows="2" id="motivo_baja" placeholder="" name="motivo_baja"><?php echo $motivo_baja; ?></textarea>
                            </div>
                        <label for="computos_servicios" class="col-sm-2 control-label">Computos de Servicios</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" rows="2" id="computos_servicios" placeholder="" name="computos_servicios"><?php echo $computos_servicios; ?></textarea>
                            </div>

                        </div>
                        <!-- Sueldo Mensual/Zona Militar -->
                        <div class="form-group">
                            <label for="sueldo_mensual" class="col-sm-2 control-label">Sueldo Mensual</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="sueldo_mensual" placeholder="Sueldo" name="sueldo_mensual" value="<?php echo $sueldo_mensual; ?>">
                            </div>
                            <label for="zona_militar" class="col-sm-2 control-label">Zona Militar</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="zona_militar" placeholder="Zona" name="zona_militar" value="<?php echo $zona_militar; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- Fin Carpeta 3 -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <?php if ($id == "0" or $id == "") { ?>
                                    <button type="submit" class="btn btn-success" value="Insertar" name="btn" >Agregar</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-warning" value="Actualizar" name="btn" >Modificar</button>
                                    <button type="submit" class="btn btn-danger" value="Borrar" name="btn" >Borrar</button>
                                <?php }; ?>
                                <button type="reset" class="btn btn-inverse" value="Cancelar">Cancelar</button>
                            </div>
                    </div>
                </div>
                </form>
                        <!----------------------------------------------------------------------------------------------------------------->

<!-- /BOX * -->
        </div>
            </div>
    </div>
</div>
<!-- BOX TABS * -->
        <!-- /.row * -->
    </div>
    <!-- /.container-fluid * -->
</div>
<!-- /#page-wrapper * -->

<?php include_once 'panel/i_foot.php'; ?>
<script src="../bower_components/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Inicia Area Scripts Locales * -->
    <script type="text/javascript">
        // DatePicker *
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
<!-- Finaliza Area Scripts Locales * -->

<!-- *: indica que es material/comentarios del cascaron inicial de webappbase -->