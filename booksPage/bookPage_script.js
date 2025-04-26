document.addEventListener("DOMContentLoaded", function () {
  const check_all = document.querySelector(".myCheckbox");
  const sort_none = document.querySelector(".none_check");
  const books = document.querySelectorAll(`.book`);
  const booksA = books.length;
  const books_images = document.querySelectorAll(`.image`);
  const books_categories = document.querySelectorAll(`.category`);
  const number_categorys = books_categories.length;
  const ratings = document.querySelectorAll(`.rating`);
  const intros = document.querySelectorAll(`.intro`);
  const titles = document.querySelectorAll(`.title_text`);
  const authors = document.querySelectorAll(`.author_text`);
  const prices = document.querySelectorAll(`.price_text`);
  let book_categoriesM = new Array(booksA * 3);
  let ratingsM = new Array(booksA);
  let introsM = new Array(booksA);
  let titlesM = new Array(booksA);
  let authorsM = new Array(booksA);
  let pricesM = new Array(booksA);
  check_all.checked = true;
  sort_none.checked = true;
  const checks = document.querySelectorAll(".check");
  const side_checks = document.querySelectorAll(".side_check");
  const checksA = side_checks.length;
  const checkText = document.querySelectorAll(`.check_text`);
  for (let i = 0; i < booksA; i++) {
    book_categoriesM[i * 3] = books_categories[i * 3].textContent;
    book_categoriesM[i * 3 + 1] = books_categories[i * 3 + 1].textContent;
    book_categoriesM[i * 3 + 2] = books_categories[i * 3 + 2].textContent;
    ratingsM[i] = ratings[i].textContent;
    introsM[i] = intros[i].textContent;
    titlesM[i] = titles[i].textContent;
    authorsM[i] = authors[i].textContent;
    pricesM[i] = prices[i].textContent;
  }
  const clearNone = function () {
    for (let i = 0; i < booksA * 3; i++) {
      if (books_categories[i].textContent === "none") {
        books_categories[i].style.display = "none";
      } else {
        books_categories[i].style.display = "";
      }
    }
  };
  clearNone();
  const activeAll = function () {
    for (let x = 0; x < booksA; x++) {
      books[x].style.display = "";
    }
  };
  const activeCategory = function (name) {
    let len = 0;
    for (let x = 0; x < booksA; x++) {
      let book_categories = books[x].querySelectorAll(`.category`);
      let show = false;
      for (let y = 0; y < book_categories.length; y++) {
        if (name === books_categories[len + y].textContent) {
          show = true;
        }
      }
      if (show) {
        books[x].style.display = "";
      }
      len += book_categories.length;
    }
  };
  const deactiveCategory = function (name) {
    let len = 0;
    for (let x = 0; x < booksA; x++) {
      let book_categories = books[x].querySelectorAll(`.category`);
      let show = false;
      for (let y = 0; y < book_categories.length; y++) {
        if (name === books_categories[len + y].textContent) {
          show = true;
        }
      }
      if (show) {
        books[x].style.display = "none";
      }
      len += book_categories.length;
    }
  };
  for (let i = 0; i < checksA; i++) {
    checks[i].addEventListener("click", function () {
      if (i < 4) {
        side_checks[i].checked = true;
        if (i === 0) {
          reset_books();
        }
        if (i === 1) {
          sort_price();
        }
        if (i === 2) {
          sort_rate();
        }
        if (i === 3) {
          sort_alpha();
        }
      } else {
        if (i === 4) {
          if (!side_checks[i].checked) {
            side_checks[i].checked = true;
            for (let x = i + 1; x < checksA; x++) {
              side_checks[x].checked = false;
            }
            activeAll();
          }
        } else {
          if (side_checks[i].checked) {
            let notAlone = false;
            for (let x = 5; x < checksA; x++) {
              if (side_checks[x].checked && x !== i) {
                notAlone = true;
                break;
              }
            }
            side_checks[i].checked = false;
            deactiveCategory(checkText[i].textContent);
            len = 0;
            if (!notAlone) {
              side_checks[4].checked = true;
              activeAll();
            }
          } else {
            if (side_checks[4].checked) {
              for (let x = 0; x < booksA; x++) {
                books[x].style.display = "none";
              }
            }
            side_checks[i].checked = true;
            side_checks[4].checked = false;

            activeCategory(checkText[i].textContent);
            len = 0;
          }
        }
      }
    });
  }
  const switchT = function (first, secoand) {
    tmp = first.textContent;
    first.textContent = secoand.textContent;
    secoand.textContent = tmp;
  };
  const switchI = function (i, x) {
    if (x === i) {
      return;
    }
    switchT(books_categories[i * 3], books_categories[x * 3]);
    switchT(books_categories[i * 3 + 1], books_categories[x * 3 + 1]);
    switchT(books_categories[i * 3 + 2], books_categories[x * 3 + 2]);
    tmp = books_images[i * 2].src;
    books_images[i * 2].src = books_images[x * 2].src;
    books_images[x * 2].src = tmp;
    switchT(ratings[i], ratings[x]);
    switchT(titles[i], titles[x]);
    switchT(intros[i], intros[x]);
    switchT(authors[i], authors[x]);
    switchT(prices[i], prices[x]);
    clearNone();
  };
  const reset_books = function () {
    for (let i = 0; i < booksA; i++) {
      books_categories[i * 3].textContent = book_categoriesM[i * 3];
      books_categories[i * 3 + 1].textContent = book_categoriesM[i * 3 + 1];
      books_categories[i * 3 + 2].textContent = book_categoriesM[i * 3 + 2];
      ratings[i].textContent = ratingsM[i];
      intros[i].textContent = introsM[i];
      titles[i].textContent = titlesM[i];
      authors[i].textContent = authorsM[i];
      prices[i].textContent = pricesM[i];
      books_images[i * 2].src = `books_images/book-${i + 1}.jpg`;

      clearNone();
    }
  };
  const sort_rate = function () {
    for (let i = 0; i < booksA - 1; i++) {
      let chosen = i;
      for (let x = i + 1; x < booksA; x++) {
        if (
          Number(ratings[chosen].textContent) < Number(ratings[x].textContent)
        ) {
          chosen = x;
        }
      }
      switchI(i, chosen);
    }
  };
  const sort_alpha = function () {
    for (let i = 0; i < booksA - 1; i++) {
      let chosen = i;
      for (let x = i + 1; x < booksA; x++) {
        let first = titles[chosen].textContent.toLowerCase();
        let secoand = titles[x].textContent.toLowerCase();
        if (first.localeCompare(secoand) === 1) {
          chosen = x;
        }
      }
      switchI(i, chosen);
    }
  };
  const sort_price = function () {
    for (let i = 0; i < booksA - 1; i++) {
      let chosen = i;
      for (let x = i + 1; x < booksA; x++) {
        if (
          Number(prices[chosen].textContent.replace("$", "")) <
          Number(prices[x].textContent.replace("$", ""))
        ) {
          chosen = x;
        }
      }
      switchI(i, chosen);
    }
  };
});
