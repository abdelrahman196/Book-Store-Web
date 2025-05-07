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

        window.location.href = "booksPage.php";
      },
      error: function (response) {
        // do something on error response
      },
    });
  });
  const prof = document.querySelector(`.profile-pic`);
  prof.addEventListener("click", function () {
    window.location.href = "profile.php";
  });
});
