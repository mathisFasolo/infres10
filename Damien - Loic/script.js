function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + btoa(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

var onload =  function () {
    console.log('chargé');
    document.getElementById('identifiant').value = atob(readCookie('id'));
    if (document.getElementById('identifiant').value.length !== 0) {
        var newP = document.createElement( 'p');
        document.body.insertBefore(newP, document.getElementById('form'));
        document.body.getElementsByTagName('p')[0].innerHTML = 'Bienvenue ' + document.getElementById('identifiant').value;
    }
}

var reset = function () {
    eraseCookie('id');
    eraseCookie('pswd');
}

var validation = function() {
    createCookie('id', document.getElementById('identifiant').value, 2);
    createCookie('pswd', document.getElementById('password').value, 2);
}

