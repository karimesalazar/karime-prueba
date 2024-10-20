document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento del botón de desplegable
    var dropdownToggle = document.querySelector('.dropdown-toggle');

    // Obtener el menú desplegable
    var dropdownMenu = document.querySelector('.dropdown-menu');

    // Mostrar u ocultar el menú desplegable cuando se hace clic en el botón de desplegable
    dropdownToggle.addEventListener('click', function() {
        if (dropdownMenu.style.display === "none" || dropdownMenu.style.display === "") {
            dropdownMenu.style.display = "block";
        } else {
            dropdownMenu.style.display = "none";
        }
    });

    // Cerrar el menú desplegable cuando se hace clic fuera de él
    document.addEventListener('click', function(event) {
        var isClickInside = dropdownToggle.contains(event.target) || dropdownMenu.contains(event.target);
        if (!isClickInside) {
            dropdownMenu.style.display = "none";
        }
    });
});