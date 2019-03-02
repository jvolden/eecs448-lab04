<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="myStyle.css" media="all">
  <title>Multiplication Table</title>

</head>
<body>
  <table>
<?php
  for ($i = 0; $i < 100; $i++) {
    echo "<tr>\n";
      for ($j = 0; $j < 100; $j++) {
        if ($i == 0) {                          # If we are on the first row.
          echo "<th class=\"col\" style=\"background: #999966\">" . ($j + 1) . "</th>\n";
        }
        else if ($j == 0) {                     # If we are on the first column.
          echo "<th style=\"background: #999966\">" . ($i + 1) . "</th>\n";
        }
        else {                                  # Compute the product.
          echo "<td>" . (($i + 1) * ($j + 1)) . "</td>\n";
        }
      }
    echo "</tr>\n";
  }
?>
  </table>
</body>
</html>
