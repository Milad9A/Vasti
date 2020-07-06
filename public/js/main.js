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

const avatar = document.getElementById('avatar');
const editProfileCard = document.getElementById('user-dropdown-menu')
avatar.addEventListener('click', showEditProfile);
function showEditProfile() {
  if (editProfileCard.style.display === 'none'){
    editProfileCard.style.display = 'block';
    editProfileCard.style.opacity = '1';
  }
  else {
    editProfileCard.style.display = 'none'
    editProfileCard.style.opacity = '0';
  }
};



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



const followBtn = document.getElementById("follow");
followBtn.addEventListener('click', follow)
function follow(e){
  if (followBtn.value === 'follow') {
    followBtn.value = 'Unfollow'
    followBtn.style.background = "#fff"
    followBtn.style.border = "1px #272727 solid"
    followBtn.style.color = "#272727"

  } else {
    followBtn.value = 'follow'
    followBtn.style.background = "#272727"
    followBtn.style.border = "none"
    followBtn.style.color = "#fff"
  }
  e.preventDefault();
}




const readSummaryBtn = document.getElementById("red-more-summary");
readSummaryBtn.addEventListener('click', readMoreSummary)
var summary = document.getElementById('summary');
var summaryText = summary.innerHTML.split(' ');
 if (summaryText.length > 40) {
  readSummaryBtn.style.display = 'block';
  summaryText.splice(40, 0, `<span id="dots">...</span><span id="more">`);
  summaryText[summaryText.length]=`</span>`
  var all = summaryText.join(' ');
  summary.innerHTML = all;
 }

var moreText = document.getElementById("more");
 function readMoreSummary() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    readSummaryBtn.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    readSummaryBtn.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}






// const moreReviewBtn = document.getElementById('read-more-review');
// const reviewContent = document.getElementById('review-content');

// var reviewText = reviewContent.innerHTML.split(' ');
// if (reviewText.length > 15) {
//   moreReviewBtn.style.display = 'block'
//   reviewText.splice(15, 0, `<span id="dots">...</span><span id="more">`);
//   reviewText[reviewText.length]=`</span>`
//   var b = reviewText.join(' ');
//   reviewContent.innerHTML = b;
// }
// else {
//   moreReviewBtn.style.display = 'none'
// }


const reviewBtn = document.getElementById('add-review-btn');
reviewBtn.addEventListener('click', addReviewContent);
function addReviewContent() {
  var writeReview = document.getElementById('write-review');
  moreReviewBtn.style.display = 'none'
  reviewContent.innerHTML = writeReview.value;
  writeReview.value = '';
}





const allReviews = document.getElementById('all-reviews');
allReviews.addEventListener('click' , review);
function review(e) {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  if (e.target.id=== 'read-more-review'){
    var dots = e.target.previousSibling.previousSibling.children[0];
    var moreText = e.target.previousSibling.previousSibling.children[1];
   var readMore = e.target;
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      readMore.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      readMore.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }


  if(e.target.id === 'like') {
    if(e.target.classList == 'offline') {
      e.target.src='/icons/like-b-01.png';
      e.target.classList= 'online';
      let dislike = e.target.nextSibling.nextSibling.nextSibling.nextSibling;
      console.log(dislike)
      dislike.src='/icons/dislike-g-01.png';
      dislike.classList= 'offline';

  } else {
      e.target.classList = 'offline'
      e.target.src='/icons/like-g-01.png'
   }
  }


  if(e.target.id === 'dislike') {
    if(e.target.classList == 'offline') {
      e.target.src='/icons/dislike-b-01.png'
      e.target.classList= 'online'
      let like = e.target.previousSibling.previousSibling.previousSibling.previousSibling;
      like.src='/icons/like-g-01.png';
      like.classList= 'offline';
  }   else {
      e.target.classList= 'offline'
      e.target.src='/icons/dislike-g-01.png'
    }
  }
}





const rating = document.getElementById('rating');
rating.addEventListener('mouseover', rateFn);
console.log(rating);
function rateFn(e) {
  var textRating = document.getElementById('text-rating');
  rating.children[0].classList.remove('checked');
  rating.children[1].classList.remove('checked');
  rating.children[2].classList.remove('checked');
  rating.children[3].classList.remove('checked');
  rating.children[4].classList.remove('checked');
  textRating.innerHTML=``;
  if(e.target===rating.children[0]){
    rating.children[0].classList.add('checked');
    rating.children[1].classList.remove('checked');
    rating.children[2].classList.remove('checked');
    rating.children[3].classList.remove('checked');
    rating.children[4].classList.remove('checked');
    textRating.innerHTML= `I didn't like it at all`;
  }
  if(e.target===rating.children[1]){
    rating.children[0].classList.add('checked');
    rating.children[1].classList.add('checked');
    rating.children[2].classList.remove('checked');
    rating.children[3].classList.remove('checked');
    rating.children[4].classList.remove('checked');
    textRating.innerHTML=`I didn't like it that much`;;
  }
  if(e.target===rating.children[2]){
    rating.children[0].classList.add('checked');
    rating.children[1].classList.add('checked');
    rating.children[2].classList.add('checked');
    rating.children[3].classList.remove('checked');
    rating.children[4].classList.remove('checked');
    textRating.innerHTML=`I thought it was OK`;
  }
  if(e.target===rating.children[3]){
    rating.children[0].classList.add('checked');
    rating.children[1].classList.add('checked');
    rating.children[2].classList.add('checked');
    rating.children[3].classList.add('checked');
    rating.children[4].classList.remove('checked');
    textRating.innerHTML=`I liked it`;
  }
  if(e.target===rating.children[4]){
    rating.children[0].classList.add('checked');
    rating.children[1].classList.add('checked');
    rating.children[2].classList.add('checked');
    rating.children[3].classList.add('checked');
    rating.children[4].classList.add('checked');
    textRating.innerHTML=`I loved it`;
  }
}






