if(localStorage.getItem('token')!==null)
    window.location.replace("admin.php");


let form = document.getElementById('login-form');
let btnSubmit=document.getElementById('login-button');
let email=document.getElementById("email");
let password=document.getElementById("password")
let message=document.getElementById("error-message");
import {postData} from "../js/utils.js";


form.addEventListener('submit', (event) => {
console.log(email.value)
    event.preventDefault();
    let emailValue=email.value;
    let passswordValue=password.value;

    postData('http://localhost/UnWe/api/login/login.php', { email: emailValue,password:passswordValue })
        .then(data => {
            console.log(data);
           if(data.success===0) {

               message.innerText=data.message;

           }
           if(data.success===1){
               message.innerText=data.message;
               localStorage.setItem("token",data.token);
               window.location.replace("admin.php");
           }
        });

});


