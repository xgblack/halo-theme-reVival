import "./styles/main.css";
import "./styles/tailwind.css";
import "./styles/revival-theme.css";
import Alpine from "alpinejs";

// 类型声明
declare global {
  interface Window {
    likePost: () => void;
    shareToWeibo: () => void;
    shareToWeixin: () => void;
    shareToQzone: () => void;
    shareToQQ: () => void;
  }
}

interface ThemeData {
  isDark: boolean;
  updateDocumentClass: () => void;
  init: () => void;
  toggle: () => void;
}

window.Alpine = Alpine;

// 分享功能的 JavaScript 实现
window.likePost = function () {
  console.log("点赞功能");
  // 这里可以添加实际的点赞逻辑
};

window.shareToWeibo = function () {
  const url = window.location.href;
  const title = document.title;
  window.open(
    `https://service.weibo.com/share/share.php?url=${encodeURIComponent(url)}&title=${encodeURIComponent(title)}`
  );
};

window.shareToWeixin = function () {
  // 微信分享通常需要二维码
  alert("请扫描二维码分享到微信");
};

window.shareToQzone = function () {
  const url = window.location.href;
  const title = document.title;
  window.open(
    `https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=${encodeURIComponent(
      url
    )}&title=${encodeURIComponent(title)}`
  );
};

window.shareToQQ = function () {
  const url = window.location.href;
  const title = document.title;
  window.open(
    `https://connect.qq.com/widget/shareqq/index.html?url=${encodeURIComponent(url)}&title=${encodeURIComponent(title)}`
  );
};

document.addEventListener("DOMContentLoaded", () => {
  Alpine.data(
    "theme",
    (): ThemeData => ({
      isDark: false,
      updateDocumentClass() {
        if (this.isDark) {
          document.documentElement.classList.add("dark");
        } else {
          document.documentElement.classList.remove("dark");
        }
      },
      init() {
        this.updateDocumentClass();
      },
      toggle() {
        this.isDark = !this.isDark;
        this.updateDocumentClass();
        localStorage.setItem("isDark", this.isDark.toString());
      },
    })
  );
});

Alpine.start();
