function hitung(event) {
    event.preventDefault();
    let x = document.getElementById("bilangan1").value;
    let y = document.getElementById("bilangan2").value;
    let operator = document.getElementById("inputState").value
    let hasil;

    if (operator == "tambah") {
        hasil = x + y;
        document.getElementById("hasil").innerHTML = hasil;
    } else if (operator == "kurang") {
        hasil = x - y;
        document.getElementById("hasil").innerHTML = hasil;
    } else if (operator == "Bagi"){
        if (x || y == 0){
            document.getElementById("hasil").innerHTML = "Tidak Bisa Dibagi Nol";
        } else {
            hasil = x / y;
            document.getElementById("hasil").innerHTML = hasil;
        }
    }
    document.getElementById("demo").innerHTML = text;
  }

function biaya(){
    
    let priceMotor = 3000;
    let priceMobil = 5000;
}