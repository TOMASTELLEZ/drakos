document.addEventListener("DOMContentLoaded", () => {
    console.log("Página cargada correctamente");

    const images = document.querySelectorAll(".similar-movies img, .recommendation img");
    images.forEach(img => {
        img.addEventListener("mouseover", () => {
            img.style.transform = "scale(1.1)";
            img.style.transition = "transform 0.3s ease";
        });
        img.addEventListener("mouseout", () => {
            img.style.transform = "scale(1)";
        });
    });
});
