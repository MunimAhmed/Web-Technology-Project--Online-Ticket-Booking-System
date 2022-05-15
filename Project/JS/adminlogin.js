const uname = document.getElementById('uname');
const password = document.getElementById('password');

function handleError(e, message) {
  e.target.classList.add('error');
  e.target.nextElementSibling.style.visibility = 'visible';
  e.target.nextElementSibling.innerHTML = message;
}

function handleSuccess(e) {
  e.target.classList.remove('error');
  e.target.classList.add('success');
  e.target.nextElementSibling.style.visibility = 'hidden';
}

uname.addEventListener('input', (e) => {
  if (e.target.value.length <= 5) {
    handleError(e, 'Please enter a valid user name with more than 5 characters');
    return;
  }

  return handleSuccess(e);
});

password.addEventListener('input', (e) => {
  if (!e.target.value.length || e.target.value.length <= 7) {
    handleError(e, 'Please enter a valid password');
    return;
  }

  return handleSuccess(e);
});
