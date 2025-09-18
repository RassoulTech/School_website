document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".hidden-anim");
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
            const anim = entry.target.getAttribute("data-anim");
            if (entry.isIntersecting) {
                entry.target.classList.add(...anim.split(" "));
            } else {
                entry.target.classList.remove(...anim.split(" "));
                entry.target.classList.add("hidden-anim");
            }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => observer.observe(el));
        });