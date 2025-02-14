<?php
// router.php
session_start();
// Incluir archivos necesarios

include 'views/header.php';

// Incluir el controlador de libros
require_once 'controllers/librosController.php';

// Obtener la ruta solicitada
$request = $_SERVER['REQUEST_URI'];

// Definir las rutas basadas en parámetros
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
} else {
    $accion = 'index';  // Acción por defecto
}

// Lógica de redirección a las vistas correspondientes
switch ($accion) {
    case 'registrar':
        include 'views/registrar.php';
        break;
    
    case 'listado':
        include 'views/listado.php';
        break;

    case 'eliminar':
        // Aquí se llama a la lógica de eliminación desde el controlador
        include 'controllers/librosController.php';
        break;

    case 'contacto':
        include 'views/contacto.php';
        break;

    default:
        include 'views/index.php';  // Página de inicio por defecto
        break;
}

// Incluir el pie de página
include 'views/footer.php';

?>