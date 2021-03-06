function findMaxMin(){
    var one=parseInt(document.getElementById("one").value);
    var two=parseInt(document.getElementById("two").value);
    var three=parseInt(document.getElementById("three").value);
    var max,min;
    if(one>two&&one>three)
    {
        max=one;
        if(two>three){
            min=three;
        }else{
            min=two;
        }
    }else if(two>one&&two>three){
        max=two;
        if(one>three){
            min=three;
        }else{
            min=one;
        }
    }else{
        max=three;
        if(one>two){
            min=two;
        }else{
            min=one;
        }
    }
    document.getElementById("KQ").innerHTML="max= "+max+"<br>min= "+min;
}