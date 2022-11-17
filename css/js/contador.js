n = 10
 var l= document.getElementById("number");
 var id = window.setInterval(function(){

 
 document.onmouse = function(){
  n=10
 };
 l.innerText = n;
 n--;
},1200);