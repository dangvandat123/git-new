function calculate(){
    var so=parseInt(document.getElementById("so").value);
    var KQ=1;
    document.getElementById("KQ").innerHTML=number+"!="
    for (var i=1;i<=so;i++){
        KQ*=i;
        if(i==so){
            document.getElementById("KQ").innerHTML+=i+" = "+result;
        }else{
            document.getElementById("KQ").innerHTML+=i+'*';
        }
    }
}