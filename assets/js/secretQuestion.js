/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var counter = 1;
var limit = 4;
var secretQuestion = document.getElementById("secretQuestion");
var newInput = document.getElementById("newInput");
secretQuestion.addEventListener("click", createnewbutton);

function createnewbutton(){ 
  
var element = document.createElement("textarea");

if(counter == limit){
    //alert("you have reached the limit of adding  " + counter + "  inputs");
    Alert.render("you have reached the limit of adding  " + counter + "  inputs");
}else{
    element.setAttribute("name", counter);
    element.setAttribute("rows",1);
    element.setAttribute("class","form-control");
    element.setAttribute("placeholder","Write question number " + counter);
    newInput.appendChild(element);
    newInput.innerHTML = newInput.innerHTML + "<br/>";
    counter++;
}

}

