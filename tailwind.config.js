/** @type {import('tailwindcss').Config} */
const { addDynamicIconSelectors } = require('@iconify/tailwind');
module.exports = {
  content: ["./templates/**/*.html", "./src/main.ts"],
  theme: {
    extend: {
      colors: {
        // 基础色板 - 品牌标识色系
        primary: {
          DEFAULT: 'var(--primary)',
          hover: 'var(--primary-hover)',
          active: 'var(--primary-active)'
        },
        secondary: {
          DEFAULT: 'var(--secondary)',
          hover: 'var(--secondary-hover)',
          active: 'var(--secondary-active)'
        },
        accent: {
          DEFAULT: 'var(--accent)',
          hover: 'var(--accent-hover)',
          active: 'var(--accent-active)'
        },
        // 中性色系
        neutral: {
          DEFAULT: 'var(--neutral)',
          hover: 'var(--neutral-hover)',
          active: 'var(--neutral-active)'
        },
        // 基础背景色系
        base: {
          100: 'var(--base-100)',
          200: 'var(--base-200)',
          300: 'var(--base-300)',
          content: 'var(--base-content)'
        },
        // 功能色系
        info: {
          DEFAULT: 'var(--info)',
          content: 'var(--info-content)'
        },
        success: {
          DEFAULT: 'var(--success)',
          content: 'var(--success-content)'
        },
        warning: {
          DEFAULT: 'var(--warning)',
          content: 'var(--warning-content)'
        },
        error: {
          DEFAULT: 'var(--error)',
          content: 'var(--error-content)'
        },
        // 文本色系
        text: {
          base: 'var(--text-base)',
          muted: 'var(--text-muted)',
          disabled: 'var(--text-disabled)',
          placeholder: 'var(--text-placeholder)'
        },
        // 边框色系
        border: {
          base: 'var(--border-base)',
          light: 'var(--border-light)'
        },
        // 阴影色系
        shadow: {
          sm: 'var(--shadow-sm)',
          md: 'var(--shadow-md)',
          lg: 'var(--shadow-lg)'
        },
        // 滚动条样式
        scrollbar: {
          track: 'var(--scrollbar-track)',
          thumb: 'var(--scrollbar-thumb)',
          'thumb-hover': 'var(--scrollbar-thumb-hover)'
        }
      }
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    addDynamicIconSelectors(),
  ],
  darkMode: 'selector',
  safelist: [
    "prose-sm",
    "prose-base",
    "prose-lg",
    "prose-xl",
    "prose-2xl",
    "prose-gray",
    "prose-slate",
    "prose-zinc",
    "prose-neutral",
    "prose-stone",
  ],
};
