<?php
//©2019 Max Shriver and Spencer Dyvig
function strToBinary {
  $str = ($_POST['string_value'])
  $stringCount = strlen($str)

  for ($i = 0, $i < $stringCount, $i++) {

  }
}

if(isset($_POST['submit'])) {
  echo strToBinary($str)
}
?>



<html>
<head>

</head>

<body>

    <form method="post">
        <br><input type="text" minlength = "1" name="string_value" placeholder="Enter string">
        <input name="new_password_submit" type="submit" value="Submit">
    </form>



</body>


</html>
