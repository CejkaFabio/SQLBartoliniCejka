function Ordinamento(value)
{

    var appoggio = new Array();
    var appoggiotabella=new Array();
    var rows=document.getElementsByName(value);
    var tabella=document.getElementsByTagName('tr');
    for(var i=0;i<rows.length;i++)
    {
       appoggio[i]=rows[i].innerHTML.toUpperCase()+ i.toString();
       appoggiotabella[i]=tabella[i+1].innerHTML;
    }
    appoggio.sort();
    for(var i=0;i<appoggio.length;i++)
    {
        tabella[i+1].innerHTML=appoggiotabella[appoggio[i][appoggio[i].length-1]];
    }

}