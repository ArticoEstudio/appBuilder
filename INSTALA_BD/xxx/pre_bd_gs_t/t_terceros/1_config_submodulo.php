<?php

//N�mero de Opci�n de la raiz del SUBM�dulo. En el caso del Men� Principal de entrada al M�dulo, la opci�n coincide con la raiz del M�DULO
$variablesubmodulo_opcion_raiz_submodulo=8; 

// CARPETA DONDE EST�N LOS SCRIPTS DE ESTE M�DULO _______________________________________________________________
$variablesubmodulo_carpeta_submodulo="t_terceros"; 

// VARIABLES DE ENTORNO ____________________________________________________________________________________________
// ���OJO!!! El Fichero que contiene las Variables de Entorno de este M�dulo (en la ruta "data/variables/") tendr� el nombre que le demos a la carpeta que contiene los Scripts del M�dulo

// TABLA QUE SOPORTA ESTE M�DULO EN LA BASE DE DATOS _______________________________________________________________
// ���OJO!!! El nombre de la tabla (sin el prefijo en caso de que tuviera) es igual que el nombre de la carpeta donde se encuentran los Scripts del M�dulo
$variablesubmodulo_tabla_submodulo=$variableadmin_prefijo_tablas.$variablesubmodulo_carpeta_submodulo; 


//Si asignamos mediante la siguiente variable permiso global a este nivel, entonces no consultaremos a la base de datos si el usuario en cuesti�n tiene permiso de acceso a este M�dulo, ya que todos los usuarios tendr�n permisos de acceso
$variablesubmodulo_permiso_global_este_nivel="NO"; 

//BARRA DE HERRAMIENTAS _______________________________________________________________
//Definimos si en este m�dulo se mostrar� la Barra de Men�s/Herramientas
$variablesubmodulo_mostrar_barra_herramientas="SI"; 

//CUADRO DIALOGO "NUEVO REGISTRO" _______________________________________________________________
//Definimos el Mensaje del Cuadro de Di�logo que aparece cuando se pulsa el bot�n "Nuevo"
$variablesubmodulo_titulo_dialogo_nuevo="Nuevo Tercero"; 
$variablesubmodulo_mensaje_dialogo_nuevo="Se dispone a crear un<br />Nuevo Tercero"; 

//PERMISOS _______________________________________________________________
//Definimos los valores de los P�rmisos B�sicos
$variablesubmodulo_id_opcion_permiso_insert=9;
$variablesubmodulo_id_opcion_permiso_update=13;
$variablesubmodulo_id_opcion_permiso_delete=14;
$variablesubmodulo_id_opcion_permiso_list=15;
$variablesubmodulo_id_opcion_permiso_auditoriacampo=16;
$variablesubmodulo_script_permisos_particulares="";


//CAMPOS BASICOS DE LA TABLA QUE SOPORTA EL MODULO _______________________________________________________________
$variablesubmodulo_nombre_campo_id="id_tercero"; // Nombre del campo "id"
$variablesubmodulo_nombre_campo_md5="num_tercero_md5"; // Nombre del campo "md5"
$variablesubmodulo_nombre_campo_foco="nombre_completo"; // Nombre del campo sobre el que se situar&aacute; el foco del formulario

// N�MERO M�XIMO DE REGISTROS QUE PODR� TENER ESTA TABLA ____________________________________
$variablesubmodulo_maxobjetos=9879769789;

// SUBCARPETA EN "data" DONDE SE ALMACENAR�N LOS POSIBLES ARCHIVOS QUE SE GENEREN EN ESTE M�DULO __________________________
$variablesubmodulo_rutaalmacenamiento=$variableadmin_prefijo_bd."data/".$variablesubmodulo_carpeta_submodulo."/";

// PROCESO INSERT _______________________________________________________________
$variablesubmodulo_valores_insert="1_valores_insert_particulares"; // Es el Script que tiene los valores de los campos NO PREDETERMINADOS que se insertar�n inicialmente para este M�dulo
$variablesubmodulo_proceso_despues_insert=""; // Contiene los procesos particulares de este m�dulo que se ejecutar�n despu�s de hacer el Insert 

// CAPTURAMOS DATOS DEL FORMULARIO _______________________________________________________________
$variablesubmodulo_elimino_acento_primer_caracter="SI"; // Si toma el valor SI, entonces eliminamos acentos en el primer car�cter del campo. Esto se hace para que sea posible la ordenaci�n alfab�tica

// PROCESO UPDATE _______________________________________________________________
$variablesubmodulo_update_campos_operados="1_update_campos_operados"; // Es el Script que trata el valor de algunos valores recibidos del formulario y los agrupa o hace determinadas operaciones para poder guardarlos en la B.D. mediante el proceso de UPDATE


// RESPECTO AL FORMULARIO _______________________________________________________________
$variablesubmodulo_input_hidden_particulares=""; // Son los campos INPUT type="hidden" particulares de este formulario/m�dulo

// CONTROL DE CAMPOS EN BLANCO _______________________________________________________________
// Se trata de un Array donde indicamos los campos que no se pueden quedar en blanco. La informaci�n va codificada en bloques de tres Valores. 1:NOMBRE DEL CAMPO DE LA TABLA QUE NO PUEDE QUEDAR EN BLANCO 2:CRITERIO PARA SABER SI ESTA EN BLANCO (longitud; valorcero) 3: TEXTO DE ERROR. 
$variablesubmodulo_control_campos_blanco = array("nombre", "longitud", "No puede dejar el campo NOMBRE en blanco","nif_cif", "longitud", "No puede dejar el campo NIF/CIF en blanco");


// CONTROL DE DATOS REPETIDOS _______________________________________________________________
// Se trata de un Array donde indicamos los campos que no pueden tener valores repetidos en esta tabla. La informaci�n va codificada en bloques de tres Valores. 1:NOMBRE DEL CAMPO DE LA TABLA QUE NO PUEDE TENER VALORES REPETIDOS 2:VALOR QUE TOMAR� EL CAMPO POR EL HECHO DE ESTAR REPETIDO (normalmente se dejar� en blanco) 3:TEXTO DE ERROR. 
$variablesubmodulo_control_datos_repetidos = array("nif_cif", "", "Ya existe este NIF/CIF");


// TRANSFORMACI�N EN MAY�SCULAS _______________________________________________________________
$variablesubmodulo_mayusculas="SI"; // Si esta variable toma el valor SI, entonces los textos introducidos en los campos se transformar�n en may�sculas

// DEPENDENCIAS EN OTRAS TABLAS _______________________________________________________________
// Se trata de un Array donde indicamos las dependencias que hay en otras tablas. Esto es fundamental el el proceso de DELETE, ya que se comprobar�n todas las dependencias descritas en este Array y si hay alg�n registro dependiente, entonces no se podr� realizar la eliminaci�n. La informaci�n va codificada en bloques de tres Valores. 1:NOMBRE DE LA TABLA 2:NOMBRE DEL CAMPO 3:TEXTO QUE QUEREMOS QUE APAREZCA EN EL MENSAJE DE ERROR PARA ESE NOMBRE DE CAMPO.
$nombre_tabla_t_terceros=$variableadmin_prefijo_tablas."t_terceros";
$variablesubmodulo_control_dependencias = array($nombre_tabla_t_terceros, "num_representante_legal_md5", "Existen Terceros que tienen asignado este Tercero como Representante Legal");


// LISTADO _______________________________________________________________
$variablesubmodulo_listado_buscador="SI"; // Muestra el buscador en el Listado 
$variablesubmodulo_listado_abecedario="SI"; // Muestra el ABCEDARIO en el Listado 
$variablesubmodulo_listado_campo_ordenacion="apellido1"; // Campo por el que haremos la ordenaci�n Alfab�tica 
$variablesubmodulo_listado_orden="asc"; // Orden en el que se mostrar�n inicialmente los resultados del listado (asc=ASCENDENTE; desc=DESCENDIENTE) 
$variablesubmodulo_listado_tamanio_paginacion=10; // N�mero de registros que se mostrar�n en cada p�gina del listado
$variablesubmodulo_listado_campo_condicion_1="nombre_completo"; // Campo en el que realizar� la B�squeda el Campo1 del Buscador del Listado y el ABECEDARIO 
$variablesubmodulo_listado_campo_condicion_2=""; // Campo en el que realizar� la B�squeda el Campo2 
$variablesubmodulo_listado_etiqueta_campo_condicion_1="Tercero"; // Etiqueta del Campo1 del Buscador del Listado
$variablesubmodulo_listado_etiqueta_campo_condicion_2=""; // Etiqueta del Campo2 del Buscador del Listado

$variablesubmodulo_listado_plantilla="listado_4_columnas.php"; // Indicamos la plantilla que se utilizar� para mostrar el Listado
$variablesubmodulo_listado_estilo_columna_0=' style="width:50px; height:30px;"'; // Indicamos el estilo adicional de la columna CERO de la cabecera

$variablesubmodulo_listado_estilo_columna_1=' style="width:200px;"'; // Indicamos el estilo adicional de la columna UNO de la cabecera
$variablesubmodulo_listado_etiqueta_columna_1="Apellido 1"; // Indicamos el nombre que tendr� la cabecera de la Columna 1
$variablesubmodulo_listado_campo_columna_1="apellido1"; // Indicamos el campo que se mostrar� en la Columna 1
$variablesubmodulo_listado_orden_asc_desc_columna_1="SI"; // Si esta variable toma el valor SI, entonces podremos ordenar ascendente y descendentemente el campo de la columna 1
$variablesubmodulo_listado_criterio_orden_columna_1="apellido1"; // Establecemos el campo que se utilizar� de criterio para ordenar la columna1. Normalmente este valor coincide con $variablesubmodulo_listado_campo_columna_1

$variablesubmodulo_listado_estilo_columna_2=' style="width:200px;"'; // Indicamos el estilo adicional de la columna DOS de la cabecera
$variablesubmodulo_listado_etiqueta_columna_2="Apellido 2"; // Indicamos el nombre que tendr� la cabecera de la Columna 2
$variablesubmodulo_listado_campo_columna_2="apellido2"; // Indicamos el campo que se mostrar� en la Columna 2
$variablesubmodulo_listado_orden_asc_desc_columna_2="SI"; // Si esta variable toma el valor SI, entonces podremos ordenar ascendente y descendentemente el campo de la columna 2
$variablesubmodulo_listado_criterio_orden_columna_2="apellido2"; // Establecemos el campo que se utilizar� de criterio para ordenar la columna1. Normalmente este valor coincide con $variablesubmodulo_listado_campo_columna_2

$variablesubmodulo_listado_estilo_columna_3=' style="width:300px;"'; // Indicamos el estilo adicional de la columna TRES de la cabecera
$variablesubmodulo_listado_etiqueta_columna_3="Nombre"; // Indicamos el nombre que tendr� la cabecera de la Columna 3
$variablesubmodulo_listado_campo_columna_3="nombre"; // Indicamos el campo que se mostrar� en la Columna 3
$variablesubmodulo_listado_orden_asc_desc_columna_3="SI"; // Si esta variable toma el valor SI, entonces podremos ordenar ascendente y descendentemente el campo de la columna 3
$variablesubmodulo_listado_criterio_orden_columna_3="nombre"; // Establecemos el campo que se utilizar� de criterio para ordenar la columna1. Normalmente este valor coincide con $variablesubmodulo_listado_campo_columna_3

$variablesubmodulo_listado_estilo_columna_4=' style="width:200px;"'; // Indicamos el estilo adicional de la columna CUATRO de la cabecera
$variablesubmodulo_listado_etiqueta_columna_4="D.N.I./C.I.F."; // Indicamos el nombre que tendr� la cabecera de la Columna 4
$variablesubmodulo_listado_campo_columna_4="nif_cif"; // Indicamos el campo que se mostrar� en la Columna 4
$variablesubmodulo_listado_orden_asc_desc_columna_4="SI"; // Si esta variable toma el valor SI, entonces podremos ordenar ascendente y descendentemente el campo de la columna 4
$variablesubmodulo_listado_criterio_orden_columna_4="nif_cif"; // Establecemos el campo que se utilizar� de criterio para ordenar la columna1. Normalmente este valor coincide con $variablesubmodulo_listado_campo_columna_4


?>
