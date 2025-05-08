document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(`.cart_a`).textContent =
      document.querySelector(".cart_ad").textContent;
    const sub = document.querySelector(`.sub`);
    sub.addEventListener("click", function () {
      const search_text = document.querySelector(`.search_text`).value;
      if (search_text === "") {
        return;
      }
      $.ajax({
        type: "POST",
        url: "include/search.php",
        data: {
          s_t: search_text,
        },
        success: function (response) {
          // do something on success response
  
          window.location.href = "booksPage 2.php";
        },
        error: function (response) {
          // do something on error response
        },
      });
    });
    const prof = document.querySelector(`.profile-pic`);
    prof.addEventListener("click", function () {
      window.location.href = "profile 2.php";
    });
    const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {
  btn.classList.toggle('active');
  const icon = btn.querySelector('.btn__icon');
  icon.classList.add('animated');
  // Remove animation class after it completes
  setTimeout(() => {
    icon.classList.remove('animated');
  }, 500);
  let url = window.location.href
  url =url.replace("%202" , "");
  window.location.href = url;
});  
  btn.classList.toggle('active');
  });