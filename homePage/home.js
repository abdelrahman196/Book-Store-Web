document.addEventListener("DOMContentLoaded", function () {
  const divs = document.querySelectorAll(`.product-card`);
  const len = divs.length;
  for (let i = 0; i < len; i++) {
    divs[i].addEventListener("click", function () {
      let id = this.querySelector(`.product-image`).src;
      id = id.replace(/\D/g, "");
      $.ajax({
        type: "POST",
        url: "include/b_d.php",
        data: {
          b_id: id,
        },
        success: function (response) {
          // do something on success response
          window.location.href = "book_description.php";
          console.log(8);
        },
        error: function (response) {
          console.log(8);
          // do something on error response
        },
      });
    });
  }
});
