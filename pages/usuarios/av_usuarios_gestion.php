<!-- PHP -->
<?php

//Definición de Variables locales *
    // av_datos_personales
    global $id; $codigo; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $dpi; $genero; $fecha_nacimiento; $vecindad; $estado_civil; $profesion; $direccion; $telefono; $correo; $lugar_nacimiento; $nit; $beneficiario; //$nacionalidad;

    // av_datos_servicios
    global $grado_militar; $compañia; $puesto; $fecha_alta; $fecha_baja; $motivo_baja; $computo_servicios; $sueldo_mensual; $zona_militar;


//Inicialización de Variables locales *
    $mensaje1 = '';
    $mensaje2 = '';
    $mensaje3 = '';
    // av_datos_personales
    $id = '';
    $codigo = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $dpi = '';
    //$nacionalidad = '';
    $genero = '';
    $beneficiario = '';
    $fecha_nacimiento = '';
    $lugar_nacimiento = '';
    $vecindad = '';
    $estado_civil = '';
    $profesion = '';
    $direccion = '';
    $telefono = '';
    $correo = '';
    $nit = '';

    // av_datos_servicios
    $grado_militar = '';
    $compañia = '';
    $puesto = '';
    $fecha_alta = '';
    $fecha_baja = '';
    $motivo_baja = '';
    $computo_servicios = '';
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
    //if (!$nacionalidad) { $nacionalidad = isset_or('nacionalidad', ''); };
    if (!$genero) { $genero = isset_or('genero', ''); };
    if (!$beneficiario) { $beneficiario = isset_or('beneficiario', ''); };
    if (!$fecha_nacimiento) { $fecha_nacimiento = isset_or('fecha_nacimiento', ''); };
    if (!$lugar_nacimiento) { $lugar_nacimiento = isset_or('lugar_nacimiento', ''); };
    if (!$vecindad) { $vecindad = isset_or('vecindad', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$profesion) { $profesion = isset_or('profesion', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };
    if (!$nit) { $nit = isset_or('nit', ''); };

    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$compañia) { $compañia = isset_or('compañia', ''); };
    if (!$puesto) { $puesto = isset_or('puesto', ''); };
    if (!$fecha_alta) { $fecha_alta = isset_or('fecha_alta', ''); };
    if (!$fecha_baja) { $fecha_baja = isset_or('fecha_baja', ''); };
    if (!$motivo_baja) { $motivo_baja = isset_or('motivo_baja', ''); };
    if (!$computo_servicios) { $computo_servicios = isset_or('computo_servicios', ''); };
    if (!$sueldo_mensual) { $sueldo_mensual = isset_or('sueldo_mensual', ''); };
    if (!$zona_militar) { $zona_militar = isset_or('zona_militar', ''); };


    if (!$btn) { $btn = isset_or('btn', ''); };

    //Programacion de Funcionalidad para mostrar datos de la pagina*

    $btn            = isset_or('btn', '');
    $resp           = 0;

    switch ($btn) {
        case "Insertar":
            $sql1 = "INSERT INTO av_datos_personales (id, codigo, nombre, nombre2,
                    apellido, apellido2, apellido3, dpi, genero, beneficiario,
                    fecha_nacimiento, lugar_nacimiento, vecindad, estado_civil,
                    profesion, direccion, telefono, correo, nit) VALUES ('".$id."',
                    '".utf8_decode($codigo)."', '".utf8_decode($nombre)."',
                    '".utf8_decode($nombre2)."', '".utf8_decode($apellido)."',
                    '".utf8_decode($apellido2)."', '".utf8_decode($apellido3)."',
                    '".$dpi."', '".$genero."', '".$beneficiario."',
                    '".$fecha_nacimiento."', '".$lugar_nacimiento."', '".$vecindad."',
                    '".$estado_civil."', '".$profesion."',
                    '".utf8_decode($direccion)."', '".utf8_decode($telefono)."',
                    '".utf8_decode($correo)."', '".$nit."');";
            $sql2 = "INSERT INTO av_datos_servicios (id, grado_militar,
                    compañia, puesto, fecha_alta, fecha_baja, motivo_baja,
                    computo_servicios, sueldo_mensual, zona_militar) VALUES ('".$last_id."',
                    '".utf8_decode($grado_militar)."', '".utf8_decode($compañia)."',
                    '".utf8_decode($puesto)."', '".utf8_decode($fecha_alta)."',
                    '".utf8_decode($fecha_baja)."', '".utf8_decode($motivo_baja)."',
                    '".utf8_decode($computo_servicios)."', '".$sueldo_mensual."',
                    '".utf8_decode($zona_militar)."');";
            break;

        case "Actualizar":
            $sql1 = "UPDATE av_datos_personales SET
                    codigo = '".utf8_decode($codigo)."',
                    nombre ='".utf8_decode($nombre)."',
                    nombre2 = '".utf8_decode($nombre2)."',
                    apellido = '".utf8_decode($apellido)."',
                    apellido2 = '".utf8_decode($apellido2)."',
                    apellido3 = '".utf8_decode($apellido3)."',
                    dpi = '".$dpi."', nacionalidad = '".utf8_decode($nacionalidad)."',
                    genero = '".$genero."',
                    fecha_nacimiento = '".$fecha_nacimiento."',
                    lugar_nacimiento = '".utf8_decode($lugar_nacimiento)."',
                    vecindad = '".utf8_decode($vecindad)."',
                    estado_civil = '".$estado_civil."',
                    profesion = '".$profesion."',
                    direccion = '".utf8_decode($direccion)."',
                    telefono = '".utf8_decode($telefono)."',
                    correo =  '".utf8_decode($correo)."',
                    nit = '".utf8_decode($nit)."'
                    WHERE id = '".$id."'";
             $sql2 = "UPDATE av_datos_servicios SET
                    grado_militar =  '".utf8_decode($grado_militar)."',
                    compañia = '".utf8_decode($compañia)."',
                    puesto = '".utf8_decode($puesto)."',
                    fecha_alta =  '".utf8_decode($fecha_alta)."',
                    fecha_baja = '".utf8_decode($fecha_baja)."',
                    motivo_baja = '".utf8_decode($motivo_baja)."',
                    computo_servicios = '".utf8_decode($computo_servicios)."',
                    sueldo_mensual = '".$sueldo_mensual."',
                    zona_militar = '".utf8_decode($zona_militar)."'
                    WHERE id = '".$id."'";
             break;
        case "Borrar":
            $sql1 = "DELETE FROM av_datos_personales WHERE id = '".$id."'";
            $sql2 = "DELETE FROM av_datos_servicios WHERE id = '".$id."'";
            break;
    }

    function success_msg() {
        global $mensaje1, $mensaje2, $mensaje3;
        $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
        $mensaje2 = utf8_encode('Su gestion fue exitosa');
        $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!');
    }

    function error_msg() {
        global $mensaje1, $mensaje2, $mensaje3;
        $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
        $mensaje2 = utf8_encode('Error de base de datos');
        $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
    }

    if (mysql_query($sql1)) {
        $last_id = mysql_insert_id();
        if (mysql_query($sql2)) {
            success_msg();
        } else {
            error_msg();
        }
    } else {
        error_msg();
    }

?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-ambulance"></i> Gestión de Veteranos</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12 text-center">
                    <?php echo $mensaje1; ?>
            </div>
            <div class="col-md-12 text-center">
                <div class="">
                    <h3><?php echo $mensaje2; ?></h3>
                    <p>
                        <?php echo $mensaje3; ?>
                    </p>
                    <div class="btn-group">
                        <a href="index.php?p=usuarios/av_usuarios_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Listado de Veteranos</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>
<!-- *: indica que es material/comentarios del cascaron inicial de webappbase -->