
document.addEventListener("DOMContentLoaded", function() {
    const check_all= document.querySelector('.myCheckbox');
    const sort_none= document.querySelector(".none_check");

    const books_categories=document.querySelectorAll(`.category`);
    const number_categorys=books_categories.length;
    for(let i=0;i<length;i++){
        if(books_categories[i].textContent==='none'){
            books_categories[i].style.display='none';
        }
    }





    check_all.checked = true;
    sort_none.checked = true;
    const checks =document.querySelectorAll(".check");
    const side_checks=document.querySelectorAll(".side_check");
    const checksA =  side_checks.length;
    for(let i=0;i<checksA;i++){
    checks[i].addEventListener("click", function() {
        if(i<4){
            side_checks[i].checked=true;
        }
        else{
            if(i===4){
                if(!(side_checks[i].checked)){
                    side_checks[i].checked=true;
                    for(let x=i+1;x<checksA;x++){
                        side_checks[x].checked=false;
                    }
                }
            }
            else{
                if(side_checks[i].checked){
                    let notAlone=false;
                    for(let x=5;x<checksA;x++){
                        if(side_checks[x].checked && x!==i){
                            notAlone=true;
                            break;
                        }
                    }
                    side_checks[i].checked=false;
                    if(!notAlone){
                        side_checks[4].checked=true;
                    }
                }
                else{
                    side_checks[i].checked=true;
                    side_checks[4].checked=false;
                }
            }
        }
    } )
}

  });