console.log('testing');

var display = document.getElementById('tampilan');

function inputValue(value) {
    display.value += value;
}

function operasiValue(operasi){
    // mengambil isi input dan menghapus spasi
    let menampil = display.value.trim();
    // mengambil karakter terakhir dari inputan 
    var terakhir = menampil.slice(-1);
    //pengecekan jika sudah ada operator, ambil akhir
    if ("+-*/".includes(terakhir)) return;
    //hasil
    display.value += operasi;
}
 
function hapustampilan() {
    display.value = "";
}

function kalkulasi() {    
    try {
        display.value = eval(display.value);
    } catch  {
        alert('error');
        display.value = "";
    }
}