function log1() {
    let ret = true;

    document.getElementById("myerror1").innerHTML = '';
    document.getElementById("myerror2").innerHTML = '';
    document.getElementById("myerror3").innerHTML = '';
    document.getElementById("myerror4").innerHTML = '';

    let u = document.getElementById('username').value.trim();
    let p = document.getElementById('password').value.trim();
    let phone = document.getElementById('phonenum').value.trim();
    let e = document.getElementById('email').value.trim();

    
    if (u === '') {
        document.getElementById("myerror1").innerHTML = '*Username cannot be empty*';
        ret = false;
    }

    if (p === '') {
        document.getElementById("myerror2").innerHTML = '*Password cannot be empty*';
        ret = false;
    }

    if (e === '') {
        document.getElementById("myerror3").innerHTML = '*Email cannot be empty*';
        ret = false;
    } else if (!e.endsWith('@gmail.com')) {
        document.getElementById("myerror3").innerHTML = '*Email must end with @gmail.com*';
        ret = false;
    }

    
    if (phone === '') {
        document.getElementById("myerror4").innerHTML = '*Phone number cannot be empty*';
        ret = false;
    }

    if (ret) {
        document.querySelector('form').action = "homepage.html"; // Replace with your homepage URL
    }

    return ret;
}

function allowOnlyNumbers(event) {
    let charCode = event.which ? event.which : event.keyCode;
    if (charCode < 48 || charCode > 57) {
        event.preventDefault();
    }
}
