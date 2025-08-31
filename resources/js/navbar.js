document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("navbar-hamburger");
    const navLinks = document.getElementById("navbar-links");
    const closeBtn = document.getElementById("navbar-close");
    if (!hamburger || !navLinks) return;

    hamburger.addEventListener("click", function () {
        navLinks.classList.remove("hidden");
        navLinks.classList.add("flex");
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", function () {
            navLinks.classList.add("hidden");
            navLinks.classList.remove("flex");
        });
    }

    // Optional: Close overlay when a link is clicked (for better UX)
    navLinks.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function () {
            if (window.innerWidth < 640) {
                navLinks.classList.add("hidden");
                navLinks.classList.remove("flex");
            }
        });
    });
    // Section highlight on scroll
    const navLinkMap = {
        hero: document.querySelector('.nav-link[href="#hero"]'),
        about: document.querySelector('.nav-link[href="#about"]'),
        projects: document.querySelector('.nav-link[href="#projects"]'),
        contact: document.querySelector('.nav-link[href="#contact"]'),
    };
    const underlineMap = {
        hero: navLinkMap.hero?.parentElement.querySelector(".nav-underline"),
        about: navLinkMap.about?.parentElement.querySelector(".nav-underline"),
        projects:
            navLinkMap.projects?.parentElement.querySelector(".nav-underline"),
        contact:
            navLinkMap.contact?.parentElement.querySelector(".nav-underline"),
    };
    const sectionIds = Object.keys(navLinkMap);
    const sectionElements = sectionIds.map((id) => document.getElementById(id));

    function onScrollHighlight() {
        // Always clear all highlights first
        sectionIds.forEach((id) => {
            navLinkMap[id]?.classList.remove(
                "text-primary",
                "text-light",
                "font-bold",
            );
            underlineMap[id]?.classList.remove("w-6", "bg-light", "bg-primary");
        });
        // Find the current section using bounding rect
        let found = false;
        for (let i = sectionElements.length - 1; i >= 0; i--) {
            const section = sectionElements[i];
            if (section) {
                const rect = section.getBoundingClientRect();
                // Section is considered active if its top is above the header and its bottom is below the header
                if (rect.top <= 80 && rect.bottom > 80) {
                    navLinkMap[sectionIds[i]]?.classList.add(
                        "text-light",
                        "font-bold",
                    );
                    underlineMap[sectionIds[i]]?.classList.add(
                        "w-6",
                        "bg-light",
                    );
                    found = true;
                    break;
                }
            }
        }
        // If no section found, do not highlight any nav link (default state)
    }
    window.addEventListener("scroll", onScrollHighlight, { passive: true });
    // Also update highlight after clicking a nav link (after scroll)
    document.querySelectorAll(".nav-link").forEach((link) => {
        link.addEventListener("click", () => {
            setTimeout(onScrollHighlight, 400);
        });
    });
    onScrollHighlight();
});
