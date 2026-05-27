// Typing Effect for Hero
document.addEventListener('DOMContentLoaded', () => {
    const typingElement = document.getElementById('typing-text');
    if (typingElement) {
        const roles = [
            'Quality Assurance Engineer',
            'Manual & API Specialist',
            'Automation QA Developer',
            'Performance Tester'
        ];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typeSpeed = 100;

        function type() {
            const currentRole = roles[roleIndex];
            
            if (isDeleting) {
                typingElement.textContent = currentRole.substring(0, charIndex - 1);
                charIndex--;
                typeSpeed = 50; // faster deletion
            } else {
                typingElement.textContent = currentRole.substring(0, charIndex + 1);
                charIndex++;
                typeSpeed = 100; // standard typing
            }

            if (!isDeleting && charIndex === currentRole.length) {
                typeSpeed = 2000; // pause at full word
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                typeSpeed = 500; // pause before next word
            }

            setTimeout(type, typeSpeed);
        }

        type();
    }

    // Scrollspy navigation and back-to-top show/hide
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    const backToTop = document.getElementById('back-to-top');

    function scrollActive() {
        const scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 100;
            const sectionId = current.getAttribute('id');
            const navLink = document.querySelector(`nav a[href*=${sectionId}]`);

            if (navLink) {
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLink.classList.add('text-emerald-400');
                    navLink.classList.remove('text-zinc-400');
                } else {
                    navLink.classList.remove('text-emerald-400');
                    navLink.classList.add('text-zinc-400');
                }
            }
        });

        // Show back to top button
        if (backToTop) {
            if (scrollY >= 560) {
                backToTop.classList.remove('opacity-0', 'pointer-events-none');
                backToTop.classList.add('opacity-100');
            } else {
                backToTop.classList.remove('opacity-100');
                backToTop.classList.add('opacity-0', 'pointer-events-none');
            }
        }
    }

    window.addEventListener('scroll', scrollActive);

    // Initial check
    scrollActive();

    // Initialize AOS (Animate on Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-quad',
            once: true,
            offset: 100
        });
    }
});
