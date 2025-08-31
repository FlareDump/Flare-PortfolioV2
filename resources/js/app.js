import "./bootstrap";

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        // Find which direction class is present
        const directions = [
            "left",
            "right",
            "top",
            "bottom",
            "bottom-long",
            "top-long",
        ];
        let found = false;
        for (const dir of directions) {
            if (entry.target.classList.contains(`hide-${dir}`)) {
                if (entry.isIntersecting) {
                    if (dir === "top-long") {
                        // Delay before showing
                        setTimeout(() => {
                            entry.target.classList.add(`show-${dir}`);
                        }, 1000); // 1s delay
                    } else {
                        entry.target.classList.add(`show-${dir}`);
                    }
                } else {
                    entry.target.classList.remove(`show-${dir}`);
                }
                found = true;
                break;
            }
        }
        // Fallback for generic .hide/.show
        if (!found) {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                entry.target.classList.remove("show");
            }
        }
    });
});

const hiddenElements = document.querySelectorAll(
    ".hide, .hide-left, .hide-right, .hide-top, .hide-bottom, .hide-bottom-long, .hide-top-long",
);
hiddenElements.forEach((el) => observer.observe(el));
