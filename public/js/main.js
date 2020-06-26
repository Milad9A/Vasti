const searchBtn = document.getElementById('search-icon');
const closeBtn = document.getElementById('close-icon');
const searchText = document.getElementById('search-bar');
const content = document.getElementById('content');


searchBtn.addEventListener('click', () => showSearchText());
closeBtn.addEventListener('click', () => closeSearchText());

function showSearchText() {
    searchText.style.width = '35rem';
    searchText.style.background = '#fff';
    searchText.style.transition = '0.5s ease-out';
    closeBtn.style.display = 'block';
}

function closeSearchText() {
    searchText.style.width = '0rem'
    searchText.style.background = 'none'
    searchText.style.transition = '0.5s ease-out';
    closeBtn.style.display = 'none';
}

searchText.style.width = '0px';
searchText.style.background = 'none';
closeBtn.style.display = 'none';
const left = searchBtn.offsetLeft;
const right = left-328;
content.style.left = right+'px';


// const username = document.getElementById('user');
// const logout = document.getElementById('logout');
// username.addEventListener('click', () => logout.classList.add('show-logout'));
// const left_user = username.offsetLeft+6;
// logout.style.left = left_user+'px';
// const close_logout = document.getElementById('close-logout');
// close_logout.addEventListener('click', () => logout.classList.remove('show-logout'));
// const width = username.offsetWidth+3;
// console.log(width);
// logout.style.width=width+'px';

$(document).ready(function () {
    $('#bestselling').owlCarousel({
        dots:false,
        margin:0,
        end:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            550:{
                items:2
            },
            700:{
                items:3
            },
            800:{
                items:4
            },
            1150:{
                items:5
            },
            1250:{
                items:7
            }
        }
    });

    var owl = $('#bestselling');
    owl.owlCarousel();
    $('#next-bestselling').click(function() {
        owl.trigger('next.owl.carousel');
    })
    $('#prev-bestselling').click(function() {
        owl.trigger('prev.owl.carousel');
    });

});