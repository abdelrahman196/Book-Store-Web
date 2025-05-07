const book_img = document.querySelector("#bi");
const title = document.querySelector("#bn");
const author = document.querySelector("#ba");
const price = document.querySelector("#bp");
const intro = document.querySelector("#bd");
const rating = (4*57)+3;//rate <------
const cat1 = document.querySelector("#cat1");
const cat2 = document.querySelector("#cat2");
const cat3 = document.querySelector("#cat3");
const buy = document.querySelector("#buy");
book_img.src = "books_images/book-1.jpg";//img <------
title.textContent = "Romantic Comedy";//name <------
author.textContent = "Sofa Lotfy";//author <------
price.textContent = "300";//price <------
intro.textContent = "NEW YORK TIMES BESTSELLER • REESE’S BOOK CLUB PICK • A comedy writer thinks she’s sworn off love, until a dreamy pop star flips the script on all her assumptions—a “smart, sophisticated, and fun” (Oprah Daily) novel from the author of Eligible, Rodham, and Prep.";//intro <------
cat1.textContent = "Romantic";//category1 <------
cat2.textContent = "Comedy";//category2 <------
cat3.textContent = "none";//category3 <------
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
    buy.style.backgroundColor="#ba4828";
    // buy.style.backgroundColor="rgb(105, 28, 28)";
    buy.textContent="Remove from cart";
  }}
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

abooki1.src= "/books_images/book-10.jpg";
abooki2.src= "/books_images/book-10.jpg";
abooki3.src= "/books_images/book-10.jpg";
abooki4.src= "/books_images/book-10.jpg";
sbooki1.src= "/books_images/book-10.jpg";
sbooki2.src= "/books_images/book-10.jpg";
sbooki3.src= "/books_images/book-10.jpg";
sbooki4.src= "/books_images/book-10.jpg";

abookn1.textContent="abdo";
abookn2.textContent="abdo";
abookn3.textContent="abdo";
abookn4.textContent="abdo";
sbookn1.textContent="abdo";
sbookn2.textContent="abdo";
sbookn3.textContent="abdo";
sbookn4.textContent="abdo";