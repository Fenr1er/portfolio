/**
 * click-handler.js
 * ----------------
 * Handles opening/closing of the Lightbox and
 * manages focus and ARIA attributes for accessibility.
 */
document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const overlay = document.getElementById("lightbox-overlay");
  const overlayImg = document.getElementById("lightbox-image");
  let lastFocusedEl = null; // merkt sich das zuletzt fokussierte Element

  /**
   * 1) Klick auf ein Projekt-Bild öffnet die Lightbox
   */
  document.querySelectorAll(".project-card img").forEach((img) => {
    img.style.cursor = "zoom-in";
    img.addEventListener("click", () => {
      // Fokus merken, Bildquelle und Alt-Text übernehmen
      lastFocusedEl = document.activeElement;
      overlayImg.src = img.src;
      overlayImg.alt = img.alt;

      // Overlay sichtbar machen
      overlay.setAttribute("aria-hidden", "false");
      overlay.focus(); // Fokus in den Dialog
    });
  });

  /**
   * 2) Klick irgendwo im Overlay schließt die Lightbox
   */
  overlay.addEventListener("click", () => {
    overlay.setAttribute("aria-hidden", "true");
    overlayImg.src = ""; // Bildquelle löschen
    overlayImg.alt = ""; // Alt löschen

    // Zurückgeben des Fokus ans ursprüngliche Element
    if (lastFocusedEl) lastFocusedEl.focus();
  });

  /**
   * 3) ESC-Taste ebenfalls schließen (Keyboard-Support)
   */
  document.addEventListener("keyup", (e) => {
    if (e.key === "Escape" && overlay.getAttribute("aria-hidden") === "false") {
      overlay.click();
    }
  });
});
