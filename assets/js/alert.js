/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth - 100;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        
        dialogbox.style.left = (winW/2) - (550 *.5) + "px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        
        document.getElementById('dialogboxhead').innerHTML = "Acknowledge This Message";
        document.getElementById('dialogboxbody').innerHTML = dialog;
       // document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.no()">NO</button>>';
       // document.getElementById('dialogboxfoot2').innerHTML = '<button onclick="Alert.ok()">OK</button>';



    }
    this.ok = function(){
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
        
        var div = document.getElementById("dom-target");
        var myData = div.textContent;

        window.location.href ="deleteItem/" + myData;
    }
    
     this.no = function(){
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
        
    }
    
}

var Alert = new CustomAlert();

$('#alert').click(function(){
 
Alert.render('Do you want to delete  this item');
});