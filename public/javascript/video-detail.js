document.querySelector(".big-sidebar").classList.add("hidden")


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

