<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Mind - Gestión de Libros</title>

    <!-- Enlace a tu archivo CSS -->
    <link rel="stylesheet" href="assets/styles.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 56px; /* Evita que el contenido se solape con la navbar fija */
            height: 100vh;
            background-image: url('https://i.ibb.co/jkCtfqtp/japanese-anime-girl-student-train-station-gomr5uz81d5gqeua.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            position: relative;
            z-index: 1;
            background-color: rgb(33, 37, 41);
            color: rgb(255, 255, 255);
            padding: 20px;
        }

        /* Barra de navegación */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgb(33, 37, 41);
        }

        .navbar .container {
            display: flex;
            justify-content: center; /* Centra los elementos */
            flex-wrap: wrap;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .navbar-nav .nav-item {
            text-align: center;
        }

        .navbar-nav .nav-link {
            color: rgb(247, 247, 247) !important;
            padding: 10px;
        }

        /* Para dispositivos pequeños */
        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="router.php?accion=index">Open Mind</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="router.php?accion=index">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="router.php?accion=registrar">Registrar Libro</a></li>
                    <li class="nav-item"><a class="nav-link" href="router.php?accion=listado">Listado de Libros</a></li>
                    <li class="nav-item"><a class="nav-link" href="router.php?accion=contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

