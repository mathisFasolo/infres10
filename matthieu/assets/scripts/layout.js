function init(){
    const client = document.body.clientHeight;
    const toolbar = document.getElementById('toolbar').clientHeight;
    const filters = document.getElementById('filter');
    const filterTitre = document.getElementById('filter_titre');
    const filterGenres = document.getElementById('filter_genres');
    const filterYears = document.getElementById('filter_year');

    const heightF = filters ? filters.clientHeight : 0;
    const heightT = filterTitre ? filterTitre.clientHeight : 0;
    const heightG = filterGenres ? filterGenres.clientHeight : 0;
    const heightY = filterYears ? filterYears.clientHeight : 0;

    const height = (client - toolbar - heightT - heightF - heightG - heightY - 70);

    document.getElementById("films").style.height =  height + "px";
}

function resize(){
    init();
}

function virus(){
    app.virus();
}

function checkPassword(pass){
    if(password == pass){
        return true
    }else{
        return false
    }
}

password = "ae8ab224df0a205221a282574a4d8a309a08816dad95f153a943ce7683f74f93" //SHA-256
window.onresize = resize;
