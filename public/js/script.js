document.getElementById('contactForm').addEventListener('submit', function(event) {
    let valid = true;

    // Validación de nombre
    const nombre = document.getElementById('conNombre');
    const nombreError = document.getElementById('nombreError');
    nombre.addEventListener('input', function() {
        if (nombre.value.trim() !== "") {
            nombreError.style.display = 'none';
        }
    });
    if (nombre.value.trim() === "") {
        nombreError.style.display = 'inline';
        valid = false;
    } else {
        nombreError.style.display = 'none';
    }

    // Validación de apellido
    const apellido = document.getElementById('conApellido');
    const apellidoError = document.getElementById('apellidoError');
    apellido.addEventListener('input', function() {
        if (apellido.value.trim() !== "") {
            apellidoError.style.display = 'none';
        }
    });
    if (apellido.value.trim() === "") {
        apellidoError.style.display = 'inline';
        valid = false;
    } else {
        apellidoError.style.display = 'none';
    }

    // Validación de teléfono (solo números)
    const telefono = document.getElementById('conTelefono');
    const telefonoError = document.getElementById('telefonoError');
    telefono.addEventListener('input', function() {
        if (/^[0-9]+$/.test(telefono.value.trim())) {
            telefonoError.style.display = 'none';
        }
    });
    const telefonoRegex = /^[0-9]+$/;
    if (!telefonoRegex.test(telefono.value.trim())) {
        telefonoError.style.display = 'inline';
        valid = false;
    } else {
        telefonoError.style.display = 'none';
    }

    // Validación de dirección
    const direccion = document.getElementById('conDireccion');
    const direccionError = document.getElementById('direccionError');
    direccion.addEventListener('input', function() {
        if (direccion.value.trim() !== "") {
            direccionError.style.display = 'none';
        }
    });
    if (direccion.value.trim() === "") {
        direccionError.style.display = 'inline';
        valid = false;
    } else {
        direccionError.style.display = 'none';
    }

    // Validación de correo (formato)
    const correo = document.getElementById('conCorreo');
    const correoError = document.getElementById('correoError');
    correo.addEventListener('input', function() {
        if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(correo.value.trim())) {
            correoError.style.display = 'none';
        }
    });
    const correoRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!correoRegex.test(correo.value.trim())) {
        correoError.style.display = 'inline';
        valid = false;
    } else {
        correoError.style.display = 'none';
    }

    if (!valid) {
        event.preventDefault();
    }
});
