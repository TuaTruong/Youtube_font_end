function handleToggleButtonSidebar(parrentSelector){
    document
    .querySelector(`${parrentSelector} ul.me-sidebar > li.more-button`)
    .addEventListener("click", function(event) {
        console.log("ok")
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
handleToggleButtonSidebar(".big-sidebar")

document.querySelector("i.ti-menu.hide-modal-sidebar").addEventListener("click", function() {
    if(window.innerWidth < 1280){
        document.querySelector(".modal-sidebar").classList.toggle("hidden");
    }
});