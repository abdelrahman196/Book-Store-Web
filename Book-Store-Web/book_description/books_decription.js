document.addEventListener("DOMContentLoaded", function () {
  const data = document.querySelectorAll(`.data`);
  const title = data[0].textContent;
  const author = data[1].textContent;
  const price = data[2].textContent;
  const intro = data[3].textContent;
  const rating = data[4].textContent;
  const cat1 = data[5].textContent;
  const cat2 = data[6].textContent;
  const cat3 = data[7].textContent;
  const cart = document.querySelector(`.buy_button`);
  cart.addEventListener("click", function () {
    const id = Number(data[8].textContent);
    $.ajax({
      type: "POST",
      url: "include/add_cart.php",
      data: {
        b_id: id,
      },
      success: function (response) {
        // do something on success response
      },
      error: function (response) {
        // do something on error response
      },
    });
  });
});
