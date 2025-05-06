function log() {
  ret = false;
  const usernames = document.querySelectorAll(`.user`);
  const passwords = document.querySelectorAll(`.pwd`);
  u = document.getElementById("username").value;
  p = document.getElementById("password").value;
  if (u == "") {
    document.getElementById("myerror1").innerHTML = "*Email cannot be empty";
    return ret;
  }

  if (p == "") {
    document.getElementById("myerror2").innerHTML = "*password cannot be empty";
    return ret;
  }
  console.log(u);
  console.log(p);
  for (let i = 0; i < usernames.length; i++) {
    console.log(usernames[i].textContent);
    console.log(passwords[i].textContent);
    if (u === usernames[i].textContent && p === passwords[i].textContent) {
      ret = true;
    }
  }
  if (!ret) {
    document.getElementById("myerror1").innerHTML =
      "*wrong username or password";
    return false;
  }
}
