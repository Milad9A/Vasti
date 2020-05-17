// Register & login modal

const close_register = document.getElementById('close-register');
const close_login = document.getElementById('close-login');
const register = document.getElementById('register');
const login = document.getElementById('login');
const modal_register = document.getElementById('modal-register');
const modal_login = document.getElementById('modal-login');
const read_register = document.getElementById('read-register');
const start_read = document.getElementById('start-read');

start_read.addEventListener('click', () => modal_register.classList.add('show-modal'));

read_register.addEventListener('click', () => modal_register.classList.add('show-modal'));

register.addEventListener('click', () => modal_register.classList.add('show-modal'));

close_register.addEventListener('click', () => modal_register.classList.remove('show-modal'));

window.addEventListener('click', e =>
  e.target == modal_register ? modal_register.classList.remove('show-modal') : false
);

login.addEventListener('click', () => modal_login.classList.add('show-modal'));

close_login.addEventListener('click', () => modal_login.classList.remove('show-modal'));

window.addEventListener('click', e =>
  e.target == modal_login ? modal_login.classList.remove('show-modal') : false
);

// validation
const form_register = document.getElementById('register-form');
const name_register = document.getElementById('name-register');
const email_register = document.getElementById('email-register');
const password_register = document.getElementById('password-register');
const password2_register = document.getElementById('password2-register');


function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = 'form-control error';
  const small = formControl.querySelector('small');
  small.innerText = message;
}


function showSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}


function checkEmail(input) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'Email is not valid');
  }
}


function checkRequired(inputArr) {
  inputArr.forEach(function(input) {
    if (input.value.trim() === '') {
      showError(input, `${getFieldName(input)} is required`);
    } else {
      showSuccess(input);
    }
  });
}


function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} must be at least ${min} characters`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} must be less than ${max} characters`
    );
  } else {
    showSuccess(input);
  }
}


function checkPasswordsMatch(input1, input2) {
  if (input1.value !== input2.value) {
    showError(input2, 'Passwords do not match');
  }
}


function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}


form_register.addEventListener('submit', function(e) {
  e.preventDefault();

  checkRequired([name_register, email_register, password_register, password2_register]);
  checkLength(name_register, 3, 15);
  checkLength(password_register, 6, 25);
  checkEmail(email_register);
  checkPasswordsMatch(password_register, password2_register);
});



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





// function showBook() {
//   let books = document.getElementsByClassName("book");
//   for (i = 0; i < 6; i+=1) {
//       books[i].style.display = "none";
//       // line[i].style.height = "0.1rem";
//       // summary[i].style.display = "none";
//       // author_summary[i].style.display = "none";
//   }
//   for (i = 6; i < books.length; i+=1) {
//     books[i].style.display = "block";
//     // line[i].style.height = "0.1rem";
//     // summary[i].style.display = "none";
//     // author_summary[i].style.display = "none";
// }
// }


// const next_book = document.getElementById('next-book');

// next_book.addEventListener('click', () => showBook());