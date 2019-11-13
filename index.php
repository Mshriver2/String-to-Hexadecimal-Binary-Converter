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

function strToBinary {
  $str = ($_POST['string_value'])
  $stringCount = strlen($str)

  for ($i = 0, $i < $stringCount, $i++) {

  }
}

if(isset($_POST['submit'])) {

    $b_or_h = $_POST['b_or_h'];
    if ($b_or_h == "binary"){

        strToBinary($str);

    }elseif ($b_or_h == "hexadecimal") {

    }

}
?>



<html>
<head>

</head>

<body>

    <form method="post">
        <br><input type="text" minlength = "1" name="string_value" placeholder="Enter string">
        <select name="b_or_h"><option value="binary">Binary</option><option value="hexadecimal">Hexadecimal</option></select>
        <input name="new_password_submit" type="submit" value="Submit">
    </form>



</body>


</html>
