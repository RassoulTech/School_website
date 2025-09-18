document.addEventListener("DOMContentLoaded", () => {

        // Scroll reveal pour fade-in
        const reveals = document.querySelectorAll(".reveal");
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    entry.target.classList.remove("opacity-0", "translate-y-10");
                }
            });
        }, { threshold: 0.2 });

        reveals.forEach(r => {
            r.classList.add("opacity-0", "translate-y-10", "transition-all", "duration-1000");
            observer.observe(r);
        });

        // FAQ accordéon
        const toggles = document.querySelectorAll(".faq-toggle");
        toggles.forEach(toggle => {
            toggle.addEventListener("click", () => {
                const answer = toggle.nextElementSibling;
                const icon = toggle.querySelector("i");

                if (answer.classList.contains("open")) {
                    answer.style.maxHeight = null;
                    answer.classList.remove("open");
                    icon.classList.remove("rotate-180");
                } else {
                    // fermer tous les autres
                    document.querySelectorAll(".faq-answer.open").forEach(openAnswer => {
                        openAnswer.style.maxHeight = null;
                        openAnswer.classList.remove("open");
                        openAnswer.previousElementSibling.querySelector("i").classList.remove("rotate-180");
                    });

                    answer.style.maxHeight = answer.scrollHeight + "px";
                    answer.classList.add("open");
                    icon.classList.add("rotate-180");
                }
            });
        });

    });