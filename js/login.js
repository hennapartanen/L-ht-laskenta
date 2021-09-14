
document.forms['login'].addEventListener('submit', loginUser);

function loginUser(event){

    event.preventDefault();
    
    const username = document.forms['login']['username'].value;
    const passwd = document.forms['login']['passwd'].value;

    if (username.length <= 0) {
        showMessage('error', 'Username is required');
        return;
    }

    if (passwd.length <= 3) {
        showMessage('error','Password minium length is 4 characters');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
           const data = JSON.parse(this.responseText);
           console.log(data);
           if (data.hasOwnProperty('success')){
               window.location.href = "kissa.php?type=success&msg=Welcome";
               return;
           } else {
               showMessage('error', 'Kirjautuminen epäonnistui!');

            }
        }

   ajax.open("POST", "backend/loginUser.php", true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send("username="+username+"&passwd="+passwd);
             
        }