<?php
$my_name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;
