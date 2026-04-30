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

// Toggle class active untuk shopping cart

const shoppingCart = document.querySelector(".shopping-cart");
const shoppingCartButton = document.querySelector("#shopping-cart-button");

shoppingCartButton.onclick = (event) => {
    shoppingCart.classList.toggle("active");
    event.preventDefault();
}

// klik di luar elemen


document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
    }

    if (!searchForm.contains(e.target) && !document.querySelector("#search-button").contains(e.target)) {
        searchForm.classList.remove("active");
    }

    if (!shoppingCart.contains(e.target) && !shoppingCartButton.contains(e.target)) {
        shoppingCart.classList.remove("active");
    }
});

// modal box
const itemDetailModal = document.querySelector("#item-detail-modal");
const itemDetailButton = document.querySelector(".item-detail-button");

itemDetailButton.onclick = (event) => {
    itemDetailModal.style.display = "flex";
    event.preventDefault();
}

