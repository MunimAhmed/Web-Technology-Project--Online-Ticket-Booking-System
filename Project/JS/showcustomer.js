const searchFieldInput = document.getElementById("search-input");

function fetchuser() {
  var fname = document.getElementById("search-input").value;
  var xttp = new XMLHttpRequest();
  xttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message").innerHTML = this.responseText;
    }
  };

  xttp.open("POST", "/Project/Control/adminsearchcustomer.php", true);
  xttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xttp.send("name=" + fname);
}

searchFieldInput.addEventListener("keyup", (e) => {
  fetchuser();
});
