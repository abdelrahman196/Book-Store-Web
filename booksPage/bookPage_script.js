
document.addEventListener("DOMContentLoaded", function() {
    const check_all= document.querySelector('.myCheckbox');
    const sort_none= document.querySelector(".none_check");








    check_all.checked = true;
    sort_none.checked = true;
    const checks =document.querySelectorAll(".check");
    const side_checks=document.querySelectorAll(".side_check");
    for(let i=0;i<15;i++){
    checks[i].addEventListener("click", function() {
        side_checks[i].checked=true;
        console.log(10)
    } )
}

  });