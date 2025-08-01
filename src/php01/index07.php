<?php

function force($base, $height) {
  return $base * $height;
}

function third($base, $height) {
  return ($base * $height) / 2; 
}

function dai($overbase, $underbase, $height) {
  return ($overbase + $underbase) * $height /2;
}

echo force(5, 5) . "<br />";
echo third(5, 5) . "<br />";
echo dai(4, 6, 5) . "<br />";