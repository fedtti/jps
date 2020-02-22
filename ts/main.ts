const toggler = document.getElementById("toggler");
const pages = document.getElementById("pages");

/**
 *
 */
const togglePages = () => {
  if (pages.getAttribute("aria-expanded") === "false") {
    pages.setAttribute("aria-expanded", "true");
  } else {
    pages.setAttribute("aria-expanded", "false");
  }
};

toggler.addEventListener("click", togglePages);
