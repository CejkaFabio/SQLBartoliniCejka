function Ordinamento(parola,elementi)
{
var vettore=new Array();
var vettore2=new Array();
for(var i=0;i<elementi.length;i++)
{
    vettore[i]=elementi[i].innerHTML+i.toString();
    vettore2[i]=parola[i+1].innerHTML;
}
vettore.sort();
for(var i=0;i<vettore.length;i++) {
parola[i+1].innerHTML=vettore2[vettore[i][vettore[i].length-1]];
}
}