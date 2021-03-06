$(document).ready(function () {
    $("#KQ").click(function () {
        var so=$("#so").val();
        var le='';
        var chan='';
        
        if(so==''){
            $('p').text('không hợp lệ')
        }else{
            for(var i=1;i<=so;i++){
                if (i%2==0){
                    chan+=i+',';
                }else{
                    le+=i+',';
                }
            }
            $('p').html('Các số chẵn '+so+': '+chan+'<br>Các số lẻ '+so+': '+le);
            
        }
    });
});