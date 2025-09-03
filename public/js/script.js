document.addEventListener("DOMContentLoaded", function() {

    // Navbar logo swap on scroll
    document.addEventListener("scroll", function() {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            document.querySelector(".logo-dark").classList.remove("d-none");
            document.querySelector(".logo-light").classList.add("d-none");
        } else {
            navbar.classList.remove("scrolled");
            document.querySelector(".logo-dark").classList.add("d-none");
            document.querySelector(".logo-light").classList.remove("d-none");
        }
    });

    // Navbar color change on scroll
    window.addEventListener("scroll", function() {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "navbar-light");
            navbar.classList.remove("bg-transparent", "navbar-dark");
        } else {
            navbar.classList.remove("bg-white", "navbar-light");
            navbar.classList.add("bg-transparent", "navbar-dark");
        }
    });

    // Brand counters
    const brandCounters = document.querySelectorAll('.brand-counter');
    const brandSpeed = 150;

    const runBrandCounters = () => {
        brandCounters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = Math.ceil(target / brandSpeed);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 30);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    let brandStarted = false;
    window.addEventListener('scroll', () => {
        const section = document.querySelector('.brand-section');
        if (section) {
            const sectionTop = section.offsetTop - window.innerHeight + 100;
            if (!brandStarted && window.scrollY > sectionTop) {
                runBrandCounters();
                brandStarted = true;
            }
        }
    });

    // Testimonials auto-slide
    let currentIndex = 0;
    const testimonials = document.querySelectorAll(".testimonial");
    const dots = document.querySelectorAll(".dot");

    function showSlide(index) {
        testimonials.forEach((t, i) => {
            t.classList.remove("active");
            dots[i].classList.remove("active");
        });
        testimonials[index].classList.add("active");
        dots[index].classList.add("active");
        currentIndex = index;
    }

    function autoSlide() {
        currentIndex++;
        if (currentIndex >= testimonials.length) currentIndex = 0;
        showSlide(currentIndex);
    }

    if (testimonials.length) {
        setInterval(autoSlide, 4000);
    }

    // Stats counters
    const counters = document.querySelectorAll(".counter");

    function formatNumber(num) {
        if (num >= 1000000) return (num / 1000000).toFixed(0) + "M";
        if (num >= 1000) return (num / 1000).toFixed(0) + "K";
        return num;
    }

    function animateCounters() {
        counters.forEach(counter => {
            const target = +counter.getAttribute("data-target");
            let count = 0;
            const increment = target / 200;

            const updateCounter = () => {
                count += increment;
                if (count < target) {
                    counter.innerText = formatNumber(Math.floor(count));
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = formatNumber(target);
                }
            };

            updateCounter();
        });
    }

    const statsSection = document.querySelector("#stats");
    if (statsSection) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(statsSection);
    }

});
