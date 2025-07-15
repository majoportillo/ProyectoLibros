// Carrusel automático con transición suave y bucle
const slider = document.getElementById('slider');
const btnLeft = document.getElementById('btn-left');
const btnRight = document.getElementById('btn-right');

let index = 0;
const slides = slider.children;
const totalSlides = slides.length;
const slideWidth = slides[0].offsetWidth;

// Clonamos el primer slide
const firstClone = slides[0].cloneNode(true);
slider.appendChild(firstClone);

const actualTotal = slider.children.length;
slider.style.transition = 'transform 0.5s ease-in-out';

function moverCarrusel() {
  index++;
  slider.style.transform = `translateX(-${slideWidth * index}px)`;

  if (index === actualTotal - 1) {
    setTimeout(() => {
      slider.style.transition = 'none';
      index = 0;
      slider.style.transform = `translateX(0px)`;
      setTimeout(() => {
        slider.style.transition = 'transform 0.9s ease-in-out';
      }, 50);
    }, 500);
  }
}

btnLeft.addEventListener('click', () => {
  if (index <= 0) return;
  index--;
  slider.style.transform = `translateX(-${slideWidth * index}px)`;
});

btnRight.addEventListener('click', moverCarrusel);

// Reproducción automática cada 2 segundos
setInterval(moverCarrusel, 2000);
