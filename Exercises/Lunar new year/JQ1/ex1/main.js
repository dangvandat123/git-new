$(document).ready(function () {
    $(".container").append("<p></p>");
    $("#KQ").click(function () {
        var daiValue=$("#dai").val();
        var rongValue=$("#rong").val();
        if(daiValue==''||rongValue==''){
            $("p").text(" nhập đầy đủ dữ liệu");
        }else{
            $("p").html("<p>Chu vi là: "+(parseFloat(daiValue)+parseFloat(rongValue))*2+"m <br> Diện tích là: "+(parseFloat(daiValue)*parseFloat(rongValue))+"m<sup>2</sup></p>");
        }
    });
});