function log() {
    let ret = true;

    let u = document.getElementById('username').value.trim();
    let p = document.getElementById('password').value.trim();

    
    document.getElementById("myerror1").innerHTML = '';
    document.getElementById("myerror2").innerHTML = '';


    const validPasswords = [
        "gindy123", "ashraf123", "lotfy123",
        "ayman123", "helmy123", "meridean123",
        "wael123", "tarek123"
    ];

    
    if (u === '') {
        document.getElementById("myerror1").innerHTML = '*Email cannot be empty';
        ret = false;
    } else if (!u.endsWith('@gmail.com')) {
        document.getElementById("myerror1").innerHTML = '*Email must end with @gmail.com';
        ret = false;
    }

    if (p === '') {
        document.getElementById("myerror2").innerHTML = '*Password cannot be empty';
        ret = false;
    } else if (!validPasswords.includes(p)) {
        document.getElementById("myerror2").innerHTML = 'Incorrect password';
        ret = false;
    }
    if (ret) {
        document.querySelector('form').action = "your-homepage-link.html";//  put homepage link here
    }

    return ret;
}