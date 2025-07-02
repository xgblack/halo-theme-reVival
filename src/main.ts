import "./styles/tailwind.css";
import "./styles/main.css";
import Alpine from "alpinejs";

window.Alpine = Alpine;

document.addEventListener("alpine:init", () => {
  Alpine.store("darkMode", {
    isDark:
      localStorage.getItem("darkMode") === "true" ||
      (!("darkMode" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches),

    toggle() {
      this.isDark = !this.isDark;
      localStorage.setItem("darkMode", this.isDark.toString());
      this.updateDocumentClass();
    },

    updateDocumentClass() {
      if (this.isDark) {
        document.documentElement.classList.add("dark");
      } else {
        document.documentElement.classList.remove("dark");
      }
    },

    init() {
      this.updateDocumentClass();

      // 监听系统主题变化
      window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (e) => {
        if (!("darkMode" in localStorage)) {
          this.isDark = e.matches;
          this.updateDocumentClass();
        }
      });
    },
  });
});

Alpine.start();
