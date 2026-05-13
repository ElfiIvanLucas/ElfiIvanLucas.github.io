//Toggle class active untuk menu

const navbar = document.querySelector(".navbar");
const menu = document.querySelector("#menu");
const ctgMenu = document.querySelector("#ctg-menu");
const ctgModal = document.querySelector("#ctg-modal");
const ctgModalClose = document.querySelector("#ctg-modal-close");

// ketika menu di klik

menu.onclick = () => {
    navbar.classList.toggle("active");
}

if (ctgMenu && ctgModal) {
    ctgMenu.addEventListener("click", () => {
        ctgModal.classList.add("active");
        ctgModal.setAttribute("aria-hidden", "false");
        ctgMenu.setAttribute("aria-expanded", "true");
    });
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
    const clickedCtgMenu = ctgMenu && ctgMenu.contains(e.target);

    if (!menu.contains(e.target) && !clickedCtgMenu && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
    }

    if (!searchForm.contains(e.target) && !document.querySelector("#search-button").contains(e.target)) {
        searchForm.classList.remove("active");
    }

    if (!shoppingCart.contains(e.target) && !shoppingCartButton.contains(e.target)) {
        shoppingCart.classList.remove("active");
    }
});

if (ctgModal && ctgModalClose) {
    ctgModalClose.addEventListener("click", () => {
        ctgModal.classList.remove("active");
        ctgModal.setAttribute("aria-hidden", "true");
        if (ctgMenu) {
            ctgMenu.setAttribute("aria-expanded", "false");
        }
    });

    ctgModal.addEventListener("click", (event) => {
        if (event.target === ctgModal) {
            ctgModal.classList.remove("active");
            ctgModal.setAttribute("aria-hidden", "true");
            if (ctgMenu) {
                ctgMenu.setAttribute("aria-expanded", "false");
            }
        }
    });
}

// modal box
const itemDetailModal = document.querySelector("#item-detail-modal");
const itemDetailButton = document.querySelectorAll(".item-detail-button");

if (itemDetailModal) {
    itemDetailButton.forEach((button) => {
        button.onclick = (event) => {
            itemDetailModal.style.display = "flex";
            event.preventDefault();
        };
    });

    // klik tombol close modal
    const itemDetailCloseButton = document.querySelector(".modal .close-icon");

    if (itemDetailCloseButton) {
        itemDetailCloseButton.onclick = (event) => {
            itemDetailModal.style.display = "none";
            event.preventDefault();
        };
    }

    // klik di luar modal
    window.onclick = (event) => {
        if (event.target === itemDetailModal) {
            itemDetailModal.style.display = "none";
        }
    }
}
