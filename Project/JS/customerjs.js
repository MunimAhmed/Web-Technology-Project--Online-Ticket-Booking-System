const form = document.getElementById("form");
const Name = document.getElementById("Name");
const uname = document.getElementById("uname");
const email = document.getElementById("Email");
const phone = document.getElementById("PhoneNo");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");

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

Name.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 2) {
    return handleError(e, "Enter Name ehich must be at least 2 Characters");
  }
  if (!e.target.value.length) {
    return handleError(e, "Name can not be empty");
  }

  return handleSuccess(e);
});

uname.addEventListener("input", (e) => {
  if (e.target.value.length <= 4) {
    handleError(e, "Username must be 5 characters");
    return;
  }

  return handleSuccess(e);
});

Email.addEventListener("input", (e) => {
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

PhoneNo.addEventListener("input", (e) => {
  if (!e.target.value.length || e.target.value.length < 11) {
    handleError(e, "Please enter a valid phone number");
    return;
  }

  return handleSuccess(e);
});

password.addEventListener("input", (e) => {
  if (!e.target.value.length || e.target.value.length <= 6) {
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
