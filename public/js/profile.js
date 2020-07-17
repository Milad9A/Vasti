const editProfileBtn = document.getElementById("edit-profile-btn");
const editProfileSection = document.getElementById("edit-profile-section");
const profile = document.getElementById("profile");
editProfileBtn.addEventListener("click", showEditProfile);
function showEditProfile() {
    editProfileSection.classList.add("show");
    profile.classList.add("hide");
}

const profileSetting = document.getElementById("edit-profile-section");
profileSetting.addEventListener("click", editProfile);
function editProfile(e) {
    // console.log("profile");
    const profileOption = document.getElementById("profile-option");
    const passwordOption = document.getElementById("password-option");
    const editProfileOption = document.getElementById("edit-profile");
    const editPasswordOption = document.getElementById("change-password");
    if (e.target.id === "edit-profile") {
        console.log("profile");
        profileOption.style.display = "block";
        passwordOption.style.display = "none";
        editProfileOption.style.borderLeft = "4px solid #272727";
        editPasswordOption.style.borderLeft = "none";
    }

    if (e.target.id === "change-password") {
        console.log("password");
        profileOption.style.display = "none";
        passwordOption.style.display = "block";
        editProfileOption.style.borderLeft = "none";
        editPasswordOption.style.borderLeft = "4px solid #272727";
    }
}

const lists = document.getElementById("lists");
lists.addEventListener("click", selectedList);
function selectedList(e) {
    console.log("rpc");
    const reading = document.getElementById("reading");
    const plan = document.getElementById("plan");
    const completed = document.getElementById("completed");
    if (e.target.id === "reading") {
        console.log("r");
        reading.style.color = "#272727";
        reading.style.borderTop = "3px solid #272727";
        plan.style.color = "#e0e0e0";
        plan.style.borderTop = "none";
        completed.style.color = "#e0e0e0";
        completed.style.borderTop = "none";
    }
    if (e.target.id === "plan") {
        console.log("p");
        reading.style.color = "#e0e0e0";
        reading.style.borderTop = "none";
        plan.style.color = "#272727";
        plan.style.borderTop = "3px solid #272727";
        completed.style.color = "#e0e0e0";
        completed.style.borderTop = "none";
    }
    if (e.target.id === "completed") {
        console.log("c");
        reading.style.color = "#e0e0e0";
        reading.style.borderTop = "none";
        plan.style.color = "#e0e0e0";
        plan.style.borderTop = "none";
        completed.style.color = "#272727";
        completed.style.borderTop = "3px solid #272727";
    }
}
