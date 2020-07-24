let discoveredFriendsBtn = document.getElementById("discovered-friends-btn");
discoveredFriendsBtn.addEventListener("click", showDiscoveredFriends);
function showDiscoveredFriends() {
    const containerBodyNews = document.getElementById("container-body-news-feed");
    const discoveredAllFriends = document.getElementById(
        "discovered-all-friends"
    );
    containerBodyNews.style.display = "none";
    discoveredAllFriends.style.display = "block";
}
