/**
 * theme-switcher.js
 * -----------------
 * Toggles between light and dark themes with persistence via localStorage,
 * and applies a smooth fade transition using the .fade-mode CSS class.
 * @module theme-switcher
 */

document.addEventListener("DOMContentLoaded", () => {
  // --------------------------------------------------------------------------
  // Element references
  // --------------------------------------------------------------------------
  /** @type {HTMLButtonElement} */
  const btn = document.getElementById("modebtn");
  /** @type {HTMLElement} Root element to which the data-theme attribute is applied */
  const root = document.documentElement;

  // --------------------------------------------------------------------------
  // Initialize theme from localStorage or default to 'dark'
  // --------------------------------------------------------------------------
  const storedTheme = localStorage.getItem("theme");
  if (storedTheme === "light" || storedTheme === "dark") {
    root.setAttribute("data-theme", storedTheme);
  } else {
    root.setAttribute("data-theme", "dark");
  }

  // --------------------------------------------------------------------------
  // Event handler: Toggle theme on button click
  // --------------------------------------------------------------------------
  btn.addEventListener("click", () => {
    // Determine the next theme based on the current setting
    const currentTheme = root.getAttribute("data-theme");
    const nextTheme = currentTheme === "dark" ? "light" : "dark";

    document.body.classList.add("fade-mode");

    setTimeout(() => {
      // Update the data-theme attribute and save preference
      root.setAttribute("data-theme", nextTheme);
      localStorage.setItem("theme", nextTheme);

      setTimeout(() => {
        document.body.classList.remove("fade-mode");
      }, 500);
    }, 100);
  });
});
