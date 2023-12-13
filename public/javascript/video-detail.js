document.querySelector(".big-sidebar").classList.add("hidden")


document.querySelectorAll(".video-item").forEach(notiEl =>{
    notiEl.querySelectorAll(".video-actions .button-dropdown").forEach(el =>{
        el.addEventListener("click",function(){
            this.parentNode.querySelector(".dropdown").classList.toggle("hidden")
        })
 })
})

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

