const contenedorLibros  = document.querySelector('.contenedor-libros');
const librosInternos  = document.querySelector('.libros');
const libros  = document.querySelectorAll('.libro');
let cantidadDesplazamiento  = 0;


function moverLibros(direccion) {
    const anchoContenedor = contenedorLibros.offsetWidth;

    let desplazamiento = 515; // Valor por defecto para escritorio del desplazamiento a la derecha en píxeles
    let numLibrosAMostrar = 3; // Número de libros a mostrar en escritorio

    if (window.innerWidth >= 450 && window.innerWidth < 769) {
        // Tableta: Ajusta el desplazamiento para tabletas
        desplazamiento = anchoContenedor / libros.length; // Divide el ancho del contenedor por 2
        numLibrosAMostrar = 2; // Número de libros a mostrar en tabletas
    } else if (window.innerWidth < 500) {
        // Móvil: Ajusta el desplazamiento para móviles
        desplazamiento = anchoContenedor / libros.length ; // Usa el ancho del contenedor como desplazamiento
        numLibrosAMostrar = 1; // Número de libros a mostrar en móviles
    }

    // Calcula la cantidad máxima de desplazamiento basada en el número de libros a mostrar
    const maximoDesplazamiento = (libros.length - numLibrosAMostrar) * desplazamiento;

    if (direccion === 'izquierda') {
        cantidadDesplazamiento -= desplazamiento;
    } else {
        cantidadDesplazamiento += desplazamiento;
    }

    if (cantidadDesplazamiento < 0) {
        cantidadDesplazamiento = 0;
    } else if (cantidadDesplazamiento > maximoDesplazamiento) {
        cantidadDesplazamiento = maximoDesplazamiento;
    }

    librosInternos.style.transition = 'transform 1.5s ease';
    librosInternos.style.transform = `translateX(-${cantidadDesplazamiento}px)`;
}
