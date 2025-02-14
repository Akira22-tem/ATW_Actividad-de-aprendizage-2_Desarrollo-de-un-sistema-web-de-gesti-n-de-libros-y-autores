<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$libros = $_SESSION['libros'] ?? [];
?>

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

        /* Botones de editar y eliminar */
.btn {
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    color: white !important;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.2s ease;
}

.btn-edit {
    background-color: rgb(17, 193, 243) !important; /* Celeste */
}

.btn-delete {
    background-color: rgb(255, 201, 0) !important; /* Amarillo */
    color: black !important; /* Contraste para que se lea bien */
}

/* Efecto hover */
.btn-edit:hover {
    background-color: rgb(10, 153, 193) !important;
    transform: scale(1.05);
}

.btn-delete:hover {
    background-color: rgb(230, 180, 0) !important;
    transform: scale(1.05);
}


        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2 class="lista-libros">Lista de Libros</h2>

    <?php if (empty($libros)): ?>
        <p>No hay libros registrados.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $index => $libro): ?>
                    <tr>
                        <td><?= htmlspecialchars($libro['titulo']) ?></td>
                        <td><?= htmlspecialchars($libro['autor']) ?></td>
                        <td><?= number_format($libro['precio'], 2) ?> USD</td>
                        <td><?= intval($libro['cantidad']) ?></td>
                        <td>
                            <button class="btn btn-edit" onclick="editarLibro(<?= $index ?>)">✏️ Editar</button>
                            <button class="btn btn-delete" onclick="eliminarLibro(<?= $index ?>)">🗑️ Eliminar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <!-- MODAL PARA EDITAR LIBRO -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <h3>Editar Libro</h3>
            <form id="editForm" method="POST" action="/mvc-php/controllers/librosController.php">
                <input type="hidden" name="actualizar" value="1">
                <input type="hidden" id="editIndex" name="index">
                <input type="text" id="editTitulo" name="titulo" placeholder="Título" required>
                <input type="text" id="editAutor" name="autor" placeholder="Autor" required>
                <input type="number" step="0.01" id="editPrecio" name="precio" placeholder="Precio" required>
                <input type="number" id="editCantidad" name="cantidad" placeholder="Cantidad" required>
                <button type="submit">Guardar</button>
                <button type="button" onclick="cerrarModal()">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        function editarLibro(index) {
            var libro = <?= json_encode($libros) ?>[index];

            document.getElementById("editIndex").value = index;
            document.getElementById("editTitulo").value = libro.titulo;
            document.getElementById("editAutor").value = libro.autor;
            document.getElementById("editPrecio").value = libro.precio;
            document.getElementById("editCantidad").value = libro.cantidad;

            document.getElementById("editModal").style.display = "flex";
        }

        function cerrarModal() {
            document.getElementById("editModal").style.display = "none";
        }

        function eliminarLibro(index) {
            if (confirm('¿Estás seguro de que deseas eliminar este libro?')) {
                window.location = '/mvc-php/controllers/librosController.php?eliminar=' + index;
            }
        }
    </script>
</body>
</html>
