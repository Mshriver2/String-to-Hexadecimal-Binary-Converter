<?php
/*
This program converts text strings to binary and hexadecimal through a user interface.
Copyright (C) 2019  Max Shriver, Spencer Dyvig

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*function strToBinary {
  $stringCount = strlen($str)

  for ($i = 0, $i < $stringCount, $i++) {
    echo "hi"
  }
}*/

$baseSelector = ($_POST['base_selector']);
$str = ($_POST['string_value']);
$varAll = array($baseSelector, $str);

if(isset($_POST['submit'])) {

    if ($baseSelector == "binary"){
      // TODO: strToBinary();
    }elseif ($baseSelector == "hexadecimal") {
      // TODO: strToHex(); or binToHex();
    }else {
      // This should never be executed.
      $type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>stbh</title>
  </head>
  <body>
    <h1><?php print_r($varAll[1]);?></h1>
    <form method="post">
        <br><input type="text" minlength = "1" name="string_value" placeholder="Enter string">
        <select name="base_selector"><option value="binary">Binary</option><option value="hexadecimal">Hexadecimal</option></select>
        <input name="submit" type="submit" value="Submit">
    </form>
  </body>
</html>
