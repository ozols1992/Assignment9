<?php
    /*
* This is the application
*/
    session_start();

    require_once './includes/City.php';   // the model

?>
<!doctype html>
<html>
  <head>
    <meta charset='utf-8'/>
    <title>Television</title>
    <link rel="stylesheet" href="./css/styles.css"/>
  </head>
  <body>       
      <div class="box">
          <?php
          $c = new City('Denmark', 'me', 'DK', 'Kolding', '100' );

          echo $c


          ?>
      </div>           
  </body>
</html>