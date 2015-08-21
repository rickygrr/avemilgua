<?php
     
    //Definición de Variables locales
    global $id; $nick; $password; $nombre; $apellido; $email; $celular; $cargo; $permiso; $institucion; 
    global $foto; $nacimiento; $genero; $dpi; $nit; $direccion; $tipoper; $codigo; $calendario1; $calendario2;
    global $observaciones; $actividad; $estatus;
    
    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";
    $sql1 = "SELECT u.id,
					u.nick,	    		
    				u.nombre,
                                u.nombre2,
		    		u.apellido,
                                u.apellido2,
                                u.apellido3,
		    	    (select i.nombre from ap_instituciones i where i.id = u.institucion) as ninstitucion,
		    	    u.cargo,
		    	    u.permiso,
		    	    (select c.nombre from ap_catalogos c where c.id = u.permiso and c.tipo_catalogo = 2 and c.institucion = 1) as npermiso,
		    	    u.estatus,
		    	    (select c.nombre from ap_catalogos c where c.id = u.estatus and c.tipo_catalogo = 3 and c.institucion = 1) as nestatus
		    from ap_usuarios u
		    WHERE 1=1 ";
    if ($_SESSION['usuario_nivel'] != 1) {
		$sql1 = $sql1 . " AND u.institucion = '" . $_SESSION['usuario_institucion'] . "' ";
    };
	$sql1 = $sql1 . "  order by id +0";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
    $resp1 = mysql_query($sql1);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-users"></i> Listado de Usuarios</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            
<?php
if (!$resp1) { // Error en la ejecución del query
    echo "<div class='alert alert-block alert-danger fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-exclamation-circle'></i> Atención</h4> No pudo ejecutarse satisfactoriamente la consulta: (".$sql1.") en la BD: " . mysql_error() . "</p>
          </div>";
        //exit;
} elseif (mysql_num_rows($resp1) == 0) { // búsqueda satisfactoria, 0 registros encontrados
    echo "<div class='alert alert-block alert-warning fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-exclamation-circle'></i> Atención</h4> No se encontraron registros en su búsqueda!</p>
          </div>";
} else {
    echo "<div class='alert alert-block alert-success fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-check-square-o'></i> ".mysql_num_rows($resp1)." Registros encontrados</h4> Búsqueda satisfactoria, seleccione el registro que desea gestionar por medio del ícono  (<i class='fa fa-pencil'></i>) </p>
            </div>";
?>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    Listado de Usuarios del Sistema
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th class="hidden-xs hidden-sm">Usuario (e-Mail)</th>
                                    <th class="hidden-xs hidden-sm">Emp.</th>  
                                    <th class="hidden-xs">Cargo</th>
                                    <th class="hidden-xs">Permiso</th> 
                                    <th class="hidden-xs">Est.</th> 
                                    <th class=""><i class="fa fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
    while($row=mysql_fetch_assoc($resp1)){
        print "<tr class=''>";
        print "  <td>".utf8_encode($row['nombre'])." ".utf8_encode($row['nombre2'])." ".utf8_encode($row['apellido'])." ".utf8_encode($row['apellido2'])." ".utf8_encode($row['apellido3'])."</td>";
        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['nick'])."</td>";
        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['ninstitucion'])."</td>";
        print "  <td class='hidden-xs'>".utf8_encode($row['cargo'])."</td>";
        print "  <td class='hidden-xs'>".utf8_encode($row['npermiso'])."</td>";
        print "  <td class='hidden-xs' nowrap>".utf8_encode($row['nestatus'])."</td>";
        print "  <td class='center' align='center' nowrap>
                    <a href='index.php?p=usuarios/usuarios_edit.php&id=".$row['id']."' title='Editar Usuario' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>
                    <a href='index.php?p=usuarios/usuarios_gestion.php&id=".$row['id']."&btn=Borrar' title='Borrar Usuario' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a> 
                 </td>";
        print "</tr>";
    }
?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well well-sm">
                        <h4><i class="fa fa-info-circle"></i> Instrucciones</h4>
                        <ul>
                            <li>En la parte superior puede buscar un registro ingresando una porcion de texto.</li>
                            <li>Haga click en el icono <i class="fa fa-pencil"></i> para editar el registro seleccionado.</li>
                            <li>Haga click en el icono <i class="fa fa-times"></i> para eliminar el registro.</li>
                            <li>Si el registro no está en el listado y desea ingresar uno nuevo, haga click en el boton siguiente.</li>
                        </ul>
                        <a class="btn btn-warning btn-xs btn-block" target="" href="index.php?p=usuarios/usuarios_edit.php">Ingresar un nuevo usuario</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
<?php } ?>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>

<!-- DataTables JavaScript -->
<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="../bower_components/datatables-plugins/api/dataTables.fixedHeader.js" type="text/javascript"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dt-usuarios').DataTable({
        responsive: true,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Lo sentimos - no se encontraros registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "search": "Filtrar:",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtro de un total de _MAX_ registros)",
            paginate: {
                first:      "Inicio",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Fin"
            },
        }
    });
    
});

$(document).ready(function() {
    var t1 = $('#dt-usuarios').eq(0).DataTable();
    new $.fn.dataTable.FixedHeader( t1, {
        bottom: true
    } );
 
 //   var t2 = $('table.display').eq(1).DataTable();
 //   new $.fn.dataTable.FixedHeader( t2, {
 //       bottom: true
 //   } );
} );
</script>




