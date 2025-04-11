import "./bootstrap";
import "../css/app.css";

import {createRoot} from "react-dom/client";
import {createInertiaApp, router} from "@inertiajs/react";

import {HeroUIProvider} from "@heroui/react";
import {ToastContainer} from "react-toastify";
import "react-toastify/dist/ReactToastify.min.css";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob("./Pages/**/*.jsx")),
  setup({el, App, props}) {
    const root = createRoot(el);
    const navigate = (path) => {
      router.visit(path);
    };

    root.render(
      <HeroUIProvider navigate={navigate} locale="it-IT">
        <App {...props} />
        <ToastContainer
          position="top-center"
          autoClose={4000}
          hideProgressBar={false}
          newestOnTop={false}
          closeOnClick
          rtl={false}
          pauseOnFocusLoss
          draggable
          pauseOnHover
          theme="light"
          transition:Bounce
        />
      </HeroUIProvider>,
    );
  },
  progress: {
    color: "#4B5563",
  },
});
