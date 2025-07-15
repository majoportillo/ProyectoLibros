const slider = document.getElementById('slider');
const btnRight = document.getElementById('btn-right');
const btnLeft = document.getElementById('btn-left');
const totalSlides = 6; // 5 imágenes + 1 clonada
let index = 0;
let width = window.innerWidth;

function updateSlider() {
  slider.style.transition = "transform 0.5s ease-in-out";
  slider.style.transform = `translateX(-${index * width}px)`;
}

function moveNext() {
  index++;
  updateSlider();

  if (index === totalSlides - 1) {
    setTimeout(() => {
      slider.style.transition = "none";
      index = 0;
      slider.style.transform = `translateX(0px)`;
    }, 500);
  }
}

function movePrev() {
  if (index === 0) {
    slider.style.transition = "none";
    index = totalSlides - 2;
    slider.style.transform = `translateX(-${index * width}px)`;
  } else {
    index--;
    updateSlider();
  }
}

btnRight.addEventListener('click', moveNext);
btnLeft.addEventListener('click', movePrev);

// Cambio automático cada 5 segundos
setInterval(moveNext, 5000);

// Adaptar a cambios de tamaño de pantalla
window.addEventListener("resize", () => {
  width = window.innerWidth;
  slider.style.transition = "none";
  slider.style.transform = `translateX(-${index * width}px)`;
});

