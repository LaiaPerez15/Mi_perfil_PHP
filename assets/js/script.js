// Archivo JS mínimo por si quieres añadir microinteracciones
document.addEventListener('DOMContentLoaded', function () {
    // ejemplo: añadir clase active al nav según la URL
    const links = document.querySelectorAll('nav ul.nav a');
    links.forEach(a => {
        if (window.location.pathname.endsWith(a.getAttribute('href').split('/').pop())) {
            a.classList.add('active');
        }
    });
});
