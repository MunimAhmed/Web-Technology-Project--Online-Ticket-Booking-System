const form = document.getElementById("form");
const companyname = document.getElementById("companyname");
const licensenumber = document.getElementById("licensenumber");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const uname = document.getElementById("uname");
const email = document.getElementById("email");
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

companyname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 6) {
    return handleError(e, "The Name Must Be At Least 5 Characters");
  }
  if (!e.target.value.length) {
    return handleError(e, "Company Name can not be empty");
  }

  return handleSuccess(e);
});

licensenumber.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 8) {
    return handleError(e, "Please enter a valid License Number");
  }
  if (!e.target.value.length) {
    return handleError(e, "License Number can not be empty");
  }

  return handleSuccess(e);
});

fname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 4) {
    return handleError(e, "The Name Must Be At Least 5 Characters");
  }

  if (!e.target.value.length) {
    return handleError(e, "Name can not be empty");
  }

  return handleSuccess(e);
});

lname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 3) {
    handleError(e, "The Name Must Be At Least 4 Characters");
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
    handleError(e, "The Name Must Be At Least 5 Characters");
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
    handleError(
      e,
      "The Password Field Must Be At Least 5 Characters and in proper form"
    );
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
