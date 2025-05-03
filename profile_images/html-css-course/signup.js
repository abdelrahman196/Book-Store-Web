function log1() {
    let ret = true;

    // Clear previous error messages
    document.getElementById("myerror1").innerHTML = '';
    document.getElementById("myerror2").innerHTML = '';
    document.getElementById("myerror3").innerHTML = '';
    document.getElementById("myerror4").innerHTML = '';

    let u = document.getElementById('username').value;
    let p = document.getElementById('password').value;
    let phone = document.getElementById('phonenum').value;
    let e = document.getElementById('email').value;

    // Username check
    if (u === '') {
        document.getElementById("myerror1").innerHTML = '*Username cannot be empty*';
        ret = false;
    }

    // Password check
    if (p === '') {
        document.getElementById("myerror2").innerHTML = '*Password cannot be empty*';
        ret = false;
    }

    // Email check
    if (e === '') {
        document.getElementById("myerror3").innerHTML = '*Email cannot be empty*';
        ret = false;
    } else {
        let validEmails = ["youssef@gmail.com", "hany@gmail.com", "mostafa@gmail.com", "ayman@gmail.com"];
        if (!validEmails.includes(e)) {
            document.getElementById("myerror3").innerHTML = '*Incorrect Email*';
            ret = false;
        }
    }

    // Phone check
    if (phone === '') {
        document.getElementById("myerror4").innerHTML = '*Phone number cannot be empty*';
        ret = false;
    }

    return ret;
}

