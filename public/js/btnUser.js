document.addEventListener("DOMContentLoaded", function () {
    const boton = document.querySelector(".btn-outline-primary");

    function ajustarBoton() {
        if (window.innerWidth <= 991) {
            boton.classList.remove("ms-3"); // Se elimina en pantallas pequeñas
        } else {
            boton.classList.add("ms-3"); // Se vuelve a agregar en pantallas grandes
        }
    }

    // Ejecutar al cargar la página
    ajustarBoton();

    // Detectar cambios en el tamaño de la ventana
    window.addEventListener("resize", ajustarBoton);
});
