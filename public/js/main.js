// Register & login modal

const close_register = document.getElementById('close-register');
const close_login = document.getElementById('close-login');
const register = document.getElementById('register');
const login = document.getElementById('login');
const modal_register = document.getElementById('modal-register');
const modal_login = document.getElementById('modal-login');


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


