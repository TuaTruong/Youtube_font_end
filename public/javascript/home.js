

document.querySelectorAll(".video-item").forEach(notiEl =>{
    notiEl.querySelectorAll(".video-actions .button-dropdown").forEach(el =>{
        el.addEventListener("click",function(){
            this.parentNode.querySelector(".dropdown").classList.toggle("hidden")
        })
 })
})

document.querySelector(".start-header i.ti-menu").addEventListener("click", function() {
    if(window.innerWidth < 1280){
        document.querySelector(".modal-sidebar").classList.toggle("hidden");
    } else {
        bigSidebar  = document.querySelector(".big-sidebar");
        miniSidebar = document.querySelector(".mini-sidebar");
        if(bigSidebar.classList.contains("hidden")){
            document.querySelector(".wrapper").style.gridTemplateColumns = "224px 1fr";
        } else{
            document.querySelector(".wrapper").style.gridTemplateColumns = "80px 1fr";
        }
        bigSidebar.classList.toggle("hidden");
        miniSidebar.classList.toggle("hidden");
    }
});

document.querySelector(".show-more-short-button").addEventListener("click", function() {
    document.querySelector(".show-more-short-button").classList.toggle("hidden")
    document.querySelector(".show-less-short-button").classList.toggle("hidden")
    let shortGridItems = document.querySelector(".short-container > .shorts-grid").querySelectorAll(".short-item");
    for (let i = 0; i < shortGridItems.length; i++) {
        if (shortGridItems[i].classList.contains("hidden")) shortGridItems[i].classList.remove("hidden")
    }
})

document.querySelector(".show-less-short-button").addEventListener("click", function() {
    document.querySelector(".show-more-short-button").classList.toggle("hidden")
    document.querySelector(".show-less-short-button").classList.toggle("hidden")
    let screenWidth = window.innerWidth;
    let shortItemsShowCount = 2;
    if (screenWidth > 1024 && screenWidth <= 1280) {
        shortItemsShowCount = 3;
    } else if (screenWidth > 1280) {
        shortItemsShowCount = 5;
    }

    let shortGridItems = document.querySelector(".short-container > .shorts-grid").querySelectorAll(".short-item");
    for (let i = 0; i < shortGridItems.length; i++) {
        if (i > shortItemsShowCount - 1) {
            if (!shortGridItems[i].classList.contains("hidden")) shortGridItems[i].classList.add("hidden")
        }
    }
})

document.querySelector("i.ti-menu.hide-modal-sidebar").addEventListener("click", function() {
    if(window.innerWidth < 1280){
        document.querySelector(".modal-sidebar").classList.toggle("hidden");
    }
});


function adjustShortGridItem() {
    if (document.querySelector(".show-less-short-button").classList.contains("hidden")) {
        let windowWidth = window.innerWidth;
        let maxGridItem = 2;
        if (windowWidth > 1024 && windowWidth <= 1280) {
            maxGridItem = 3;
        } else if (windowWidth > 1280) {
            maxGridItem = 5;
        }

        let gridContainer = document.querySelector(".shorts-grid");
        let gridsCount = gridContainer.querySelectorAll(".short-item").length;
        for (let i = 0; i <= gridsCount - 1; i++) {
            if (i >= maxGridItem) {
                gridContainer
                    .querySelectorAll(".short-item")[i].classList.add("hidden");
            } else {
                gridContainer
                    .querySelectorAll(".short-item")[i].classList.remove("hidden");
            }
        }
    }
}

function adjustSidebar(){
    let windowWidth = window.innerWidth;
    let contentWrapper = document.querySelector(".content-wrapper");
    let bigSidebar  = document.querySelector(".big-sidebar");
    let miniSidebar = document.querySelector(".mini-sidebar");

    if (windowWidth < 640){
        if (!miniSidebar.classList.contains("hidden")){
            miniSidebar.classList.add("hidden")
        }
        if (!bigSidebar.classList.contains("hidden")){
            bigSidebar.classList.add("hidden")
        }
        
        if (!contentWrapper.classList.contains("col-span-2")){
            contentWrapper.classList.add("col-span-2");
        }
    }
    
    if (windowWidth >=640 && windowWidth <= 1280){
        if (miniSidebar.classList.contains("hidden")){
            miniSidebar.classList.toggle("hidden");
            document.querySelector(".wrapper").style.gridTemplateColumns = "80px 1fr";
        }

        if (!bigSidebar.classList.contains("hidden")){
            bigSidebar.classList.toggle("hidden");
        }

        if (contentWrapper.classList.contains("col-span-2")){
            contentWrapper.classList.remove("col-span-2");
        }
    }

    if (windowWidth > 1280){
        if (contentWrapper.classList.contains("col-span-2")){
            contentWrapper.classList.remove("col-span-2");
        }
        if (!document.querySelector(".modal-sidebar").classList.contains("hidden")){
            document.querySelector(".modal-sidebar").classList.add("hidden")
        }
        

        if (bigSidebar.classList.contains("hidden") && miniSidebar.classList.contains("hidden")){
            document.querySelector(".wrapper").style.gridTemplateColumns = "224px 1fr";
            bigSidebar.classList.toggle("hidden");
        }
    }
}

function adjustUI(){
    adjustSidebar();
    adjustShortGridItem();
}

document.addEventListener("DOMContentLoaded", adjustUI);
window.addEventListener("resize", adjustUI);