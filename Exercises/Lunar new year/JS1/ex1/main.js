function checkNumber(){
    var so=document.getElementById("so").value;
    so=parseInt(so);
    if(so<5 || (so>20 && so<50) || so>100){
        document.getElementById("message").innerHTML= "<p>"+ so+" không nằm trong khoảng từ 5 đến 20 hoặc từ 50 đến 100 </p>";
    }
    if((so>=5&& so<=20)||(so>=50&&so<=100)){
        document.getElementById("message").innerHTML= "<p>"+ so+" nằm  khoảng từ 5 đến 20 hoặc từ 50 đến 100 </p>";
    }
}