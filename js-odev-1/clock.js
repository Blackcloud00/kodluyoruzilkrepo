setInterval(dijitalsaat, 1000); 
function dijitalsaat(){
var suan = new Date();
var sa = suan.getHours();
var dk= suan.getMinutes();
var sn = suan.getSeconds();
sa = (sa<10)? "0"+sa:sa;
sn = (sn<10)? "0"+sn:sn;
dk = (dk<10)? "0"+dk:dk;
zaman = sa+":" + dk +":"+sn;
var saat = document.getElementById("myClock").innerHTML = zaman;
}