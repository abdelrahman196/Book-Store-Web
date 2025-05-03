document.addEventListener("DOMContentLoaded", function (){
  let amount = 4;
  const tax = 0.05;
  const total_value =document.querySelector(".total_value");
  let titles = new Array(amount);
  titles = ["Romantic Comedy", "The Divine Comedy", "Importance of Being Earnest", "Wags 1: Good Boy: A Friends with Benefits Hockey Romance"] ;
  let prices = new Array(amount);
  prices = [300, 100, 250, 200];
  let ratings = new Array(amount);
  ratings = [4.3, 4.0, 4.2, 3.5];
  let authors = new Array(amount);
  authors = ["sofa lotfy", "Abdallah Ayman", "Abdo Mrieden", "Mariam Tarek"];
  let images = new Array(amount);
  images = [1, 2, 3, 7];
  let items_x = document.querySelector('.stuff');
  items_x.textContent = `items(${amount})`;
  let values = document.querySelectorAll('.value');
  const price_sum = function(){
    let sum = 0;
    for (let i = 0 ; i < amount; i++){
      sum += prices[i];
    }
    return sum;
  }
  const assign_values =function(){
    values[0].textContent = values[1].textContent = price_sum() + "$";
    values[2].textContent = String(tax*price_sum()) + "$";
    total_value.textContent = String((tax+1)*price_sum()) + "$";

  }
  assign_values();
})