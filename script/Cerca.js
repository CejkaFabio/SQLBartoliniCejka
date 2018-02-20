function Cerca(parola,elementi) {
for(var i=0;i<elementi.length;i++)
{
    elementi[i].style.backgroundColor="white";
}
for(var i=0;i<elementi.length;i++)
{
    if(elementi[i].innerHTML.search(parola)!=-1)
    {
        elementi[i].style.backgroundColor = "lightblue";
    }
}
}