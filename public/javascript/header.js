document
    .querySelector(".upload-btn")
    .addEventListener("click", function() {
        console.log(document
            .querySelector("ul.upload-dropdown")
            .classList)
        document
            .querySelector("ul.upload-dropdown")
            .classList.toggle("hidden");
        console.log(document
            .querySelector("ul.upload-dropdown")
            .classList)
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

document.querySelectorAll(".notification-item").forEach(notiEl =>{
    notiEl.querySelectorAll(".ti-more.button-dropdown").forEach(el =>{
        el.addEventListener("click",function(){
            this.parentNode.querySelector(".notification-item-dropdown").classList.toggle("hidden")
        })
 })
})