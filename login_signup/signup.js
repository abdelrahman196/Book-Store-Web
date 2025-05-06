function log0() {
  const users = document.querySelectorAll(`.user`);
  let ret = true;

  // Clear previous error messages
  document.getElementById("myerror1").innerHTML = "";
  document.getElementById("myerror2").innerHTML = "";
  document.getElementById("myerror3").innerHTML = "";
  document.getElementById("myerror4").innerHTML = "";

  let u = document.getElementById("username").value;
  let p = document.getElementById("password").value;
  let phone = document.getElementById("phonenum").value;
  let e = document.getElementById("email").value;
  let phone1 = document.getElementById("phonenum");
  // Username check
  if (u === "") {
    document.getElementById("myerror1").innerHTML =
      "*Username cannot be empty*";
    ret = false;
  }
  // Password check
  if (p === "") {
    document.getElementById("myerror2").innerHTML =
      "*Password cannot be empty*";
    ret = false;
  }
  // Email check
  if (e === "") {
    document.getElementById("myerror3").innerHTML = "*Email cannot be empty*";
    ret = false;
  }
  // Phone check
  if (phone === "") {
    document.getElementById("myerror4").innerHTML =
      "*Phone number cannot be empty*";
    ret = false;
  }
  for (let i = 0; i < users.length; i++) {
    if (u === users[i].textContent) {
      document.getElementById("myerror1").innerHTML =
        "*someone already took the username*";
      return false;
    }
  }
  return ret;
}
function allowOnlyNumbers(event) {
  let charCode = event.which ? event.which : event.keyCode;
  if (charCode < 48 || charCode > 57) {
    event.preventDefault();
  }
}
