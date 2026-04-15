//Toggle class active

const navbar = document.querySelector(".navbar");
const menu = document.querySelector("#menu");

// ketika menu di klik

menu.onclick = () => {
    navbar.classList.toggle("active");
}

const menuButton = document.getElementById("menu");
const navMenu = document.querySelector(".navbar-nav");

if (menuButton && navMenu) {
    menuButton.addEventListener("click", (event) => {
        event.preventDefault();
        navMenu.classList.toggle("active");
    });
}

// klik di luar sidebar untuk menghilangkan nav

document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
    }
});