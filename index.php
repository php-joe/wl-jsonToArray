<!DOCTYPE html>
<html>
<head>
<title>Convert Json to String</title>
</head>
<body>
<h2>Problem: Convert JSON data to an array then display it.</h2>
  <form method="POST">
    <input type="text" placeholder="JSON data" name="string" />
      <input type="submit"/>
    </form>
<?php
require_once('mylib.php');
jsonConvert();
?>

</body>
</html>
