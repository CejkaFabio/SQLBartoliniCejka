function Caricamento(id) {
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(this.readystatechange==4&&this.status==200){
            document.getElementById("index.php").innerHTML= this.responseURL;
        }
    };
    xhttp.open("POST","Update.php",true);
}