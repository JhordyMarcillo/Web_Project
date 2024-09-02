function validateForm() {
    // Obtener los valores de los campos
    const dni = document.getElementById('DNIAdmin').value;
    const name = document.getElementById('NameAdmin').value;
    const lastName = document.getElementById('LastNameAdmin').value;
    const phone = document.getElementById('phoneAdmin').value;
    const email = document.getElementById('emailAdmin').value;
    const address = document.getElementById('addressAdmin').value;
    const date = document.getElementById('dateAdmin').value;
    const password = document.getElementById('passwordAdmin').value;
    const userName = document.getElementById('UserNameAdmin').value;
    const roles = document.querySelectorAll('input[name="roles[]"]:checked');

    // Validar campos vacíos
    if (!dni || !name || !lastName || !phone || !email || !address || !date || !password || !userName) {
        alert('Todos los campos deben ser completados.');
        return false;
    }

    // Validar cédula (10 dígitos numéricos)
    const dniPattern = /^\d{10}$/;
    if (!dniPattern.test(dni)) {
        alert('La cédula debe tener exactamente 10 dígitos numéricos.');
        return false;
    }

    // Validar nombre (solo letras y espacios)
    const namePattern = /^[A-Za-záéíóúÁÉÍÓÚ ]+$/;
    if (!namePattern.test(name)) {
        alert('El nombre solo debe contener letras y espacios.');
        return false;
    }

    // Validar apellido (solo letras y espacios)
    if (!namePattern.test(lastName)) {
        alert('El apellido solo debe contener letras y espacios.');
        return false;
    }

    // Validar teléfono (7 a 10 dígitos numéricos)
    const phonePattern = /^\d{7,10}$/;
    if (!phonePattern.test(phone)) {
        alert('El teléfono debe tener entre 7 y 10 dígitos numéricos.');
        return false;
    }

    // Validar correo electrónico
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('El correo electrónico no es válido.');
        return false;
    }

    // Validar fecha de nacimiento (no puede ser una fecha futura)
    const today = new Date();
    const birthDate = new Date(date);
    if (birthDate > today) {
        alert('La fecha de nacimiento no puede ser una fecha futura.');
        return false;
    }

    // Validar contraseña (si es necesario agregar una validación)
    if (password.length < 6) {
        alert('La contraseña debe tener al menos 6 caracteres.');
        return false;
    }

    // Validar campo de usuario (debe contener caracteres alfanuméricos)
    const userNamePattern = /^[A-Za-z0-9]+$/;
    if (!userNamePattern.test(userName)) {
        alert('El nombre de usuario solo debe contener caracteres alfanuméricos.');
        return false;
    }

    // Validar que al menos un rol esté seleccionado
    if (roles.length === 0) {
        alert('Debe seleccionar al menos un rol.');
        return false;
    }

    return true; // Si todas las validaciones pasan
}