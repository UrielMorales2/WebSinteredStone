let slideIndex = 1;
showSlide(slideIndex);

function moveSlide(n) {
    showSlide(slideIndex += n);
}

function showSlide(n) {
    let slides = document.getElementsByClassName("slide");
    
    if (n > slides.length) {
        slideIndex = 1;
    }
    
    if (n < 1) {
        slideIndex = slides.length;
    }
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    slides[slideIndex - 1].style.display = "block";
}

// Función para cambiar de diapositiva automáticamente cada 3 segundos
function autoSlide() {
    moveSlide(1);
    setTimeout(autoSlide, 3000); // Cambia cada 3 segundos (3000 milisegundos)
}

// Inicia el cambio automático de diapositivas
autoSlide();