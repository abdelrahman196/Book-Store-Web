const book_img = document.querySelector("#bi");
const title = document.querySelector("#bn");
const author = document.querySelector("#ba");
const price = document.querySelector("#bp");
const intro = document.querySelector("#bd");
const rating = (4*57)+3;
const cat1 = document.querySelector("#cat1");
const cat2 = document.querySelector("#cat2");
const cat3 = document.querySelector("#cat3");
const buy = document.querySelector("#buy");
book_img.src = "books_images/book-1.jpg";
title.textContent = "Romantic Comedy";
author.textContent = "Sofa Lotfy";
price.textContent = "300";
intro.textContent = "NEW YORK TIMES BESTSELLER • REESE’S BOOK CLUB PICK • A comedy writer thinks she’s sworn off love, until a dreamy pop star flips the script on all her assumptions—a “smart, sophisticated, and fun” (Oprah Daily) novel from the author of Eligible, Rodham, and Prep.";
cat1.textContent = "Romantic";
cat2.textContent = "Comedy";
cat3.textContent = "none";
if (cat3.textContent == "none") {
  document.querySelector("#cat3").style.display = "none";
}
document.getElementById("rate").style.width = rating+'px';
buy.addEventListener("click",function(){
  if(buy.textContent==="Remove from cart"){
    buy.style.backgroundColor="rgb(56, 33, 16)";
    buy.textContent="Add to cart";
  }
  else{if(buy.textContent==="Add to cart"){
    buy.style.backgroundColor="blue";
    buy.textContent="Remove from cart";
  }}
});