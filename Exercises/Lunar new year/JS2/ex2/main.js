function check(){
    var salary=document.getElementById("salary");
    var KQ=document.getElementById("KQ");
    if(parseInt(salary.value)>500){
        KQ.innerHTML='Thuế  phải nộp = '+ salary.value/10;
    }else{
        KQ.innerHTML=' không phải nộp thuế!';
    }
}