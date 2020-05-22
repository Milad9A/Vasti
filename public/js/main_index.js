


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
  var author_summary = document.getElementsByClassName("author-summary"); 
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      line[i].style.height = "0.1rem";
      summary[i].style.display = "none";
      author_summary[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  line[slideIndex-1].style.height = "0.5rem";
  summary[slideIndex-1].style.display = "block";
  author_summary[slideIndex-1].style.display = "block";
}

const best_arrow = document.getElementById('best-arrow');

best_arrow.addEventListener('click', () => plusSlides(1));

var lines = document.getElementsByClassName("line");



// for (i = 0; i < line.length; i++) {
//   lines[i].addEventListener('click', () => currentSlide(i));
// } 


// var bookIndex = 0;
// showBook(bookIndex);

// function plusBook(n) {
//   showBook(bookIndex += n);
// }


// function showBook(n) {
//   let i;
//   let books = document.getElementsByClassName("book");
//   // var line   = document.getElementsByClassName("line"); 
//   // var summary   = document.getElementsByClassName("text-summary"); 
//   // var author_summary = document.getElementsByClassName("author-summary"); 
//   if (n > books.length) {bookIndex = 1}
//   if (n < 1) {bookIndex = books.length}
//   for (i = 5; i < books.length; i+=1) {
//       books[i].style.display = "none";
//       // line[i].style.height = "0.1rem";
//       // summary[i].style.display = "none";
//       // author_summary[i].style.display = "none";
//   }
//   books[bookIndex-1].style.display = "block";
//   // line[slideIndex-1].style.height = "0.5rem";
//   // summary[slideIndex-1].style.display = "block";
//   // author_summary[slideIndex-1].style.display = "block";
// }


// const next_book = document.getElementById('next-book');

// next_book.addEventListener('click', () => plusBook(1));


const p_arrow = document.getElementsByClassName('prve-bo');
const n_arrow = document.getElementsByClassName('next-bo');
const book = document.querySelectorAll('section.bestselling-books  div.book')


function next() {
for (let i=0; i <6 ; i++){
 book[i].style.display = 'none';
}
for (let i=6; i <12 ; i++){
  book[i].style.display = 'block';
 }
}

function prve() {
  for (let i=0; i <6 ; i++){
    book[i].style.display = 'block';
  }
  for (let i=6; i <12 ; i++){
    book[i].style.display = 'none';
   }
  }

for (let i=0; i<p_arrow.length; i++) {
  p_arrow[i].addEventListener('click', () => prve());
}
for (let i=0; i<n_arrow.length; i++) {
  n_arrow[i].addEventListener('click', () => next());
}
