const statusBar = document.getElementById("status-bar");
statusBar.addEventListener("click", changeStatus);
function changeStatus(e) {
    if (e.target == statusBar.children[0]) {
        statusBar.children[0].classList.add("Current");
        statusBar.children[1].classList.remove("Current");
        statusBar.children[2].classList.remove("Current");
    }
    if (e.target == statusBar.children[1]) {
        statusBar.children[0].classList.remove("Current");
        statusBar.children[1].classList.add("Current");
        statusBar.children[2].classList.remove("Current");
    }
    if (e.target == statusBar.children[2]) {
        statusBar.children[0].classList.remove("Current");
        statusBar.children[1].classList.remove("Current");
        statusBar.children[2].classList.add("Current");
    }
}
