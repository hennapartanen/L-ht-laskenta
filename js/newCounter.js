document.forms['newCounter'].addEventListener('submit', createNewCounter);

function createNewCounter(event){

    event.preventDefault();

    const name = document.forms['newCounter']['name'].value;
    const date = document.forms['newCounter']['date'].value;
    const time = document.forms['newCounter']['time'].value;


  if (name.length <= 0) {
    showMessage('error', 'Countername is required');
    return;
  }

  if (date.length <= 0) {
    showMessage('error', 'Insert the date');
    return;
}

  if (time.length <= 0) {
    showMessage('error', 'Insert the time');
    return;
}

let postData = `name=${name}$date=${date}$time${time}`;

console.log(postData);


let ajax = new XMLHttpRequest();
    ajax.onload = function(){
           const data = JSON.parse(this.responseText);
           console.log(data);
           if (data.hasOwnProperty('success')){
             window.location.href = "countershow.php?type=success&msg=Counter created!";
           } else {
               showMessage('error', data.error);

            } }

 ajax.open("POST", "backend/createNewCounter", true);
 ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

   
          }