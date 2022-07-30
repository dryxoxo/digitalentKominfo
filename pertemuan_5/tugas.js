// Tugas1
function hitung() {
    let x = +document.getElementById("bilangan1").value;
    let y = +document.getElementById("bilangan2").value;
    let operator = document.getElementById("inputState").value
    let hasil;

    if (operator == "tambah") {
        hasil = x + y;
        document.getElementById("hasil").innerHTML = hasil;
        console.log(hasil)
        console.log(typeof x);
    } else if (operator == "kurang") {
        hasil = x - y;
        document.getElementById("hasil").innerHTML = hasil;
    } else if (operator == "kali"){
        hasil = x * y;
        document.getElementById("hasil").innerHTML = hasil;
    } else if (operator == "bagi"){
        if (x && y == 0){
            document.getElementById("hasil").innerHTML = "Tidak Bisa Dibagi Nol";
        } else {
            hasil = x / y;
            document.getElementById("hasil").innerHTML = hasil;
        }
    }
}

// tugas2
function biaya(){
    let kendaraan = document.getElementById("inputKendaraan").value;
    let durasi = +document.getElementById("jam").value;
    let priceMotor = 3000;
    let priceMobil = 5000;
    let tarif = 0;

    if (kendaraan == "motor") {
        tarif = ((durasi-1)*1000)+priceMotor;
        document.getElementById("tarif").innerHTML = "Jumlah yang harus dibayar: "+  tarif;
    } else {
        tarif = ((durasi-1)*2000)+priceMobil;
        document.getElementById("tarif").innerHTML = "Jumlah yang harus dibayar: "+  tarif;
    }
}

//tugas3
function prima(){
    let inputan = +document.getElementById("bilMax").value;

    nextPrime:
    for (let i = 2; i <= inputan; i++) { // untuk setiap i...

        for (let j = 2; j < i; j++) { // mencari pembagi..
            if (i % j == 0) continue nextPrime; // bukan prima, pergi ke i berikutnya
        }

        document.getElementById("bilPrim").innerHTML = "Bilangan Prima: "+  i;
    }
}

let buah = ["apel", "mangga", "jeruk", "sirsak", "melon", "jambu"]
//tugas4
function tambah(){
    let inputArr = document.getElementById("inputData").value;

    buah.push(inputArr);
    document.getElementById("array").innerHTML = "Array baru: "+  buah;
    console.log(inputArr);
}

function hapus(){
    let inputArr = document.getElementById("inputData").value;
    removeA(buah, inputArr);
    document.getElementById("array").innerHTML = "Array baru: "+  buah;
}

function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}