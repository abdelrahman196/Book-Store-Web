document.addEventListener("DOMContentLoaded", function() {
  const profileImg = document.getElementById("profile-img");
      profileImg.addEventListener("click", function() {
          window.location.href = "./index.html"; 
  })
});

// Theme Button
const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {
  btn.classList.toggle('active');
  const icon = btn.querySelector('.btn__icon');
  icon.classList.add('animated');
  // Remove animation class after it completes
  setTimeout(() => {
    icon.classList.remove('animated');
  }, 500);
});  