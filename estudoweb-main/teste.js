
//Teste REGEX
const re1 = new RegExp('hey')

if (re1.test('hesfsy')==true){
  document.getElementById("teste").innerHTML="ihuu"
}
else{
  document.getElementById("teste").innerHTML="é não"
}


//Teste load
$(document).ready(function(){
    $("button").click(function(){
      $("#um").load("texto.html.php");
    });
  });