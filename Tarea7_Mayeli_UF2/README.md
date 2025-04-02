📌 FUNCIONALIDAD DEL SISTEMA:
    1. Registrar libros:
        Se ingresan título, autor y género en un formulario.
        Se guardan en la base de datos y aparecen en la tabla de libros disponibles.

    2. Solicitar préstamo de un libro
        Formulario con los siguientes campos:
        Nombre del solicitante
        Correo electrónico
        Libro a prestar (un <select> que se llena con los libros disponibles en la base de datos).
        Semanas de préstamo (campo numérico).
        Botón "Prestar" para mover el libro a la tabla de préstamos.

    3. Tabla de libros prestados
        Muestra los datos del préstamo:
        Nombre del solicitante
        Correo
        Libro
        Fecha de devolución estimada (calculada con la cantidad de semanas).
        Botón para devolver el libro a la lista de disponibles.

    4. Eliminar libros disponibles
        Agregar un botón de "Eliminar" en la tabla de libros disponibles para borrarlos de la base de datos.