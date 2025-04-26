
document.addEventListener("DOMContentLoaded", function() {
    const check_all= document.querySelector('.myCheckbox');
    const sort_none= document.querySelector(".none_check");
    const books = document.querySelectorAll(`.book`);
    const booksA = books.length;
    const books_categories=document.querySelectorAll(`.category`);
    const number_categorys=books_categories.length;
    for(let i=0;i<length;i++){
        if(books_categories[i].textContent==='none'){
            books_categories[i].style.display='none';
        }
    }

    let len=0;
    check_all.checked = true;
    sort_none.checked = true;
    const checks =document.querySelectorAll(".check");
    const side_checks=document.querySelectorAll(".side_check");
    const checksA =  side_checks.length;
    const checkText = document.querySelectorAll(`.check_text`);
    const activeAll = function(){
        for(let x=0;x<booksA;x++){
            books[x].style.display='';
        }
    }
    const activeCategory = function(name){
        let len=0;
        for(let x=0;x<booksA;x++){
            let book_categories = books[x].querySelectorAll(`.category`);
            let show=false;
            for(let y=0;y<book_categories.length;y++){
                if(name===books_categories[len+y].textContent){
                    show=true;
                }
            }
            if(show){
                books[x].style.display=""
            }
            len+=book_categories.length;
        }
    }
    const deactiveCategory = function(name){
        let len=0;
        for(let x=0;x<booksA;x++){
            let book_categories = books[x].querySelectorAll(`.category`);
            let show=false;
            for(let y=0;y<book_categories.length;y++){
                if(name===books_categories[len+y].textContent){
                    show=true;
                }
            }
            if(show){
                books[x].style.display="none";
            }
            len+=book_categories.length;
        }
    }
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
                    activeAll();
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
                    deactiveCategory(checkText[i].textContent);
                    len=0
                    if(!notAlone){
                        side_checks[4].checked=true;
                        activeAll()
                    }
                }
                else{
                    if(side_checks[4].checked){
                        for(let x=0;x<booksA;x++){
                            books[x].style.display='none';
                        }
                    }
                    side_checks[i].checked=true;
                    side_checks[4].checked=false;

                    activeCategory(checkText[i].textContent);
                    len=0;
                }
            }
        }
    } )
}

  });