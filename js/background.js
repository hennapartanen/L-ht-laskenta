


function showpicc() {

    document.getElementById('chrish').style.border = "3px solid black";
    document.getElementById('chris').style.display='block';


    const element = document.getElementById('calc')

    element.addEventListener("click", () => {
      

        var name = document.getElementById("namec").value

    var background = document.getElementById('chrish').getAttribute("src")
    
    
    
        var date = document.getElementById("date").value
        var time = document.getElementById("time").value
        
         
         var hi = new Date(date + " " + time).toISOString();
     
    
        var countDownDate = new Date(hi).getTime();
    
        
         location.href = `countershow.html?cdd=${countDownDate}&cn=${name}&cb=${background}`;
         
})};




function showpice() {

    document.getElementById('emth').style.border = "3px solid black";
    document.getElementById('emt').style.display='block';


    const element = document.getElementById('calc')

    element.addEventListener("click", () => {
      

        var name = document.getElementById("namec").value

    var background = document.getElementById('emth').getAttribute("src")
    
        var date = document.getElementById("date").value
        var time = document.getElementById("time").value
        
         
         var hi = new Date(date + " " + time).toISOString();
     
    
        var countDownDate = new Date(hi).getTime();
    
         location.href = `countershow.html?cdd=${countDownDate}&cn=${name}&cb=${background}`;

})};



function showpicn() {

    document.getElementById('newh').style.border = "3px solid black";
    document.getElementById('new').style.display='block';

    const element = document.getElementById('calc')

    element.addEventListener("click", () => {
      
        var name = document.getElementById("namec").value

    var background = document.getElementById('newh').getAttribute("src")
    
    
        var date = document.getElementById("date").value
        var time = document.getElementById("time").value
        
         
         var hi = new Date(date + " " + time).toISOString();
     
    
        var countDownDate = new Date(hi).getTime();
    
        
        
         location.href = `countershow.html?cdd=${countDownDate}&cn=${name}&cb=${background}`;
})};




function showpicv() {

    document.getElementById('vach').style.border = "3px solid black";
    document.getElementById('vac').style.display='block';
  
    const element = document.getElementById('calc')

    element.addEventListener("click", () => {
      
        var name = document.getElementById("namec").value
        
    var background = document.getElementById('vach').getAttribute("src")
    
    
    
        var date = document.getElementById("date").value
        var time = document.getElementById("time").value
        
         
         var hi = new Date(date + " " + time).toISOString();
     
    
        var countDownDate = new Date(hi).getTime();
    
        
        
         location.href = `countershow.html?cdd=${countDownDate}&cn=${name}&cb=${background}`;
})};


