

document.forms['register'].addEventListener('submit', registerNewUser);

function registerNewUser(event){

    event.preventDefault();

    const username = document.forms['register']['username'].value;
    const passwd = document.forms['register']['passwd'].value;
    const passwd2 = document.forms['register']['passwd2'].value;
    const email = document.forms['register']['email'].value;

    if (username.lenght <= 0) {
        showMessage('error', 'Username is required');
        return;
    }

    if (passwd.lenght <= 4) {
        showMessage('error','Password minium length is 4 characters');
        return;
    }

    if (passwd.localeCompare(passwd2) != 0) {
        showMessage('error','Passwords not matching');
        return;
    }

    if (email.lenght <= 0) {
        showMessage('error','Email is required');
        return;
    }

    let ajax = new XMLHttpRequest();
    
    ajax.onload = function(){
           const data = JSON.parse(this.responseText);
           if (data.hasOwnProperty('success')) {
               window.location.href = "login.php?type=success&msg=Rekistöröityminen onnistui! ";
           } else {
               showMessage('error', data.error);

           }
    }
ajax.open("POST", "backend/registerNewUser.php", true);
ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
ajax.send("username="+username+"&passwd="+passwd+"&email="+email);
}
