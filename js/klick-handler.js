/**
 * click-handler.js
 */
document.addEventListener("DOMContentLoaded", () => {
  const overlay = document.getElementById("lightbox-overlay");
  const overlayImg = document.getElementById("lightbox-image");
  let lastFocus = null;

  document.querySelectorAll(".project-card img").forEach((img) => {
    img.style.cursor = "zoom-in";
    img.addEventListener("click", () => {
      lastFocus = document.activeElement;
      overlayImg.src = img.src;
      overlayImg.alt = img.alt || "Enlarged project image";
      overlay.classList.add("active");
      overlay.setAttribute("aria-hidden", "false");
      overlay.focus();
    });
  });

  // schließen-Funktion
  function closeLightbox() {
    // 1) Fokus zurückgeben, bevor wir aria-hidden setzen
    if (lastFocus) lastFocus.focus();

    // 2) Overlay verbergen
    overlay.classList.remove("active");
    overlay.setAttribute("aria-hidden", "true");

    // 3) Bild zurücksetzen
    overlayImg.src = "";
    overlayImg.alt = "";
  }

  overlay.addEventListener("click", closeLightbox);
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && overlay.classList.contains("active")) {
      closeLightbox();
    }
  });
});
