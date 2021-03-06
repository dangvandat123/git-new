function showEquation(){
    var A=parseInt(document.getElementById("A").value);
    var B=parseInt(document.getElementById("B").value);
    document.getElementById("PT").innerHTML= A+"x"+" + "+B +"=0";
}
function findX(){
    var A=parseInt(document.getElementById("A").value);
    var B=parseInt(document.getElementById("B").value);
    document.getElementById("KQ").innerHTML="x= "+(-B/A);
}