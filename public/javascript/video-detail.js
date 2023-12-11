document.querySelector(".show-search-bar.search-btn").addEventListener("click",function(){
    if (window.innerWidth < 640){
        document.querySelector(".end-header").classList.add("hidden")
        document.querySelector(".start-header").classList.add("hidden")
        document.querySelector(".center-header").classList.remove("hidden")
        document.querySelector(".center-header").classList.remove("justify-center")
        document.querySelector(".center-header").classList.add("justify-between")
        document.querySelector(".center-header .back-btn").classList.remove("hidden")
    }}
)

document.querySelector(".center-header .back-btn").addEventListener("click",function(){
    if (window.innerWidth < 640){
        document.querySelector(".end-header").classList.remove("hidden")
        document.querySelector(".start-header").classList.remove("hidden")
        document.querySelector(".center-header").classList.add("hidden")
        document.querySelector(".center-header").classList.add("justify-center")
        document.querySelector(".center-header").classList.remove("justify-between")
        document.querySelector(".center-header .back-btn").classList.add("hidden")
    }}
)

document
    .querySelector(".upload-btn")
    .addEventListener("click", function() {
        document
            .querySelector(".upload-dropdown")
            .classList.toggle("hidden");
    });

document
    .querySelector(".notification-button")
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
                .querySelector(".profile-wrapper > .main-profile-dropdown")
                .classList.toggle("hidden");
        }
    });

function processSubDropdown(dropdownField) {
    document.querySelector(`i.back-main-dropdown-button.change-${dropdownField}-button`).addEventListener("click", el => {
        document.querySelector(`.change-${dropdownField}-dropdown`).classList.add("hidden")
        document.querySelector(".main-profile-dropdown").classList.remove("hidden")
    })

    document.querySelector(`.main-profile-dropdown .change-${dropdownField}-button`).addEventListener("click", function() {
        document
            .querySelector(".profile-wrapper > .main-profile-dropdown")
            .classList.add("hidden");
        document
            .querySelector(`.profile-wrapper > .change-${dropdownField}-dropdown`)
            .classList.remove("hidden");
    })
}
processSubDropdown("account")
processSubDropdown("ui")
processSubDropdown("language")
processSubDropdown("destination")
processSubDropdown("restrict-mode")

document.querySelectorAll(".notification-item").forEach(notiEl =>{
    notiEl.querySelectorAll(".ti-more.button-dropdown").forEach(el =>{
        el.addEventListener("click",function(){
            this.parentNode.querySelector(".notification-item-dropdown").classList.toggle("hidden")
        })
 })
})

document.querySelectorAll(".video-item").forEach(notiEl =>{
    notiEl.querySelectorAll(".video-actions .button-dropdown").forEach(el =>{
        el.addEventListener("click",function(){
            console.log("click")
            console.log(this.parentNode)
            this.parentNode.querySelector(".dropdown").classList.toggle("hidden")
        })
 })
})

document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".button-dropdown");
    dropdowns.forEach(function(dropdownButton) {
        if (!dropdownButton.parentElement.contains(event.target)) {
            let dropdownElements =
                dropdownButton.parentElement.querySelectorAll(".dropdown");
            dropdownElements.forEach(dropdownElement => {
                if (!dropdownElement.classList.contains("hidden")) {
                    dropdownElement.classList.add("hidden");
                }
            })
        }
    });
});

document.querySelector(".start-header i.ti-menu").addEventListener("click", function() {
    document.querySelector(".modal-sidebar").classList.toggle("hidden");
});
document.querySelector("i.ti-menu.hide-modal-sidebar").addEventListener("click", function() {
    document.querySelector(".modal-sidebar").classList.toggle("hidden");
});

document.querySelector(".main-video-action").addEventListener("click",function(){
    this.querySelector(".main-video-action-dropdown").classList.toggle("hidden")
})

document.querySelector(".sort-comment").addEventListener("click",function(){
    this.querySelector(".sort-comment-dropdown").classList.toggle("hidden")
})

function handleToggleButtonSidebar(parrentSelector){
    document
    .querySelector(`${parrentSelector} ul.me-sidebar > li.more-button`)
    .addEventListener("click", function(event) {
        let itemCount = document
            .querySelector(`${parrentSelector} ul.me-sidebar`)
            .querySelectorAll("li.me-item").length;

        document
            .querySelector(`${parrentSelector} ul.me-sidebar > li.more-button`)
            .classList.toggle("hidden");
        document
            .querySelector(`${parrentSelector} ul.me-sidebar > li.less-button`)
            .classList.toggle("hidden");

        for (let i = 0; i <= itemCount - 1; i++) {
            let meItem = document
                .querySelector(`${parrentSelector} ul.me-sidebar`)
                .querySelectorAll("li.me-item")[i];
            if (meItem.classList.contains("hidden")) {
                meItem.classList.remove("hidden");
            }
        }
    });

    document
        .querySelector(`${parrentSelector} ul.me-sidebar > li.less-button`)
        .addEventListener("click", function(event) {
            let maxMeItem = 4;
            let itemCount = document
                .querySelector(`${parrentSelector} ul.me-sidebar`)
                .querySelectorAll("li.me-item").length;

            document
                .querySelector(`${parrentSelector} ul.me-sidebar > li.more-button`)
                .classList.toggle("hidden");
            document
                .querySelector(`${parrentSelector} ul.me-sidebar > li.less-button`)
                .classList.toggle("hidden");

            for (let i = 0; i <= itemCount - 1; i++) {
                let meItem = document
                    .querySelector(`${parrentSelector} ul.me-sidebar`)
                    .querySelectorAll("li.me-item")[i];
                if (i >= maxMeItem) {
                    meItem.classList.add("hidden");
                }
            }
        });
}

handleToggleButtonSidebar(".modal-sidebar")