import "./bootstrap";

import "flowbite";
// import datepicker from flowbite
import "flowbite/dist/datepicker.js";
import Alpine from "alpinejs";
import focus from "@alpinejs/focus";

Alpine.plugin(focus);

window.Alpine = Alpine;

Alpine.start();

window.addEventListener(
    "mls:scroll-to",
    (ev) => {
        ev.stopPropagation();
        const selector = ev?.detail?.query;

        if (!selector) {
            return;
        }

        const el = window.document.querySelector(selector);

        if (!el) {
            return;
        }

        try {
            el.scrollIntoView({
                behavior: "smooth",
            });
        } catch {}
    },
    false
);
