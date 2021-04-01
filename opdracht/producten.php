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
      $producten=array("appels","peren","bananen","mandarijnen","mango's","fruit 6","fruit 7","fruit 8","fruit 9","fruit 10") ;
      $prijzen=array(0.25,0.30,0.35,0.40,0.45,0.50,0.55,0.60,0.65,0.70) ;
    ?>
    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <?php
            for($i=0;$i<count($producten);$i++)
            {
            echo "
            <tr>
                <td>".$i."</td>
                <td>". $producten[$i]."</td>
                <td>". number_format($prijzen[$i],2)."</td>
            </tr>
                " ;
              }
            ?>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je:
    
    <?php if(isset($_GET['productnummer'])&&isset($_GET['aantal'])&&$_GET['productnummer']>=0&&$_GET['productnummer']<count($producten)) 
    
    echo number_format( $prijzen[$_GET['productnummer']] * $_GET['aantal'],2 ) ?>

    </p>
    <p>je bent <?php getAge(); ?> je korting is: 
    <?php 
    
    if(isset($_GET['leeftijd'])){
      if($_GET['leeftijd']<=19&&$_GET['leeftijd']>=16)
      {
        echo $_GET['leeftijd'] . " cent" ;
      
      }
      else if($_GET['leeftijd']<16)
      {
        echo " 1 euro" ;
      }
    } ?> </p>

    </form><!-- dit laten staan! -->
    <?php include "includes/footer.php" ?>
  </body>
</html>