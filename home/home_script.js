document.addEventListener("DOMContentLoaded", function() {
  const profileImg = document.getElementById("profile-img");
      profileImg.addEventListener("click", function() {
          window.location.href = "./profile.html"; 
  })
});

document.addEventListener("DOMContentLoaded", function() {
  const home = document.getElementById("nav__item1");
      home.addEventListener("click", function() {
          window.location.href = "./home.html"; 
  })
});

