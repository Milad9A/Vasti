const lists = document.getElementById("lists");
lists.addEventListener("click", selectedList);
function selectedList(e) {
    const reading = document.getElementById("reading");
    const plan = document.getElementById("plan");
    const completed = document.getElementById("completed");
    if (e.target.id === "reading") {
        reading.classList.add("current-selected");
        plan.classList.remove("current-selected");
        completed.classList.remove("current-selected");
    }
    if (e.target.id === "plan") {
        reading.classList.remove("current-selected");
        plan.classList.add("current-selected");
        completed.classList.remove("current-selected");
    }
    if (e.target.id === "completed") {
        reading.classList.remove("current-selected");
        plan.classList.remove("current-selected");
        completed.classList.add("current-selected");
    }
}

const close = document.getElementById("close-b");
const open = document.getElementById("my-books");
const modal = document.getElementById("modal-b");

// Show modal
open.addEventListener("click", () => modal.classList.add("show-modal"));

// Hide modal
close.addEventListener("click", () => modal.classList.remove("show-modal"));
