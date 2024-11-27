<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Agenda</title>
</head>

<body>
    <header>
        <h1>Agenda de Contactos</h1>
        <nav>
            <a href="index.php?action=list">Inicio</a>
            <a href="index.php?action=create">Nuevo Contacto</a>
        </nav>
    </header>
    <main>
        <?php if (isset($_GET['msg'])): ?>
            <script>
                <?php if ($_GET['msg'] === 'deleted'): ?>
                    alert('Contacto eliminado exitosamente.');
                <?php elseif ($_GET['msg'] === 'created'): ?>
                    alert('Contacto agregado exitosamente.');
                <?php elseif ($_GET['msg'] === 'updated'): ?>
                    alert('Contacto actualizado exitosamente.');
                <?php elseif ($_GET['msg'] === 'error'): ?>
                    alert('Ocurrió un error. Inténtalo nuevamente.');
                <?php endif; ?>
                // Limpia la URL después de mostrar el mensaje
                window.history.replaceState({}, document.title, window.location.pathname);
            </script>
        <?php endif; ?>
        <?= $content; ?>
    </main>
</body>

</html>