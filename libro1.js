
document.addEventListener("DOMContentLoaded", () => {
  const btnLeer = document.querySelector(".btn-leer");
  const searchBtn = document.querySelector(".search-btn");
  const searchInput = document.getElementById("searchInput");
  const categoriaLinks = document.querySelectorAll(".dropdown-content a");
  const carrusel = document.querySelector(".carrusel");
  const izquierda = document.querySelector(".flecha.izquierda");
  const derecha = document.querySelector(".flecha.derecha");

  btnLeer.addEventListener("click", () => {
    window.location.href = "leer.html";
  });

  searchBtn.addEventListener("click", () => {
    const termino = searchInput.value.trim();
    if (termino !== "") {
      alert(`Buscando libros relacionados con: ${termino}`);
    } else {
      alert("Por favor ingresa un término de búsqueda.");
    }
  });

  categoriaLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const categoria = link.textContent;
      alert(`Filtrando libros por la categoría: ${categoria}`);
    });
  });

  const scrollAmount = 150;

  derecha.addEventListener("click", () => {
    carrusel.scrollBy({ left: scrollAmount, behavior: "smooth" });
  });

  izquierda.addEventListener("click", () => {
    carrusel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
  });
});
