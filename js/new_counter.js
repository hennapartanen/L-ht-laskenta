



var calc = document.getElementById("calc")

calc.addEventListener("click", function() {




    var date = document.getElementById("date").value,
      time = document.getElementById("time").value
    
     
  
   var hi = new Date(date + " " + time).toString();
 

var countDownDate = new Date(hi).getTime();


var x = setInterval(function() {


  var now = new Date().getTime();

  var distance = countDownDate - now;
    
 
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  function startTime() {
  
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Counter is done ";
  }
}

 
}, 1000);})