<?php
// Iniciar la sesión si aún no ha sido iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Si no hay libros registrados, inicializamos la sesión con un arreglo vacío
if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = [];
}

// Manejo de mensajes de error o éxito
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}

if (isset($_SESSION['mensaje_error'])) {
    $mensaje_error = $_SESSION['mensaje_error'];
    unset($_SESSION['mensaje_error']);
}

// Registrar un libro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
    // Validación de los datos del formulario
    if (!empty($_POST['titulo']) && !empty($_POST['autor']) && 
        isset($_POST['precio']) && is_numeric($_POST['precio']) && 
        isset($_POST['cantidad']) && ctype_digit($_POST['cantidad'])) {

        // Crear el libro y agregarlo a la sesión
        $libro = [
            'titulo' => trim($_POST['titulo']),
            'autor' => trim($_POST['autor']),
            'precio' => floatval($_POST['precio']),
            'cantidad' => intval($_POST['cantidad'])
        ];
        
        // Guardar el libro en la sesión
        $_SESSION['libros'][] = $libro;

        // Establecer el mensaje de éxito y redirigir al listado de libros
        $_SESSION['mensaje'] = 'Libro registrado con éxito.';
        header('Location: /mvc-php/router.php?accion=listado');
        exit();
    } else {
        // En caso de error, guardar el mensaje de error
        $_SESSION['mensaje_error'] = 'Todos los campos son obligatorios y deben ser válidos.';
        header('Location: /mvc-php/router.php?accion=listado');
        exit();
    }
}

// Eliminar un libro
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar'])) {
    $index = filter_var($_GET['eliminar'], FILTER_VALIDATE_INT);

    if ($index !== false && isset($_SESSION['libros'][$index])) {
        // Eliminar el libro de la sesión
        array_splice($_SESSION['libros'], $index, 1);
        $_SESSION['mensaje'] = 'Libro eliminado con éxito.';
    } else {
        $_SESSION['mensaje_error'] = 'No se pudo eliminar el libro. Verifique que el índice sea válido.';
    }

    // Redirigir a la página de listado después de eliminar
    header('Location: /mvc-php/router.php?accion=listado');
    exit();
}

// Actualizar un libro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
    $index = filter_var($_POST['index'], FILTER_VALIDATE_INT);

    if ($index !== false && isset($_SESSION['libros'][$index]) &&
        !empty($_POST['titulo']) && !empty($_POST['autor']) &&
        isset($_POST['precio']) && is_numeric($_POST['precio']) &&
        isset($_POST['cantidad']) && ctype_digit($_POST['cantidad'])) {

        // Actualizar los datos del libro
        $_SESSION['libros'][$index] = [
            'titulo' => trim($_POST['titulo']),
            'autor' => trim($_POST['autor']),
            'precio' => floatval($_POST['precio']),
            'cantidad' => intval($_POST['cantidad'])
        ];

        // Establecer mensaje de éxito
        $_SESSION['mensaje'] = 'Libro actualizado con éxito.';
    } else {
        $_SESSION['mensaje_error'] = 'Hubo un error al actualizar el libro. Verifica los campos.';
    }

    // Redirigir al listado después de actualizar
    header('Location: /mvc-php/router.php?accion=listado');
    exit();
}
?>
