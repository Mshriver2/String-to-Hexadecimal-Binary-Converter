<?php
/*
=======================================================================================

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

=======================================================================================
*/

//Variable value shows up at top of page, used to dispaly results and messages to users
$msg = "";

//Converts a String value from $vars_array to Binary
function strToBinary($vars_array) {
  $characters = str_split($vars_array);
  foreach ($characters as $character) {
    $data = unpack('H*', $character);
    $binary[] = base_convert($data[1], 16, 2);
    }
    return implode(" 0", $binary);
}

//Converts a Binary value from $vars_array to a string
function binToStr($vars_array){
    $bins = explode(' ', $vars_array);

    $string = null;
    foreach ($bins as $vars_array) {
        $string .= pack('H*', dechex(bindec($vars_array)));
    }
    return $string;
}

//Converts a String value from $vars_array to a Hexadecimal
function strToHex($vars_array) {
    return array_shift(unpack('H*', $vars_array));
}

//Converts a Hexadecimal value from $vars_array to a string
function hexToStr($vars_array) {
    return pack('H*', $vars_array);
}




function checkValues($vars_array) {

  //Defining string in textbox and base selector value in array $vars_array
  $vars_array = array('string' => $_POST['string_value'], 'base' => $_POST['base_selector']);

  //Checking if string is not empty and if base conversion method is "Binary" then return results
  if (($vars_array['string'] != "") && ($vars_array['base'] == "binary")){
    return "String as Binary: 0" . strToBinary($vars_array['string']);

  //Checking if string is not empty and if base conversion method is "Hexadecimal" then return results
  }elseif (($vars_array['string'] != "") && ($vars_array['base'] == "hexadecimal")) {

    return "String as Hexadecimal: " . strToHex($vars_array['string']);

  //Checking if string is not empty and if base conversion method is "Hexadecimal to String" then return results
}elseif (($vars_array['string'] != "") && ($vars_array['base'] == "hex_to_string")) {

    return "Hexadecimal as String: " . hexToStr($vars_array['string']);

  //Checking if string is not empty and if base conversion method is "Binary to Hexadecimal" then return results
}elseif (($vars_array['string'] != "") && ($vars_array['base'] == "binary_to_hex")) {

    //built in function to go bin to hex
    return "Hexadecimal as Binary: " . dechex(bindec($vars_array['string']));

    //Checking if string is not empty and if base conversion method is "Binary to String" then return results
}elseif (($vars_array['string'] != "") && ($vars_array['base'] == "bin_to_string")) {

      return "Binary as String: " . binToStr($vars_array['string']);

  //If string is empty and base conversion method is not selected
  }elseif (($vars_array['string'] == "") && ($vars_array['base'] == "selectvalue")) {
    return "Please enter a value in the box and select a base conversion.";

  //If string is empty but base conversion method has been selected
  }elseif ($vars_array['string'] == "") {
    return "Please enter a string value in the box.";

  //If string is not empty and base conversion method is not selected
  }else {
    return "Please select a base to convert to.";
  }
}

//Checking values when submit button is pressed and printing them on the screen
if(isset($_POST['submit'])) {
  $msg = checkValues($vars_array);
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STR to BIN</title>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/superhero/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>

      <h3>String to Hexadecimal Binary Converter</h3>

      <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">

      <h1>Please enter a value in the box and select a base conversion.</h1>

    <form method="post">
        <div class="form-group">
        <br><input type="text" minlength = "1" name="string_value" placeholder="Enter string" class="form-control">
        </div>

        <div class="form-group">
        <select name="base_selector" class="custom-select" multiple>
            <option value="selectvalue">Select a value...</option>
            <option value="binary">Binary</option>
            <option value="hexadecimal">Hexadecimal</option>
            <option value="hex_to_string">Hexadecimal to String</option>
            <option value="bin_to_string">Binary to String</option>
            <option value="binary_to_hex">Binary to Hexadecimal</option>
            <option value="hex_to_binary">Hexadecimal to Binary</option></select>
        </div>

        <input name="submit" type="submit" value="Submit" class="btn btn-info btn-block">

            </div>
        </div>
    </div>

    </form>

    <h2><?php echo $msg;?></h2>

    <div class="footer">
        <p>©2019 Keker, LLC</p>
    </div>

  </body>
</html>
