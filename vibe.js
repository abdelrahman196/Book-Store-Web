document.addEventListener("DOMContentLoaded", function () {    
const rate_buts = document.querySelectorAll(`.rating`)
const list =document.querySelectorAll(`.rating_list`)
for(let i=0;i<3;i++){
    list[i].style.display="none";
}
for(let i=0;i<3;i++){
    rate_buts[i].addEventListener("click", function(){
        if(list[i].style.display=="block"){
            console.log(9)
            list[i].style.display="none";
            rate_buts[i].textContent="Rate >";
        }
        else{
            console.log(7)
            list[i].style.display="block";
            rate_buts[i].textContent="Rate v";
        }
    })
}
const rate = document.querySelectorAll(`.rate`)
for(let i = 0;i<5;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[0].textContent=rate[i].textContent;
        rate_buts[0].querySelector(`.rating_list`).style.display="none";
    })
}
for(let i = 5;i<10;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[1].textContent=rate[i].textContent;
        rate_buts[1].querySelector(`.rating_list`).style.display="none";
    })
}
for(let i = 10;i<15;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[2].textContent=rate[i].textContent;
        rate_buts[2].querySelector(`.rating_list`).style.display="none";
    })
}
const sub = document.querySelector(`.sub`).addEventListener("click",function(){
    for(let i=0;i<3;i++){
        rate_buts[i].textContent="rate >";
    }
})
});