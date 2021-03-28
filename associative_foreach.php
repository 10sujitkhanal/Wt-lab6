<html>
<body>

<?php

$detail = array("Sujit"=>"35", "Safal"=>"37", "Siddhu"=>"43");

<!-- associative array output -->

echo "Peter is " . $detail['Peter'] . " years old.";

<!-- foreach output -->

foreach($detail as $x => $value) {
  echo "Key=" . $x . ", Value=" . $value;
  echo "<br>";
}

?>

</body>
</html>