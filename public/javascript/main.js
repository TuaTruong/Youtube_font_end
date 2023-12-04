document
    .querySelector("div.upload-btn")
    .addEventListener("click", function() {
        document
            .querySelector(".upload-dropdown")
            .classList.toggle("hidden");
    });

document
    .querySelector("div.notification-button")
    .addEventListener("click", function() {
        document
            .querySelector(".notification-dropdown")
            .classList.toggle("hidden");
    });

document
    .querySelector("img.show-profile")
    .addEventListener("click", function() {
        let subDropdownExist = false;
        let subDropdowns = document.querySelectorAll(".sub-dropdown")
        subDropdowns.forEach(el => {
            if (!el.classList.contains("hidden")) {
                subDropdownExist = true
                el.classList.add("hidden")
            }
        })

        if (!subDropdownExist) {
            document
                .querySelector("div.profile-wrapper > div.main-profile-dropdown")
                .classList.toggle("hidden");
        }
    });


document.querySelector("i.back-main-dropdown-button.change-account-button").addEventListener("click", el => {
    document.querySelector(".change-account-dropdown").classList.add("hidden")
    document.querySelector(".main-profile-dropdown").classList.remove("hidden")
})

document.querySelector("div.main-profile-dropdown .change-account-button").addEventListener("click", function() {
    document
        .querySelector("div.profile-wrapper > div.main-profile-dropdown")
        .classList.add("hidden");
    document
        .querySelector("div.profile-wrapper > div.change-account-dropdown")
        .classList.remove("hidden");
})

document.querySelector("i.back-main-dropdown-button.change-ui-button").addEventListener("click", el => {
    document.querySelector(".change-ui-dropdown").classList.add("hidden")
    document.querySelector(".main-profile-dropdown").classList.remove("hidden")
})

document.querySelector("div.main-profile-dropdown .change-ui-button").addEventListener("click", function() {
    document
        .querySelector("div.profile-wrapper > div.main-profile-dropdown")
        .classList.add("hidden");
    document
        .querySelector("div.profile-wrapper > div.change-ui-dropdown")
        .classList.remove("hidden");
})

document.querySelector("i.back-main-dropdown-button.change-language-button").addEventListener("click", el => {
    document.querySelector(".change-language-dropdown").classList.add("hidden")
    document.querySelector(".main-profile-dropdown").classList.remove("hidden")
})

document.querySelector("div.main-profile-dropdown .change-language-button").addEventListener("click", function() {
    document
        .querySelector("div.profile-wrapper > div.main-profile-dropdown")
        .classList.add("hidden");
    document
        .querySelector("div.profile-wrapper > div.change-language-dropdown")
        .classList.remove("hidden");
})





document
    .querySelector(".video-actions > .button-dropdown")
    .addEventListener("click", function() {
        document
            .querySelector(".video-actions > .button-dropdown").classList.toggle("hidden")

        document
            .querySelector(".video-actions > .dropdown")
            .classList.toggle("hidden");

    });

document.querySelector("i.ti-menu").addEventListener("click", function() {
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





document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".button-dropdown");
    dropdowns.forEach(function(dropdownButton) {
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
    .addEventListener("click", function(event) {
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
    .addEventListener("click", function(event) {
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


document.querySelector(".show-more-short-button").addEventListener("click", function() {
    document.querySelector(".show-more-short-button").classList.toggle("hidden")
    document.querySelector(".show-less-short-button").classList.toggle("hidden")
    let shortGridItems = document.querySelector("div.short-container > div.shorts-grid").querySelectorAll("div.short-item");
    for (let i = 0; i < shortGridItems.length; i++) {
        if (shortGridItems[i].classList.contains("hidden")) shortGridItems[i].classList.remove("hidden")
    }
})

document.querySelector(".show-less-short-button").addEventListener("click", function() {
    let screenWidth = window.innerWidth;
    let shortItemsShowCount = 2;
    if (screenWidth > 1024 && screenWidth <= 1280) {
        shortItemsShowCount = 3;
    } else if (screenWidth > 1280) {
        shortItemsShowCount = 5;
    }
    document.querySelector(".show-more-short-button").classList.toggle("hidden")
    document.querySelector(".show-less-short-button").classList.toggle("hidden")

    let shortGridItems = document.querySelector("div.short-container > div.shorts-grid").querySelectorAll("div.short-item");
    for (let i = 0; i < shortGridItems.length; i++) {
        if (i > shortItemsShowCount - 1) {
            if (!shortGridItems[i].classList.contains("hidden")) shortGridItems[i].classList.add("hidden")
        }
    }
})


function adjustShortGridItem() {
    if (document.querySelector(".show-less-short-button").classList.contains("hidden")) {
        let windowWidth = window.innerWidth;
        let maxGridItem = 2;
        if (windowWidth > 1024 && windowWidth <= 1280) {
            maxGridItem = 3;
        } else if (windowWidth > 1280) {
            maxGridItem = 5;
        }

        const gridContainer = document.querySelector(".shorts-grid");
        let gridsCount = gridContainer.querySelectorAll("div.short-item").length;
        console.log(gridsCount)
        for (let i = 0; i <= gridsCount - 1; i++) {
            if (i >= maxGridItem) {
                gridContainer
                    .querySelectorAll("div.short-item")[i].classList.add("hidden");
            } else {
                gridContainer
                    .querySelectorAll("div.short-item")[i].classList.remove("hidden");
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", adjustShortGridItem);
window.addEventListener("resize", adjustShortGridItem);