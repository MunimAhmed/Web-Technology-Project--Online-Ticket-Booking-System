const form = document.getElementById("form");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const uname = document.getElementById("uname");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");

// form.addEventListener('submit', (e) => {
//   e.preventDefault();

//   checkInputs();
// });

function handleError(e, message) {
  e.target.classList.add("error");
  e.target.nextElementSibling.style.visibility = "visible";
  e.target.nextElementSibling.innerHTML = message;
}

function handleSuccess(e) {
  e.target.classList.remove("error");
  e.target.classList.add("success");
  e.target.nextElementSibling.style.visibility = "hidden";
}

fname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 2) {
    return handleError(
      e,
      "Please Enter a Valid Name with more than 2 character"
    );
  }

  if (!e.target.value.length) {
    return handleError(e, "Name can not be empty");
  }

  return handleSuccess(e);
});

lname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 2) {
    handleError(e, "Please Enter a Valid Name with more than 2 character");
    return;
  }

  if (!e.target.value.length) {
    handleError(e, "Name can not be empty");
    return;
  }

  return handleSuccess(e);
});

uname.addEventListener("input", (e) => {
  if (e.target.value.length <= 5) {
    handleError(
      e,
      "Please enter a valid user name with more than 5 characters"
    );
    return;
  }

  return handleSuccess(e);
});

phone.addEventListener("input", (e) => {
  if (!e.target.value.length || e.target.value.length < 11) {
    handleError(e, "Please enter a valid phone number");
    return;
  }

  return handleSuccess(e);
});

email.addEventListener("input", (e) => {
  if (
    !e.target.value.length ||
    !e.target.value.match(
      /^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/
    )
  ) {
    handleError(e, "Please enter a valid email");
    return;
  }

  return handleSuccess(e);
});

password.addEventListener("input", (e) => {
  if (!e.target.value.length || e.target.value.length <= 7) {
    handleError(e, "Please enter a valid password");
    return;
  }

  return handleSuccess(e);
});

confirmpassword.addEventListener("input", (e) => {
  if (e.target.value !== password.value) {
    handleError(e, "Password does not match");
    return;
  }

  return handleSuccess(e);
});

// function checkInputs() {
//   const usernameValue = fname.value.trim();
//   const lnameValue = lname.value.trim();
//   const unameValue = uname.value.trim();
//   const emailValue = email.value.trim();
//   const phoneValue = phone.value.trim();
//   const passwordValue = password.value.trim();
//   const confirmpasswordValue = confirmpassword.value.trim();

//   if (usernameValue === '') {
//     setErrorFor(username, 'Username cannot be blank');
//   } else {
//     setSuccesFor(username);
//   }

//   function setErrorFor(input, message) {
//     const formControl = input.parentElement;
//     const small = formControl.querySelector('small');

//     small.innerText = message;

//     formControl.className = 'form-control error';
//   }
// }
