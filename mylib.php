<?php

function jsonConvert(){

  if(isset($_POST['string'])) {
  $convertJsonToString = $_POST['string'];
  $convertJsonToString2 = json_decode($convertJsonToString, true);

if($convertJsonToString2 == NULL) {
  echo "<br>Please enter valid JSON data.";
}
else {
  echo "<br><strong><u>You enterred:</strong></u><br>$convertJsonToString<br><br><strong><u>Which converts to the following array:</u></strong><br>";
  print_r($convertJsonToString2);
}

}}
?>
