<!-- php string -->
<?php

// strcmp
echo strcmp("Hello","Hello");

// strlen
echo strlen("Hello");

// print
print "Hello world!";

// number_format
echo number_format("1000000",2);
?>

<!-- php array -->
<?php
$name = array("Sujit"=>"35", "Safal"=>"37", "Siddhu"=>"43");
sort($name);

rsort($name);

asort($name);

ksort($name);

arsort($name);

krsort($name);
?>