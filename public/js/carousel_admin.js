let slideIndex = 1;  // El índice de la diapositiva actual
showSlides(slideIndex);  // Mostrar la diapositiva inicial

// Función para mover las diapositivas hacia la izquierda o derecha
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Función para mostrar la diapositiva actual
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Función que maneja la lógica para mostrar las diapositivas
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("carousel-item");  // Seleccionar todas las diapositivas
  let dots = document.getElementsByClassName("dot");  // Seleccionar todos los puntos de navegación

  // Si el índice es mayor que el número de diapositivas, vuelve al principio
  if (n > slides.length) { slideIndex = 1; }    
  // Si el índice es menor que 1, va a la última diapositiva
  if (n < 1) { slideIndex = slides.length; }

  // Ocultar todas las diapositivas
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  // Eliminar la clase "active" de todos los puntos
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Mostrar la diapositiva correspondiente
  slides[slideIndex - 1].style.display = "block";  
  dots[slideIndex - 1].className += " active";  // Activar el punto correspondiente
}

// Funciones para mover las diapositivas hacia la izquierda y hacia la derecha
function scrollLeft() {
  plusSlides(-1);  // Mueve hacia la izquierda
}

function scrollRight() {
  plusSlides(1);  // Mueve hacia la derecha
}
