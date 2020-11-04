
function startTime () {


    var date = document.getElementById("date").value,
    time = document.getElementById("time").value
    
     
     var hi = new Date(date + " " + time).toISOString();
 

    var countDownDate = new Date(hi).getTime();
  
        location.href = `countershow.html?cdd=${countDownDate}`;

       
}