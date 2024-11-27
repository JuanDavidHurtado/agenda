// Función para filtrar la tabla
document.getElementById("searchInput").addEventListener("keyup", function() {
    var filter = this.value.toLowerCase();
    var rows = document.querySelectorAll("#contactsTable tbody tr");

    rows.forEach(function(row) {
        var cells = row.getElementsByTagName("td");
        var match = false;

        // Iterar sobre todas las celdas de la fila para ver si alguna coincide con la búsqueda
        for (var i = 0; i < cells.length; i++) {
            var cell = cells[i];
            if (cell.textContent.toLowerCase().indexOf(filter) > -1) {
                match = true;
                break; // Si encuentra una coincidencia, no es necesario seguir buscando en la fila
            }
        }

        // Mostrar u ocultar la fila según si hubo coincidencia
        if (match) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});