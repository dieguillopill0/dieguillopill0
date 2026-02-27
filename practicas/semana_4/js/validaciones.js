document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.getElementById('formEmpleado');
    const nombreInput = document.getElementById('nombre');

    formulario.addEventListener('submit', function(event) {
        mensajeError.textContent = ''; // Limpiar mensaje de error

        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const edad = document.getElementById('edad').value.trim();
        const fecha = document.getElementById('fecha').value.trim();

        if (nombre === '' || correo === '' || edad === '' || fecha === '') {
            mensajeError.textContent = 'Todos los campos son obligatorios.';
            event.preventDefault();
        } else if (correo === '') {
            mensajeError.textContent = 'El correo es obligatorio.';
            event.preventDefault();
        } else if (edad === '' || isNaN(edad) || parseInt(edad) <= 0) {
            mensajeError.textContent = 'La edad debe ser un número positivo.';
            event.preventDefault();
        } else if (fecha === '') {
            mensajeError.textContent = 'La fecha de ingreso es obligatoria.';
            event.preventDefault();
        }
    });
});