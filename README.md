# Sistema de Gestión de Libros y Autores

## Descripción

Este es un sistema web desarrollado en PHP siguiendo el patrón de arquitectura MVC. Permite la gestión de libros y autores, con funcionalidades para registrar, actualizar, listar y eliminar libros. Además, garantiza la validación de datos y proporciona una interfaz de usuario amigable.

## Características Principales

- **Registro de libros** con validaciones en los campos: Título, Nombre del Autor, Precio y Cantidad de ejemplares disponibles.
- **Edición y eliminación** de libros registrados.
- **Listado de libros** en una tabla con opciones para modificar o eliminar cada registro.
- **Menú de navegación** accesible en todas las vistas con opciones de Inicio, Registrar Libro, Listado de Libros y Contacto.
- **Manejo de sesiones en PHP** para la gestión de los datos de los libros de forma temporal.
- **Sanitización de entradas** para prevenir vulnerabilidades de seguridad.

## Tecnologías Utilizadas

- PHP
- HTML5
- CSS3 (ubicado en la carpeta `assets/`)
- JavaScript (opcional, si se usa para validaciones adicionales)

## Instalación y Configuración

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/Akira22-tem/ATW_Actividad-de-aprendizage-2_Desarrollo-de-un-sistema-web-de-gesti-n-de-libros-y-autores.git
   ```
2. **Configurar el entorno local**
   - Asegurarse de tener instalado un servidor local como [XAMPP](https://www.apachefriends.org/es/index.html) o [WAMP](https://www.wampserver.com/).
   - Colocar la carpeta del proyecto dentro del directorio `htdocs` de XAMPP o el equivalente en WAMP.
   - Iniciar Apache y MySQL desde el panel de control del servidor local.
3. **Acceder al sistema**
   - Abrir un navegador web y acceder a `http://localhost/gestion-libros/`

## Estructura del Proyecto

```
/gestion_libros
│── /assets
│   ├── styles.css
│── /controllers
│   ├── librosController.php
│── /models
│   ├── Libro.php
│── /views
│   ├── contacto.php
│   ├── editar.php
│   ├── footer.php
│   ├── header.php
│   ├── index.php
│   ├── listado.php
│   ├── registrar.php
│── .htaccess
│── index.php
│── router.php
│── README.md
```

## Uso del Sistema

### Registro de Libros

1. Ingresar a la sección "Registrar Libro".
2. Completar los campos del formulario:
   - Título del libro (obligatorio)
   - Nombre del autor (obligatorio)
   - Precio (número positivo obligatorio)
   - Cantidad disponible (número positivo obligatorio)
3. Hacer clic en "Registrar".
4. Si hay errores en la validación, el sistema mostrará mensajes de advertencia.

### Edición y Eliminación de Libros

- En la sección "Listado de Libros", cada libro registrado tiene opciones para **editar** o **eliminar**.
- Al editar, se mostrará un formulario con los datos actuales que pueden ser modificados.
- La eliminación se realiza mediante un botón que borrará permanentemente el registro.

### Seguridad y Buenas Prácticas

- Se usa `htmlspecialchars()` para prevenir ataques de inyección de código.
- Validación de formularios en PHP para evitar envíos incorrectos de datos.
- Uso de sesiones para manejar la persistencia de datos temporalmente.

## Contribución

Si deseas contribuir al proyecto:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -m 'Agregada nueva funcionalidad'`).
4. Sube los cambios (`git push origin nueva-funcionalidad`).
5. Abre un pull request para revisar los cambios.

## Autor

- **Kevin Yugla** - NRC: 1382 - Aplicación Tecnologías Web

## Licencia

Este proyecto está bajo la licencia MIT - consulta el archivo LICENSE para más detalles.

