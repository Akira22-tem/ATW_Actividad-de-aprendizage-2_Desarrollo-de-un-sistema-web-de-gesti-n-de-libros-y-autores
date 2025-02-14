

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Mind - Gestión de Libros</title>
    
    <!-- Enlace a tu archivo CSS -->
    <link rel="stylesheet" href="assets/styles.css">
    
    <!-- Enlace a Font Awesome (si lo estás usando para íconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap (si lo estás usando para la barra de navegación) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    background-image: url('https://i.ibb.co/jkCtfqtp/japanese-anime-girl-student-train-station-gomr5uz81d5gqeua.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    filter: none;
}

/* Contenedor principal */
.container {
    position: relative;
    z-index: 1;
    background-color: rgb(33, 37, 41);
    color: rgb(255, 255, 255);
    padding: 20px;
}
/* Formularios */
form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgb(255, 255, 255);
}

/* Título "Lista de libros" */
h2.lista-libros, #lista-libros {
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

/* Tabla de libros */
table {
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #343a40;
    color: rgba(255, 255, 255, 0.8);
}

td {
    background-color: #f8f9fa;
    color: rgb(33, 37, 41);
}

tr:hover {
    background-color: rgba(0, 0, 0, 0.1);
}
</style>
<form action="/mvc-php/controllers/librosController.php" method="POST">
    <input type="text" name="titulo" placeholder="Título del libro" required>
    <input type="text" name="autor" placeholder="Nombre del autor" required>
    <input type="number" name="precio" placeholder="Precio" min="1" required>
    <input type="number" name="cantidad" placeholder="Cantidad" min="1" required>
    <button type="submit" name="registrar">Registrar</button>
</form>
