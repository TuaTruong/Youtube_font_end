document
    .querySelector("i.ti-video-camera")
    .addEventListener("click", function () {
        document
            .querySelector(".ti-video-camera-dropdown")
            .classList.toggle("hidden");
    });

document.querySelector("i.ti-menu").addEventListener("click", function () {
    document.querySelector("div.sidebar-wrapper").classList.toggle("hidden");

    document.querySelector("div.mini-sidebar").classList.toggle("hidden");

    document
        .querySelector("div.content-wrapper")
        .classList.toggle("ml-[250px]");
    document
        .querySelector("div.content-wrapper")
        .classList.toggle("w-[calc(100%-250px)]");

    document.querySelector("div.content-wrapper").classList.toggle("ml-[80px]");
    document
        .querySelector("div.content-wrapper")
        .classList.toggle("max-w-[calc(100%-80px)]");
});

document
    .querySelector("i.show-notifications")
    .addEventListener("click", function () {
        document
            .querySelector("div.notifications-wrapper > div")
            .classList.toggle("hidden");
    });

document
    .querySelector("img.show-profile")
    .addEventListener("click", function () {
        document
            .querySelector("div.profile-wrapper > div")
            .classList.toggle("hidden");
    });

document.addEventListener("click", function (event) {
    var dropdowns = document.querySelectorAll(".button-dropdown");
    dropdowns.forEach(function (dropdownButton) {
        if (!dropdownButton.parentElement.contains(event.target)) {
            let dropdownElement =
                dropdownButton.parentElement.querySelector(".dropdown");
            if (!dropdownElement.classList.contains("hidden")) {
                dropdownElement.classList.add("hidden");
            }
        }
    });
});

document
    .querySelector("div.me-sidebar > div.more-button")
    .addEventListener("click", function (event) {
        let itemCount = document
            .querySelector("div.me-sidebar")
            .querySelectorAll("div.me-item").length;

        document
            .querySelector("div.me-sidebar > div.more-button")
            .classList.toggle("hidden");
        document
            .querySelector("div.me-sidebar > div.less-button")
            .classList.toggle("hidden");

        for (let i = 0; i <= itemCount - 1; i++) {
            let meItem = document
                .querySelector("div.me-sidebar")
                .querySelectorAll("div.me-item")[i];
            if (meItem.classList.contains("hidden")) {
                meItem.classList.remove("hidden");
            }
        }
    });

document
    .querySelector("div.me-sidebar > div.less-button")
    .addEventListener("click", function (event) {
        let maxMeItem = 4;
        let itemCount = document
            .querySelector("div.me-sidebar")
            .querySelectorAll("div.me-item").length;

        document
            .querySelector("div.me-sidebar > div.more-button")
            .classList.toggle("hidden");
        document
            .querySelector("div.me-sidebar > div.less-button")
            .classList.toggle("hidden");

        for (let i = 0; i <= itemCount - 1; i++) {
            let meItem = document
                .querySelector("div.me-sidebar")
                .querySelectorAll("div.me-item")[i];
            if (i >= maxMeItem) {
                meItem.classList.add("hidden");
            }
        }
    });

// function adjustShortGridItem() {
//     let maxGridItem;
//     let windowWidth = window.innerWidth;
//     if (windowWidth <= 640) {
//         maxGridItem = 2;
//     } else if (windowWidth > 640 && windowWidth <= 768) {
//         maxGridItem = 2;
//     } else if (windowWidth > 768 && windowWidth <= 1024) {
//         maxGridItem = 3;
//     } else if (windowWidth > 1024 && windowWidth <= 1280) {
//         maxGridItem = 4;
//     } else if (windowWidth > 1280 && windowWidth <= 1536) {
//         maxGridItem = 6;
//     } else {
//         maxGridItem = 7;
//     }
//     const gridContainer = document.querySelector(".shorts-grid");
//     let gridsCount = gridContainer.querySelectorAll("div.short-item").length;
//     for (let i = 0; i <= gridsCount - 1; i++) {
//         console.log(maxGridItem);
//         if (i >= maxGridItem) {
//             gridContainer
//                 .querySelectorAll("div.short-item")
//                 [i].classList.add("hidden");
//         } else {
//             gridContainer
//                 .querySelectorAll("div.short-item")
//                 [i].classList.remove("hidden");
//         }
//     }
// }

// function adjustVideoGridItem() {
//     let maxGridItem;
//     let windowWidth = window.innerWidth;
//     if (windowWidth <= 640) {
//         maxGridItem = 1;
//     } else if (windowWidth > 640 && windowWidth <= 1280) {
//         maxGridItem = 2;
//     } else if (windowWidth > 1280 && windowWidth <= 1536) {
//         maxGridItem = 4;
//     } else {
//         maxGridItem = 5;
//     }
//     const gridContainer = document.querySelector(".videos-grid");
//     let gridsCount = gridContainer.querySelectorAll("div.video-item").length;
//     for (let i = 0; i <= gridsCount - 1; i++) {
//         console.log(maxGridItem * 2);
//         if (i >= maxGridItem * 2) {
//             gridContainer
//                 .querySelectorAll("div.video-item")
//                 [i].classList.add("hidden");
//         } else {
//             gridContainer
//                 .querySelectorAll("div.video-item")
//                 [i].classList.remove("hidden");
//         }
//     }
// }

// function adjustGridItem() {
//     adjustShortGridItem();
//     adjustVideoGridItem();
// }

// document.addEventListener("DOMContentLoaded", adjustGridItem);
// window.addEventListener("resize", adjustGridItem);
