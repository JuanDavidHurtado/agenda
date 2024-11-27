<?php ob_start(); ?>
<h2>Editar Contacto</h2>
<form id="contactForm" action="index.php?action=edit&id=<?= $_GET['id']; ?>" method="POST">
    <label for="conNombre">Nombre:</label>
    <input type="text" id="conNombre" name="conNombre" value="<?= htmlspecialchars($contact['conNombre']); ?>" autocomplete="off" placeholder="Nombre">
    <span id="nombreError">El nombre es obligatorio.</span>

    <label for="conApellido">Apellido:</label>
    <input type="text" id="conApellido" name="conApellido" value="<?= htmlspecialchars($contact['conApellido']); ?>" autocomplete="off" placeholder="Apellido">
    <span id="apellidoError">El apellido es obligatorio.</span>

    <label for="conTelefono">Teléfono:</label>
    <input type="text" id="conTelefono" name="conTelefono" value="<?= htmlspecialchars($contact['conTelefono']); ?>" autocomplete="off" placeholder="Teléfono">
    <span id="telefonoError">El teléfono debe ser numérico.</span>

    <label for="conDireccion">Dirección:</label>
    <input type="text" id="conDireccion" name="conDireccion" value="<?= htmlspecialchars($contact['conDireccion']); ?>" autocomplete="off" placeholder="Dirección">
    <span id="direccionError">La dirección es obligatoria.</span>

    <label for="conCorreo">Correo:</label>
    <input type="text" id="conCorreo" name="conCorreo" value="<?= htmlspecialchars($contact['conCorreo']); ?>" autocomplete="off" placeholder="Correo">
    <span id="correoError">El correo no es válido.</span>

    <button type="submit">Actualizar</button>
</form>

<script src="public/js/script.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require "views/layout.php"; ?>
