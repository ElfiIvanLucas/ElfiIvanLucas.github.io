//Toggle class active untuk menu

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

// Toggle class active untuk search form

const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-button").addEventListener("click", (e) => {
    e.preventDefault();
    searchForm.classList.toggle("active");
    searchBox.focus();
});

// klik di luar elemen


document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
    }

    if (!searchForm.contains(e.target) && !document.querySelector("#search-button").contains(e.target)) {
        searchForm.classList.remove("active");
    }
});