
function startTime () {

var name = document.getElementById("namec").value


var background = document.getElementById().src;

    var date = document.getElementById("date").value
    var time = document.getElementById("time").value
    
     
     var hi = new Date(date + " " + time).toISOString();
 

    var countDownDate = new Date(hi).getTime();

    
     location.href = `countershow.html?cdd=${countDownDate}&cn=${name}&cb=${background}`;

       
}