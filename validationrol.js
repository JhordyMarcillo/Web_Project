// validation.js

function validateForm() {
    // Obtener los valores de los campos
    const idPerfil = document.getElementById('DNIProvider').value.trim();
    const name = document.getElementById('NameProvider').value.trim();
    const descripcion = document.getElementById('descripcion').value.trim();
    const accesos = document.querySelectorAll('input[name="accesos[]"]:checked');

    // Validar ID PERFIL (debe ser un número positivo y no vacío)
    const idPerfilPattern = /^\d+$/;
    if (!idPerfil || !idPerfilPattern.test(idPerfil)) {
        alert('El ID PERFIL debe ser un número positivo y no puede estar vacío.');
        return false;
    }

    // Validar Nombre (solo letras, no puede estar vacío)
    const namePattern = /^[A-Za-z]+$/;
    if (!name || !namePattern.test(name)) {
        alert('El nombre solo debe contener letras y no puede estar vacío.');
        return false;
    }

    // Validar Descripción (no puede estar vacío)
    if (!descripcion) {
        alert('La descripción no puede estar vacía.');
        return false;
    }

    // Validar que al menos un checkbox de accesos esté seleccionado
    if (accesos.length === 0) {
        document.getElementById('checkboxError').innerText = 'Debe seleccionar al menos un acceso.';
        return false;
    }

    // Si todas las validaciones pasan
    return true;
}