function log() {
    ret=true;
    u = document.getElementById('username').value;
    p = document.getElementById('password').value;
    if (u==''){
        document.getElementById("myerror1").innerHTML='*Email cannot be empty';
       // alert('Email cannot be empty')
        ret=false;
    }
   
    if(p==''){
        document.getElementById("myerror2").innerHTML='*password cannot be empty';
        //alert('password cannot be empty')
        ret=false;
    }
    else if(u != 'youssef@gmail.com' && u!="hany@gmail.com" && u!="mostafa@gmail.com" && u !="ayman@gmail.com") {
        document.getElementById("myerror1").innerHTML='*Incorrect Email';
        //alert('Incorrect username');
        ret = false;
    }
    else if (u == 'youssef@gmail.com' && p == 'gindy123') {
        document.querySelector('form').action = "useradmin.php";
    }
    else if (u == 'hany@gmail.com' && p == 'ashraf123'){
        document.querySelector('form').action = "customers.php";
    }
    else if(u == 'mostafa@gmail.com' && p == 'lotfy123') {
        document.querySelector('form').action = "dashboard.php";
    }
    else if(u =='abdallah@gmail.com'&& p =='ayman123'){
        document.querySelector('form').action = "dashboard.php";   


    } 
    else{
        document.getElementById("myerror2").innerHTML='*Incorrect password';
        //alert('Incorrect password');
        ret = false;
    }
return ret;
}