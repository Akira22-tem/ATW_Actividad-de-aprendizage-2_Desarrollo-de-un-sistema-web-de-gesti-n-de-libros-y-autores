<!DOCTYPE html>
<html lang="es">
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
<<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    background-image: url('https://i.ibb.co/jkCtfqtp/japanese-anime-girl-student-train-station-gomr5uz81d5gqeua.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

/* Deja el contenedor general del navbar sin cambios */
.container {
    position: relative;
    z-index: 1;
    background-color: rgb(33, 37, 41);
    color: rgb(255, 255, 255);
    padding: 20px;
}

/* Estilos para la sección de contacto */
.contact-container {
    max-width: 600px; /* Ajuste para hacerla responsiva */
    width: 90%; /* Para que se adapte en pantallas pequeñas */
    margin: 50px auto; /* Centrado */
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    
    /* Estilos de transparencia y desenfoque */
    background: rgba(255, 255, 255, 0.2); /* Transparente */
    backdrop-filter: blur(10px); /* Efecto desenfoque */
    -webkit-backdrop-filter: blur(10px); /* Para compatibilidad */
    
    /* Sombra para mejor visibilidad */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Hacer el texto más legible sobre fondo blur */
.contact-container h2, 
.contact-container p {
    color: #fff;
}

/* Estilos para enlaces */
a {
    color: #353739d1;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="container text-center mt-5">
        <h2>Contacto</h2>
        <p>Teléfono: 0992840432</p>
        <p>Dirección: Quito, Amazonas</p>

        <!-- Enlaces a las redes sociales para iniciar sesión -->
        <a href="https://www.facebook.com/login" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/login" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://twitter.com/login" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</body>
</html>
