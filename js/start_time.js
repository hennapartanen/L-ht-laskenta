
function startTime() {
    
    const queryString = window.location.search;
    console.log(queryString);

    const urlParams = new URLSearchParams(queryString);

    const cdd = urlParams.get('cdd')
     console.log(cdd);
  
     const cn = urlParams.get('cn')
     console.log(cn);

     const cb = urlParams.get('cb')
     console.log(cb);


    var countDownDate = cdd;

    var header = cn;

    var background = cb;

    var x = setInterval(function() {

   var now = new Date().getTime();


  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);



  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Counter is done ";
  }
 
 }) ;1000;



 document.getElementById("countname").innerHTML = header;

 document.getElementById("bgg").src = background;

};

