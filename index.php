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
//$results = "Please enter a string to convert, then select a base to convert to.";

function checkValues($vars) {
  $str = ($_POST['string_value']);
  $baseSelector = ($_POST['base_selector']);
  $vars = array('string' => $str, 'base' => $baseSelector);

  if (($vars['string'] != "") && ($vars['base'] == "binary")){
    // TODO: strToBinary();
    echo "{$vars['string']}, {$vars['base']}";
  }elseif (($vars['string'] != "") && ($vars['base'] == "hexadecimal")) {
    // TODO: strToHex(); or binToHex();
    echo "Results: {$vars['string']}, {$vars['base']}";
  }elseif (($vars['string'] == "") && ($vars['base'] == "selectvalue")) {
    echo "Please enter a value in the box and select a base conversion.";
  }elseif ($vars['string'] == "") {
    echo "Please enter a string value in the box.";
  }else {
    echo "Please select a base to convert to.";
  }
}

if(isset($_POST['submit'])) {
  checkValues($vars);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>stbh</title>
  </head>
  <body>
    <form method="post">
        <br><input type="text" minlength = "1" name="string_value" placeholder="Enter string">
        <select name="base_selector"><option value="selectvalue">Select a value...</option><option value="binary">Binary</option><option value="hexadecimal">Hexadecimal</option></select>
        <input name="submit" type="submit" value="Submit">
    </form>
  </body>
</html>
