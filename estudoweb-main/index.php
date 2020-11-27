<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>TREINO FRONT-END</title>
    <link rel="stylesheet" href="teste.css" media="all">

  </head>

  <body>

    <!-- Incluir Html Externo-->
    <?php include "testeinclude.php";?>

    <!--Teste Form -->
    <?php
      if (isset($_POST["text"])){
        $name=$_POST["text"];
        $handle=fopen('texto.php', 'a');
        fwrite($handle, $name."\n");
        fclose($handle);
      }

    ?>  
    <form method="post">
      Name:<input type="text" name="text"/>
      <input type="submit" name="submit" />
    </form>


    <!-- Teste Regex-->
    <p id="teste"> Teste Regex</p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src="teste.js"></script>

  </body>

</html>
