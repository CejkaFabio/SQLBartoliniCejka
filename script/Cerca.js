function Cerca(parola,elementi) {
for(var i=0;i<elementi.length;i++)
{
    if(parola==elementi[i].innerHTML){
        elementi[i].style.backgroundColor="lightblue";
    }
}
}