<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table width="500px" cellspacing=0px" cellpadding="0px" border="10px">
      <?php
      for ($i=0; $i <=8 ; $i++) {
        echo "<tr>";
        for ($j=0; $j <=8 ; $j++) {
          $alles = $i + $j;
          if ($alles%2===0) {
            echo "<td height=50px width=80px bgcolor=#ffffff></td>";
          }else {
            echo "<td height=50px width=80px bgcolor=#000000></td>";
          }
        }
        echo "</tr>";
      }
       ?>
    </table>
  </body>
</html>
