function hesapla(){
    var weight  = document.getElementById("weight").value;
var height  = document.getElementById("height").value;

var sonuc = weight/Math.pow(height,2);

document.getElementById("sonuc").innerText=sonuc.toFixed(2);    

if(sonuc<18.5){
    document.getElementById("kategori").innerText="Under Weight";
}else if(sonuc<=18.5 && sonuc<=25){
    document.getElementById("kategori").innerText="Normal";
}else if(sonuc<25 && sonuc<=30){
    document.getElementById("kategori").innerText="Over Weight";
}else if(sonuc>30){
    document.getElementById("kategori").innerText="Obese";
}
}
function temizle(){
    document.getElementById("kategori").innerText="";
    document.getElementById("sonuc").innerText="";
    document.getElementById("weight").value="";
    document.getElementById("height").value="";
}
