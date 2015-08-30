<?php
//  CMS Insayd.com
//  Gestion de Contenido
//  by Perry Lee Daniels.
//  perrydaniels@gmail.com
//  ------------------------------

//echo "-- Config<br>";

global $usuarios_sesion; $sql_tabla; $sql_tabla2; $registros; $sql_host; $sql_db; $sql_usuario; $sql_pass; $prefijo_path;	// Variables Globales
global $idUsuarioL; $nickUsuarioL; $emailUsuarioL; $nombreUsuarioL;
global $ap_cuenta_mail; $ap_pass_mail; $ap_correo_mail; $ap_nombre_mail; $ap_forma_mail; $ap_smtpauth_mail;
global $ap_servidor_mail; $ap_puerto_mail; $ap_error_mail; $ap_wordwrap_mail; $ap_ishtml_mail;
global $ap_nombre_ct; $ap_nombre_lg; $ap_ico; $ap_logo_login; $ap_logo_interno; $ap_alt_logo; $ap_estiloCSS; $ap_estilo_login; $ap_estilo_panel;
global $entorno;

// Usuarios ------
$usuarios_sesion    = "cyberseg";	// Nombre de la session (puede dejar este mismo)
                                        // Cambiar en archivo de capcha para que funcione!
$sql_tabla          = "ap_usuarios";	// Nombre de la tabla que contendra los datos de los usuarios
$sql_tabla2         = "ap_instituciones";	// Nombre de la tabla que contendra los datos de los usuarios
$registros          = 25;  		// cantidad de registros a mostrar por defecto

$db_motor           = "mysql";	// Tipo de Servidor de Base de datos (mysql,postgresql,oracle,etc).
$sql_host           = "localhost";	// Host, nombre del servidor o IP del servidor de base de datos.
// Desarrollo local------
$sql_db             = "insayd_cyber";	//impulsar_gescon Base de datos que se usario
$sql_usuario        = "root";	 	// Usuario de Mysql
$sql_pass           = "javirala";     // contrasenia de Mysql
$ap_nombre_ct       = "CyberSeg 1.0 - Local";	// Nombre de la aplicación Corto <i class='fa fa-key'></i>
$ap_nombre_lg       = "<i class='fa fa-key'></i> CyberSeg 1.0 - Local";	// Nombre de la aplicación Largo
//$entorno            = 1;  // 1 / 0
// Desarrollo insayd.com ------
//$sql_db           = "insayd_cyber";	//impulsar_gescon Base de datos que se usario
//$sql_usuario      = "insayd_cyber";	// Usuario de Mysql
//$sql_pass         = "Javirala24.gt";   // contrasenia de Mysql
//$ap_nombre_ct       = "InmobiGes 3.0 - Test";	// Nombre de la aplicación Corto <i class='fa fa-key'></i>
//$ap_nombre_lg       = "<i class='fa fa-key'></i> InmobiGes 3.0 - Test";	// Nombre de la aplicación Largo
//$entorno          = 0;
// Produccion apolo ------
//$sql_db           = "cyberseg_base";   //impulsar_gescon Base de datos que se usario
//$sql_usuario      = "cyberseg_base";	// Usuario de Mysql
//$sql_pass         = "Javirala24.gt";     // contrasenia de Mysql
//$ap_nombre_ct       = "CyberSeg 1.0";	// Nombre de la aplicación Corto <i class='fa fa-key'></i>
//$ap_nombre_ct       = "CyberSeg 1..0";	// Nombre de la aplicación Corto <i class='fa fa-key'></i>
//$ap_nombre_lg       = "<i class='fa fa-key'></i> CyberSeg 1..0";	// Nombre de la aplicación Largo
$entorno            = 0;
// Variables de envio de Correo ------
$ap_cuenta_mail     = "envio@crm.e.gt";     //Correo de envio de mails;
$ap_pass_mail       = "Javirala24.gt";                       //Password de mail;
$ap_correo_mail     = "soporte@crm.e.gt";                 //Correo a mostrar en el envio y destino de correos de clientes;
$ap_nombre_mail     = "CyberSeg";                    //Nombre a mostrar en el envio;
//$ap_forma_mail      = "ssl";                              //Forma de envio envio de mails;
$ap_forma_mail      = "";                              //Forma de envio envio de mails;
$ap_smtpauth_mail   = true;                               //Requiere autenticacion smtp
$ap_servidor_mail   = "mail.crm.e.gt";                    //Servidor de mail;
$ap_puerto_mail     = 2525;                                //Puerto de envio de mail;
$ap_wordwrap_mail   = 50;                                 // Set word wrap to 50 characters
$ap_ishtml_mail     = true;                               // Set email format to HTML
$ap_error_mail      = "El mensaje no pudo ser enviado, llame al +502.41786953";   //Mensaje si ocurre error

// Generales de Aplicación -------
//$ap_nombre_ct       = "Apolo - ig3.0";	// Nombre de la aplicación Corto <i class='fa fa-key'></i>
//$ap_nombre_lg       = "<i class='fa fa-key'></i> Apolo - ig3.0";	// Nombre de la aplicación Largo
$ap_ico             = "img/logo/cyber-ico.png";
$ap_logo_login      = "img/logo/cyber_bl.png";
$ap_logo_interno    = "img/logo/cyber_ng.png";
$ap_alt_logo        = "CyberSeg";
$ap_estiloCSS       = "nature.min.css"; // default, earth, graphite, nature, night, utopia
$ap_estilo_login    = " .login {
                          background-color: #2d323d;
                          height: 100%;
                          min-height: 100%;
                        }";
$ap_estilo_panel    = " .navbar .navbar-brand img {
                        position: absolute;
                        max-width: 60%;
                        height: 21px;
                        width: 90px;
                        top: 15px;
                        left: 60px;
                      }";


$prefijo_path        = "../libs/basicas/";	// Directorios para subir archivos

if ($ajaxpath) { $prefijo_path = $ajaxpath.$prefijo_path; }

// No modificar lo que esta abajo de esta linea.

include_once($prefijo_path."db_".$db_motor.".php");
include_once($prefijo_path."common.php");

?>
