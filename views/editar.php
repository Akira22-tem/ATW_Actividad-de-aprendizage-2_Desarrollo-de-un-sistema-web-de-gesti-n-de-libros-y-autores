<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Mind - Gestión de Libros</title>

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
            height: 100vh;
            background-image: url('https://i.ibb.co/jkCtfqtp/japanese-anime-girl-student-train-station-gomr5uz81d5gqeua.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* Contenedor del modal */
        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        /* Contenido del modal */
        .modal-content {
            background-color: white;
            border-radius: 10px;
            width: 500px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilos para los botones */
.btn {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    margin-top: 10px;
    border-radius: 5px;
    color: white !important;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Estilos para los botones con los colores correctos */
.btn-custom-success {
    background-color: #28a745 !important; /* Verde */
    color: white !important;
    border: none !important;
    padding: 12px;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

.btn-custom-success:hover {
    background-color: #218838 !important; /* Verde más oscuro */
    transform: scale(1.05);
}

/* Botón de cancelar en rojo */
.btn-custom-danger {
    background-color: #dc3545 !important; /* Rojo */
    color: white !important;
    border: none !important;
    padding: 12px;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

.btn-custom-danger:hover {
    background-color: #c82333 !important; /* Rojo más oscuro */
    transform: scale(1.05);
}

    </style>
</head>
<body>

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <h2>Editar Libro</h2>

            <!-- Formulario de edición -->
            <form method="post" action="/mvc-php/controllers/librosController.php">
                <!-- Campo oculto para el índice del libro -->
                <input type="hidden" name="index" value="<?= $index ?>">

                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" value="<?= htmlspecialchars($libro['titulo']) ?>" required>

                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" value="<?= htmlspecialchars($libro['autor']) ?>" required>

                <label for="precio">Precio:</label>
                <input type="number" step="0.01" name="precio" id="precio" value="<?= htmlspecialchars($libro['precio']) ?>" required>

                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" value="<?= htmlspecialchars($libro['cantidad']) ?>" required>

                <!-- Botones con colores mejorados -->
                <button type="submit" name="actualizar" class="btn btn-success"><i class="fas fa-edit"></i> Actualizar</button>
                <a href="/mvc-php/router.php?accion=listado" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
            </form>
        </div>
    </div>

    <script>
        // Función para mostrar el modal
        function mostrarModal() {
            document.querySelector('.modal').style.display = 'flex';
        }

        // Mostrar el modal al cargar la página
        window.onload = function() {
            mostrarModal();
        };
    </script>

</body>
</html>
