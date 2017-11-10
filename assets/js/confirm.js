/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var username = document.getElementById("username")
  , confirm_username = document.getElementById("username2");

function validateUser(){
  if(username.value != confirm_username.value) {
    confirm_username.setCustomValidity("Username Don't Match");
  } else {
    confirm_username.setCustomValidity('');
  }
}

username.onchange = validateUser;
confirm_username.onkeyup = validateUser;




var password = document.getElementById("password")
  , confirm_password = document.getElementById("password2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



var email = document.getElementById("email")
  , confirm_email = document.getElementById("email2");

function validateEmail(){
  if(email.value != confirm_email.value) {
    confirm_email.setCustomValidity("Email Don't Match");
  } else {
    confirm_email.setCustomValidity('');
  }
}

email.onchange = validateEmail;
confirm_email.onkeyup = validateEmail;

var registerpassword = document.getElementById("passwordreg")
  , confirm_registerpassword = document.getElementById("confirmpasswrodreg");

function validateRegister(){
  if(registerpassword.value != confirm_registerpassword.value) {
    confirm_registerpassword.setCustomValidity("Password Don't Match");
  } else {
    confirm_registerpassword.setCustomValidity('');
  }
}

registerpassword.onchange = validateRegister;
confirm_registerpassword.onkeyup = validateRegister;