import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",

                "resources/assets/css/styles2f54.css",
                "resources/assets/css/settingsab53.css",
                "resources/assets/css/isotope8f76.css",
                "resources/assets/css/prettyPhoto8f76.css",
                "resources/assets/css/js_composer8f76.css",
                "resources/assets/css/custom8f76.css",
                "resources/assets/css/royalslider.css",
                "resources/assets/css/slickcfbc.css",
                "resources/assets/css/fontellocfbc.css",
                "resources/assets/css/ac-framework.css",
                "resources/assets/css/ac-vc-plugins.css",
                "resources/assets/css/theme-scipts.css",
                "resources/assets/css/app.css",
                "resources/assets/css/alleycat.css",
                "resources/assets/css/style.css",
            ],
            refresh: true,
        }),
    ],
});
