document.addEventListener("DOMContentLoaded", function () {
    const data = document.querySelectorAll(`.data`);
    const book_img = document.querySelector("#bi");
    const title = document.querySelector("#bn");
    const author = document.querySelector("#ba");
    const price = document.querySelector("#bp");
    const intro = document.querySelector("#bd");
    const rating = Number(data[4].textContent) * 57 + 3; //rate <------
    const cat1 = document.querySelector("#cat1");
    const cat2 = document.querySelector("#cat2");
    const cat3 = document.querySelector("#cat3");
    const buy = document.querySelector("#buy");
    const books = document.querySelectorAll(`.book_author`);
    const booksA = books.length;
    for (let i = 0; i < booksA; i++) {
      books[i].addEventListener("click", function () {
        let id = this.querySelector(`.recommend_book`).src;
        id = id.replace(/\D/g, "");
        $.ajax({
          type: "POST",
          url: "include/b_d.php",
          data: {
            b_id: id,
          },
          success: function (response) {
            // do something on success response
            window.location.href = "book_description 2.php";
          },
          error: function (response) {
            // do something on error response
          },
        });
      });
    }
    const cart = Number(document.querySelector(`.cart`).textContent);
    if(cart){
      buy.style.backgroundColor = "#ba4828";
      // buy.style.backgroundColor="rgb(105, 28, 28)";
      buy.textContent = "Remove from cart";
    }
    book_img.src = "books_images/book-" + data[8].textContent + ".jpg"; //img <------
    title.textContent = data[0].textContent; //name <------
    author.textContent = data[1].textContent; //author <------
    price.textContent = data[2].textContent; //price <------
    intro.textContent = data[3].textContent; //intro <------
    cat1.textContent = data[5].textContent; //category1 <------
    cat2.textContent = data[6].textContent; //category2 <------
    cat3.textContent = data[7].textContent; //category3 <------
    if (cat1.textContent == "none") {
      document.querySelector("#cat1").style.display = "none";
    }
    if (cat2.textContent == "none") {
      document.querySelector("#cat2").style.display = "none";
    }
    if (cat3.textContent == "none") {
      document.querySelector("#cat3").style.display = "none";
    }
    document.getElementById("rate").style.width = rating + "px";
    buy.addEventListener("click", function () {
      if (buy.textContent === "Remove from cart") {
        const id = Number(data[8].textContent);
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
        buy.style.backgroundColor = "rgb(56, 33, 16)";
        buy.textContent = "Add to cart";
      } else {
        if (buy.textContent === "Add to cart") {
          buy.style.backgroundColor = "#1a2b4c";
          // buy.style.backgroundColor="rgb(105, 28, 28)";
          buy.textContent = "Remove from cart";
          const id = Number(data[8].textContent);
          $.ajax({
            type: "POST",
            url: "include/add_cart.php",
            data: {
              b_id: id,
            },
            success: function (response) {
              location.reload();
              document.querySelector(`.cart_a`).textContent=Number(  document.querySelector(`.cart_a`).textContent)+1;
              // do something on success response
            },
            error: function (response) {
              // do something on error response
            },
          });
        }
      }
    });
    const abooki1 = document.querySelector("#abi1");
    const abooki2 = document.querySelector("#abi2");
    const abooki3 = document.querySelector("#abi3");
    const abooki4 = document.querySelector("#abi4");
    const sbooki1 = document.querySelector("#sbi1");
    const sbooki2 = document.querySelector("#sbi2");
    const sbooki3 = document.querySelector("#sbi3");
    const sbooki4 = document.querySelector("#sbi4");
  
    const abookn1 = document.querySelector("#abn1");
    const abookn2 = document.querySelector("#abn2");
    const abookn3 = document.querySelector("#abn3");
    const abookn4 = document.querySelector("#abn4");
    const sbookn1 = document.querySelector("#sbn1");
    const sbookn2 = document.querySelector("#sbn2");
    const sbookn3 = document.querySelector("#sbn3");
    const sbookn4 = document.querySelector("#sbn4");
  
    abooki1.src = "books_images/book-" + data[17].textContent + ".jpg";
    abooki2.src = "books_images/book-" + data[19].textContent + ".jpg";
    abooki3.src = "books_images/book-" + data[21].textContent + ".jpg";
    abooki4.src = "books_images/book-" + data[23].textContent + ".jpg";
    sbooki1.src = "books_images/book-" + data[9].textContent + ".jpg";
    sbooki2.src = "books_images/book-" + data[11].textContent + ".jpg";
    sbooki3.src = "books_images/book-" + data[13].textContent + ".jpg";
    sbooki4.src = "books_images/book-" + data[15].textContent + ".jpg";
  
    abookn1.textContent = data[18].textContent;
    abookn2.textContent = data[20].textContent;
    abookn3.textContent = data[22].textContent;
    abookn4.textContent = data[24].textContent;
    sbookn1.textContent = data[10].textContent;
    sbookn2.textContent = data[12].textContent;
    sbookn3.textContent = data[14].textContent;
    sbookn4.textContent = data[16].textContent;
  });
  