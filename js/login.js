
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString)


if (urlParams.has('msg') && urlParams.has('type')) {
    const msg = urlParams.get('msg');
    const type = urlParams.get('type');

    showMessage(type, msg);
};

document.forms['login'].addEventlistener('submit', loginUser);

function loginUser(event){
    event.preventDefault();
    const username = document.forms['login']['username'].value;
    const passwd = document.forms['login']['passwd'].value;

    if (username.lenght <= 0) {
        showMessage('error', 'Username is required');
        return;
    }

    if (passwd.lenght <= 4) {
        showMessage('error','Password minium length is 4 characters');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
           const data = JSON.parse(this.responseText);
           if (data.hasOwnProperty('success')) {
               window.location.href = "kissa.php?type=success&msg=Welcome";
           } else {
               showMessage('error', data.error);

   ajax.open("POST", "backend/loginUser.php", true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(`username=${username}"&passwd=${passwd}`);
               }
            }
        }