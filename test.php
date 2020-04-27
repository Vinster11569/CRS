<!DOCTYPE HTML>
<html>
<head>
<title>Test</title>
</head>
<body>
<h1 align="center">Test</h1>
<?php
echo '<pre>';
exec('C:\ipconfig / displayall');
foreach($result as $line)
  echo "$line\n";
  
  echo '</pre>';
  echo '<br /><hr /><br />';

?>

</body>
<html>