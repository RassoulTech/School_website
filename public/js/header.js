document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menu-toggle");
    const menuLink = document.getElementById("menu-link");
    const dropdownToggle = document.getElementById("dropdown-toggle");
    const dropdownMenu = document.getElementById("dropdown-menu");
    const dropdownIcon = document.getElementById("dropdown-icon");

    // Toggle menu mobile
    menuToggle.addEventListener("click", () => {
        menuLink.classList.toggle("hidden");
    });

    // Dropdown mobile
    dropdownToggle.addEventListener("click", (e) => {
        if (window.innerWidth < 768) { // seulement en mobile
            e.preventDefault();
            dropdownMenu.classList.toggle("hidden");
            dropdownIcon.classList.toggle("rotate-180");
        }
    });
});