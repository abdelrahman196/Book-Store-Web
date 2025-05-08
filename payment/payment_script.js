document.addEventListener("DOMContentLoaded", function () {
  const del_but = document.querySelectorAll(`.delete_button`);
  const orders = document.querySelectorAll(`.book`);
  const data = document.querySelectorAll(`.data`);
  let amount = orders.length;
  let dataA = data.length;
  const tax = 0.05;
  const b_titles = document.querySelectorAll(`.book_name`);
  const b_images = document.querySelectorAll(`.book_image`);
  const b_prices = document.querySelectorAll(`.price_details`);
  const total_value = document.querySelector(".total_value");
  let titles = new Array(amount);
  let prices = new Array(amount);
  let ratings = new Array(amount);
  let authors = new Array(amount);
  let images = new Array(amount);
  let ids = document.querySelectorAll(`.id`);
  for (let i = 0; i < amount; i++) {
    titles[i] = data[i * 9].textContent;
    prices[i] = data[i * 9 + 2].textContent;
    ratings[i] = data[i * 9 + 4].textContent;
    authors[i] = data[i * 9 + 1].textContent;
    ids[i].textContent = images[i] = data[i * 9 + 8].textContent;
  }
  let items_x = document.querySelector(".stuff");
  items_x.textContent = `items(${amount})`;
  let values = document.querySelectorAll(".value");
  const price_sum = function () {
    let sum = 0;
    for (let i = 0; i < amount; i++) {
      sum += Number(prices[i]);
    }
    return sum;
  };
  const assign_values = function () {
    values[0].textContent = values[1].textContent = price_sum() + "$";
    values[2].textContent = String(tax * price_sum()) + "$";
    total_value.textContent = String((tax + 1) * price_sum()) + "$";
    for (let i = 0; i < amount; i++) {
      b_titles[i].textContent = data[i * 9].textContent;
      b_images[i].src =
        `books_images/book-` + data[i * 9 + 8].textContent + `.jpg`;
      b_prices[i].textContent = `Price: ${data[i * 9 + 2].textContent}$`;
    }
  };
  assign_values();
  for (let i = 0; i < amount; i++) {
    del_but[i].addEventListener("click", function () {
      const id = Number(this.querySelector(`.id`).textContent);
      $.ajax({
        type: "POST",
        url: "include/del_c.php",
        data: {
          b_id: id,
        },
        success: function (response) {
          // do something on success response
          location.reload();
        },
        error: function (response) {
          // do something on error response
        },
      });
    });
  }
  document.querySelector(`.con_button`).addEventListener("click", function () {
    let id = new Array(amount);
    for (let i = 0; i < amount; i++) {
      id[i] = Number(data[i * 9 + 8].textContent);
    }
    $.ajax({
      type: "POST",
      url: "include/buy_c.php",
      data: {
        id_arr: id,
        ar_len: amount,
      },
      success: function (response) {
        // do something on success response
        location.reload();
      },
      error: function (response) {
        // do something on error response
      },
    });
  });
});
