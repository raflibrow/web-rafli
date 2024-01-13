function tambah(){
    var hasil = document.getElementById("hasil");
    var numA = document.getElementById("numberA").value
    var numB = document.getElementById("numberB").value
    var c = Number(numA) + Number(numB);

    if(c < 10){
        c = "0" + c;
    }else {
        c = c
    }
    hasil.innerHTML = c;
}

function kurang(){
    var hasil = document.getElementById("hasil");
    var numA = document.getElementById("numberA").value
    var numB = document.getElementById("numberB").value
    var c = Number(numA) - Number(numB);

    if(c < 10){
        c = "0" + c;
    }else {
        c = c
    }
    hasil.innerHTML = c;
}

function kali(){
    var hasil = document.getElementById("hasil");
    var numA = document.getElementById("numberA").value
    var numB = document.getElementById("numberB").value
    var c = Number(numA) * Number(numB);

    if(c < 10){
        c = "0" + c;
    }else {
        c = c
    }
    hasil.innerHTML = c;
}

function bagi(){
    var hasil = document.getElementById("hasil");
    var numA = document.getElementById("numberA").value
    var numB = document.getElementById("numberB").value
    var c = Number(numA) / Number(numB);

    if(c < 10){
        c = "0" + c;
    }else {
        c = c
    }
    hasil.innerHTML = c;
}

