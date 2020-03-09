<!DOCTYPE html>
  <html lang="es">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar usuario</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
      </head>
    <body >
        <?php
          $array = [100,3,4,5,1,30,9];
          echo "<br><br>Valores iniciales<br>";
          for($i=0;$i<count($array);$i++)
          {
            echo($array[$i]);
            echo("<br>");
          }
          
          for($i=1;$i<count($array);$i++)
          {
            for($j=0;$j<count($array)-$i;$j++)
            {
              if($array[$j]>$array[$j+1])
              {
                $tmp=$array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$tmp;
                //echo($array[$j]."<br>");
                  
              }
            }
          }
          
          echo "<br><br>Valores ordenados<br>";
          for($i=0;$i<count($array);$i++)
          {
            echo($array[$i]);
            echo("<br>");
          }
        ?>
    </body>
  </html>