const rate_buts = document.querySelectorAll(`.rating`)
for(let i=0;i<3;i++){
    rate_buts[i].addEventListener("click", function(){
        const list =this.querySelector(`.rating_list`)
        if(list.display==="block"){
            list.display="none";
            rate_buts[i].textContent="Rate >";
        }
        else{
            list.display="block";
            rate_buts[i].textContent="Rate v";
        }
    })
}
const rate_op = document.querySelectorAll(`.rate`)
for(let i = 0;i<5;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[0].textContent=rate[i].textContent;
        rate_buts[0].querySelector(`.rating_list`).display="none";
    })
}
for(let i = 5;i<10;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[1].textContent=rate[i].textContent;
        rate_buts[1].querySelector(`.rating_list`).display="none";
    })
}
for(let i = 10;i<15;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[2].textContent=rate[i].textContent;
        rate_buts[2].querySelector(`.rating_list`).display="none";
    })
}
const sub = document.querySelector(`.sub`).addEventListener("click",function(){
    for(let i=0;i<3;i++){
        rate_buts[i].textContent="rate >";
    }
})
