function Cerca(parola,elementi) {
for(var i=0;i<elementi.length;i++)
{
    elementi[i].style.backgroundColor="white";
}
for(var i=0;i<elementi.length;i++)
{
    if(elementi[i].innerHTML.toUpperCase().search(parola.toUpperCase())!=-1)
    {
        elementi[i].style.backgroundColor = "lightblue";
    }
}
}