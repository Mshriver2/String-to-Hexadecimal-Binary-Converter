<?php
//©2019 Max Shriver and Spencer Dyvig
function strToBinary {
  $str = ($_POST['string_value'])
  $stringCount = strlen($str)

  for ($i = 0, $i < $stringCount, $i++) {

  }
}

if(isset($_POST['submit'])) {

    $b_or_h = $_POST['b_or_h'];

    //checks if hexi or deci conversion
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
