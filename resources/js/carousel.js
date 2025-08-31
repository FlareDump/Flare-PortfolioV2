document.addEventListener("DOMContentLoaded", function () {
    const images = window.profileImages || [];
    let current = 0;
    const img = document.getElementById("carousel-image");
    if (!img || images.length === 0) return;
    setInterval(function () {
        current = (current + 1) % images.length;
        img.src = "/" + images[current];
    }, 2500);
});
