document.addEventListener("DOMContentLoaded", function () {    
const rate_buts = document.querySelectorAll(`.rating`)
const list =document.querySelectorAll(`.rating_list`)

for(let i=0;i<3;i++){
    rate_buts[i].addEventListener("click", function(){
        if(list[i].style.display=="block"){
            list[i].style.display="none";
            rate_buts[i].textContent="Rate >";
        }
        else{
            list[i].style.display="block";
            rate_buts[i].textContent="Rate v";
        }
    })
}
const rate = document.querySelectorAll(`.rate`)
for(let i = 0;i<5;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[0].textContent=rate[i].textContent;
        list[0].style.display="none";
    })
}
for(let i = 5;i<10;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[1].textContent=rate[i].textContent;
        list[1].style.display="none";
    })
}
for(let i = 10;i<15;i++){
    rate[i].addEventListener("click",function(){
        rate_buts[2].textContent=rate[i].textContent;
        list[2].style.display="none";
    })
}
const sub = document.querySelector(`.sub`).addEventListener("click",function(){
    for(let i=0;i<3;i++){
        rate_buts[i].textContent="rate >";
    }
})
const coms = document.querySelectorAll(".pop");
const pops = document.querySelectorAll(".pop_up");
for(let i =0;i<3;i++){
    coms[i].addEventListener("click",function(){
        (pops[i].style.display==="none")?pops[i].style.display="block":pops[i].style.display="none";
    })
}
const popsubs = document.querySelectorAll(`.pop-sub`);
const popheads = document.querySelectorAll(`.pop-header`)
const popbodys = document.querySelectorAll(`.pop-body-big`)
for(let i = 0 ;i<3;i++){
    popsubs[i].addEventListener("click", function(){
        popheads[i].value ="";
        if(i==0){
            document.querySelector(`.pop-body`).value="";
        }
        else{
            popbodys[i-1].value="";
        }
        pops[i].style.display="none";
    })
}
});