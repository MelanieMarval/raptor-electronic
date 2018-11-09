

let navOptions = document.getElementById("navOptions");
if (navOptions != null) {
    let navItems = navOptions.getElementsByClassName("nav-item");

    for (let i = 0; i < navItems.length; i++) {
        navItems[i].addEventListener("click", function () {
            let currentActiveItem = document.getElementsByClassName("active");
            currentActiveItem[0].className = currentActiveItem[0].className.replace(" active", "");
            this.className += " active";
        });
    }
}




