
function odkryj() {
let krotkie = document.getElementById("1").checked;
let srednie = document.getElementById("2").checked;
let poldlugie = document.getElementById("3").checked;
let dlugie = document.getElementById("4").checked;
let wynik = document.getElementById("wynik");
let cena = 0;
if(krotkie) cena = 25;
if(srednie) cena = 30;
if(poldlugie) cena = 40;
if(dlugie) cena = 50;
wynik.innerHTML = "Cena strzyżenia: " + cena;
}