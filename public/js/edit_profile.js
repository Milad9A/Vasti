const profileSetting = document.getElementById("edit-profile-section");
profileSetting.addEventListener("click", editProfile);
function editProfile(e) {
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
