document.addEventListener('DOMContentLoaded', function() {
    // Agrega el evento al botón de eliminar
    document.getElementById('eliminarRegistrosBtn').addEventListener('click', function() {
        // Confirmar si realmente se desea eliminar los registros
        if (confirm("¿Estás seguro de que deseas eliminar los registros de m3it3m?")) {
            // Realizar la solicitud AJAX al script PHP para ejecutar la eliminación
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'eliminar_registros.php', true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert(xhr.responseText); // Muestra la respuesta del servidor (éxito o error)
                } else {
                    alert('Error al intentar eliminar registros');
                }
            };

            xhr.send();
        }
    });
});
