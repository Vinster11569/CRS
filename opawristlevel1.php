<!DOCTYPE HTML>  
<html>
<head>
<title>OPA -> Wrist -> Level 1</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<?php
$WrongColour = $CorrectColour = "";

$WrongColour = "#00FF00";
$CorrectColour = "#00FF00";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $HiddenText="PageReadableWhite";
     $Prognosis = test_input($_POST["Prognosis"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!-- 
onclick="this.style.backgroundColor = '#00FF00';" // Red
onclick="this.style.backgroundColor = '#00FF00';"  //Green
 -->

<hr />
<h1 align="center">Objective Physical Assessment.</h1>
<hr />
<div class="PageReadableBlue"><p>Here area list of the Level 1 tests for the wrist. Click the link to see the Level 2 tests for the wrist:</p></div>
<hr />
<h2>Wrist Tests - Level 1</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th></tr>
<tr><td>Wrist</td><td>Observation</td></tr>
<tr><td></td><td>Palpation</td></tr>
<tr><td></td><td>Active Range of Movement</td></tr>
<tr><td></td><td>Passive Range of Movement</td></tr>
<tr><td></td><td>Accessory Movements</td></tr>
<tr><td></td><td>Joint Integrity</td></tr>
<tr><td></td><td>Muscle</td></tr>
<tr><td></td><td>Neurological Integrity</td></tr>
<tr><td></td><td>Neurodynamic Tests</td></tr>
<tr><td></td><td>Other Nerve Tests</td></tr>
<tr><td></td><td>Vascular</td></tr>
</table>
<hr />

<p><a href="opawristlevel2.php" target="_blank">Wrist Tests - Level 2</a></p>
<hr />


</div>
<?php


?>
</body>
</html>