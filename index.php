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


$msg = "Please enter a value in the box and select a base conversion.";

//Function that checks user-selected values in an array
function checkValues($vars) {
  //Defining string in textbox and base selector values in array $vars 
  $vars = array('string' => $_POST['string_value'], 'base' => $_POST['base_selector']);

  //Checking if string is set and if base conversion method is "Binary" then return results
  if (($vars['string'] != "") && ($vars['base'] == "binary")){
    // TODO: strToBinary();
    return "Results: {$vars['string']}, {$vars['base']}";
  //Checking if string is set and if base conversion method is "Hexadecimal" then return results
  }elseif (($vars['string'] != "") && ($vars['base'] == "hexadecimal")) {
    // TODO: strToHex(); or binToHex();
    return "Results: {$vars['string']}, {$vars['base']}";
  //If neither string or base conversion method is set
  }elseif (($vars['string'] == "") && ($vars['base'] == "selectvalue")) {
    return "Please enter a value in the box and select a base conversion.";
  //If string is not set but base conversion method is
  }elseif ($vars['string'] == "") {
    return "Please enter a string value in the box.";
  //If string is set but base conversion method is not
  }else {
    return "Please select a base to convert to.";
  }
}

//Checking values when submit button is pressed and printing them on the screen
if(isset($_POST['submit'])) {
  $msg = checkValues($vars);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>stbh</title>
  </head>
  <body>
    <h1><?php echo $msg;?></h1>
    <form method="post">
        <br><input type="text" minlength = "1" name="string_value" placeholder="Enter string">
        <select name="base_selector"><option value="selectvalue">Select a value...</option><option value="binary">Binary</option><option value="hexadecimal">Hexadecimal</option></select>
        <input name="submit" type="submit" value="Submit">
    </form>
  </body>
</html>
