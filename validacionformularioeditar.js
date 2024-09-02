// JavaScript Document

    // Función para validar el formulario
    function validarFormulario() {
        let nombre = document.getElementById("nombre").value.trim();
        let descripcion = document.getElementById("descripcion").value.trim();
        let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        let error = false;

        // Validar campo de nombre (solo letras y espacios)
        if (!/^[a-zA-Z\s]+$/.test(nombre)) {
            alert("El nombre solo debe contener letras.");
            error = true;
        }

        // Validar campo de descripción (no vacío)
        if (descripcion === "") {
            alert("La descripción no puede estar vacía.");
            error = true;
        }

        // Validar que al menos un checkbox esté seleccionado
        if (checkboxes.length === 0) {
            document.getElementById("checkboxError").innerText = "Debe seleccionar al menos un acceso.";
            error = true;
        } else {
            document.getElementById("checkboxError").innerText = "";
        }

        // Si hay errores, evitar el envío del formulario
        if (error) {
            return false;
        }

        return true;
    }
