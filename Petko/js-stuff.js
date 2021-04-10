var parichki = document.getElementById("pari");
var num =0;
for(num = 0; num < 136; i++) {
    setTimeout(()=>{
        parichki.innerHTML = num;
        num++;
    }, 100);
};