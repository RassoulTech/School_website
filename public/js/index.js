const reveals = document.querySelectorAll('.reveal');
    window.addEventListener('scroll', () => {
        for (let r of reveals) {
            const top = r.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (top < windowHeight - 100) r.classList.add('active');
        }
    });

    // Slogan fade in
    window.addEventListener('load', () => {
        setTimeout(() => {
            document.getElementById('slogan').classList.add('opacity-100');
        }, 500);
    });