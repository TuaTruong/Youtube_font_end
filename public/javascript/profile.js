document.querySelector(".show-search-video").addEventListener("click",function(){
    this.parentNode.querySelector("input").classList.toggle("hidden")
    this.parentNode.querySelector("input").focus()
})

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
document.querySelector("i.ti-menu.hide-modal-sidebar").addEventListener("click", function() {
    if(window.innerWidth < 1280){
        document.querySelector(".modal-sidebar").classList.toggle("hidden");
    }
});
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
}

document.addEventListener("DOMContentLoaded", adjustUI);
window.addEventListener("resize", adjustUI);