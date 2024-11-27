<?php ob_start(); ?>
<h2>Contactos</h2>

<!-- Campo de búsqueda -->
<div class="search-container">
    <input type="text" id="searchInput" placeholder="Buscar...">
</div>

<table id="contactsTable">
    <thead>
        <tr>
            <th>Consecutivo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $consecutivo = 1; 
        while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $consecutivo++; ?></td>
                <td><?= htmlspecialchars($row['conNombre']); ?></td>
                <td><?= htmlspecialchars($row['conApellido']); ?></td>
                <td><?= htmlspecialchars($row['conTelefono']); ?></td>
                <td><?= htmlspecialchars($row['conDireccion']); ?></td>
                <td><?= htmlspecialchars($row['conCorreo']); ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $row['idContacto']; ?>">Editar</a>
                    <a href="index.php?action=delete&id=<?= $row['idContacto']; ?>" onclick="return confirm('¿Estás seguro de eliminar este contacto?');">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


<script src="public/js/search.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require "views/layout.php"; ?>