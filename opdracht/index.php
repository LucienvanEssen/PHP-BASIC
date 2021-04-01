<?php
  require "includes/functions.php" ;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
    <?php
      include "includes/menu.php" ;
    ?>
    <form action="index.php" method="get"><!-- dit laten staan! -->

    <p>Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <P>Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->
    <p>Het datatype van de waarde: <?php getInput() ?> is een
    <?php 
    if(isset($_GET['input'])){
      if(filter_var($_GET['input'], FILTER_VALIDATE_INT) === 0 || filter_var($_GET['input'], FILTER_VALIDATE_INT))
      {
        echo "getal" ;
      }
      else if(filter_var($_GET['input'], FILTER_VALIDATE_BOOLEAN, array('flags' => FILTER_NULL_ON_FAILURE))!==null)
      {
        echo "boolean" ;
      } 
      else if(filter_var($_GET['input'], FILTER_VALIDATE_FLOAT))
      {
        echo "kommagetal" ;
      }
    }
      
      ?> </p>

    </form><!-- dit laten staan! -->
    <?php include "includes/footer.php" ?>
  </body>
</html>