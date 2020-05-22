const search_btn = document.getElementById('se');
const closee = document.getElementById('close-icon');
const search_text = document.getElementById('search-ba');
search_btn.addEventListener('click', () => search());
function search() {
    search_text.style.width = '35rem'
    search_text.style.background = '#fff'
    closee.style.display = 'block'
}

closee.addEventListener('click', () => closeSearch());
function closeSearch() {
    search_text.style.width = '0rem'
    search_text.style.background = 'none'
    closee.style.display = 'none';
}
const content = document.getElementById('content');
const leftt = search_btn.offsetLeft;
const right=leftt-330;

content.style.left = right+'px';

const username = document.getElementById('user');
const logout = document.getElementById('logout');
username.addEventListener('click', () => logout.classList.add('show-logout'));
// const left_user = username.offsetLeft+6;
// logout.style.left = left_user+'px';
const close_logout = document.getElementById('close-logout');
close_logout.addEventListener('click', () => logout.classList.remove('show-logout'));
const width = username.offsetWidth+3;
console.log(width);
logout.style.width=width+'px';

