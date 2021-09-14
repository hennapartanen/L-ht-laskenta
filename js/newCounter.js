
document.forms['newCounter'].addEventListener('submit', createNewCounter);

function createNewCounter(event){

    event.preventDefault();

    const topic = document.forms['newCounter']['topic'].value;
    const date = document.forms['newCounter']['date'].value;
    const time = document.forms['newCounter']['time'].value;


  if (topic.length <= 0) {
    showMessage('error','Countername is required');
    return;
  }

  if (date.length <= 0) {
    showMessage('error','Insert the date');
    return;
}

  if (time.length <= 0) {
    showMessage('error','Insert the time');
    return;
}

let postData = `topic=${topic}$date=${date}$time${time}`;

console.log(postData);


let ajax = new XMLHttpRequest();
    ajax.onload = function(){
           const data = JSON.parse(this.responseText);
           if (data.hasOwnProperty('success')) {
             window.location.href = "countershow.php?type=success&msg=yey";
           } else {
               showMessage('error', data.error);

            } }

 ajax.open("POST", "backend/createNewCounter.php", true);
 ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 ajax.send("topic="+topic+"&date="+date+"&time="+time);
   
          }