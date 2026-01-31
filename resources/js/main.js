// assets/js/main.js

// 1. Configure Tailwind with Custom Animations
tailwind.config = {
    theme: {
        extend: {
            colors: {
                saffron: {
                    100: "#FFF5E1",
                    500: "#FF9933",
                    600: "#E67E22",
                    900: "#8E44AD",
                },
                stone: { 50: "#FAFAF9", 800: "#292524" },
                gold: "#D4AF37",
            },
            fontFamily: {
                // sans: ['inter', 'sans-serif'],
                // serif: ['Playfair Display', 'serif'],
                // georgia: ['Georgia', 'serif'], // Added Georgia font
                cinzel: ["Cinzel", "serif"],
                googleSans: ["Google Sans Flex", "sans-serif"], // Added Google Sans font
            },
            // UPDATED ANIMATION LOGIC
            animation: {
                marquee: "marquee 40s linear infinite",
            },
            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(-50%)" }, // Start halfway (showing the second copy)
                    "100%": { transform: "translateX(0%)" }, // Slide right to the start
                },
            },
        },
    },
};

// 2. Scroll Reveal Logic (The "Magic" Script)
document.addEventListener("DOMContentLoaded", () => {
    // Select all elements with class 'reveal'
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1, // Trigger when 10% of element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    document.querySelectorAll(".reveal").forEach((el) => {
        observer.observe(el);
    });

    //     // 2. Mobile Menu Toggle Logic (Vanilla JS fallback if Alpine acts up)
    // document.addEventListener('DOMContentLoaded', () => {
    //     // Shared logic can go here
});

// Countdown Timer Logic
const openingDay = new Date("2026-06-01T00:00:00+05:30").getTime();

document.addEventListener("DOMContentLoaded", () => {
    // countdown code here

    const daysEl = document.getElementById("days");
    const hoursEl = document.getElementById("hours");
    const minutesEl = document.getElementById("minutes");
    const secondsEl = document.getElementById("seconds");

    // If any required element is missing, do nothing
    if (!daysEl || !hoursEl || !minutesEl || !secondsEl) {
        // Not a countdown page
        return;
    }

    const updateCountdown = setInterval(() => {
        const now = Date.now();
        const distance = openingDay - now;

        if (distance < 0) {
            clearInterval(updateCountdown);
            daysEl.innerHTML = "000";
            hoursEl.innerHTML = "00";
            minutesEl.innerHTML = "00";
            secondsEl.innerHTML = "00";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((distance / (1000 * 60)) % 60);
        const seconds = Math.floor((distance / 1000) % 60);

        daysEl.innerHTML = String(days).padStart(3, "0");
        hoursEl.innerHTML = String(hours).padStart(2, "0");
        minutesEl.innerHTML = String(minutes).padStart(2, "0");
        secondsEl.innerHTML = String(seconds).padStart(2, "0");
    }, 1000);
});
