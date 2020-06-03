


// arrow-best-books
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var line   = document.getElementsByClassName("line"); 
  var summary   = document.getElementsByClassName("text-summary"); 
  var authorSummary = document.getElementsByClassName("author-summary"); 
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      line[i].style.height = "0.1rem";
      summary[i].style.display = "none";
      authorSummary[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  line[slideIndex-1].style.height = "0.5rem";
  summary[slideIndex-1].style.display = "block";
  authorSummary[slideIndex-1].style.display = "block";
}

const bestArrow = document.getElementById('best-arrow');

bestArrow.addEventListener('click', () => plusSlides(1));

var lines = document.getElementsByClassName("line");





// const next = document.getElementById('next-bo');
// const prev = document.getElementById('prev-bo');
// const books = document.querySelectorAll('.book');
// let index = 0;
// let count = 0;
// for (let i=0; i>books.length; i++){
//     let dis=books[i].getAttribute('style', 'display');
//     if (dis == 'block'){
//         count += 1;
//     }
// }
// console.log(count);
// function prevBook() {
//     if (index > 0) {
//         index -= 1;
//         books[index+6].style.display = 'none';
//         books[index].style.display = 'block'; 
//     }
//     else {
//         index = 0;
//     }
// }
// function nextBook(){
//     if (index < 6) {
//         books[index].style.display = 'none';
//         books[index+6].style.display = 'block'; 
//         index += 1;
//     }
//     else {
//         index = 6;
//     }
// }    
// next.addEventListener('click', () => nextBook());
// prev.addEventListener('click', () => prevBook());