<!DOCTYPE HTML>  
<html>
<head>
<title>Objective Physical Assessment - Body Parts</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<?php
$WrongColour = $CorrectColour = "";

$WrongColour = "#00FF00";
$CorrectColour = "#F00";

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
<h2>Body Part</h2>
<div class="PageReadableBlue"><p>Please select a body part to peform tests on.</p></div>
<hr />
<div class="PageReadableBlue"><p>For the objective physical assessment, only select the tests you are sure of by clicking in the test box. Your selections will turn green. Please do not close this tab, as you will need to be able to toggle back to it for reference in the next section. If you wish to clear your answers and start again, there is a reset link at the bottom of this page. please start by selecting the body part you want to run tests on....</p></div>
<hr />
<ul>
<li><a href="opaelbowlevel1.php" target="_blank">Elbow Tests - Level 1</a></li>

<li><a href="opashoulderlevel1.php" target="_blank">Shoulder Tests - Level 1</a></li>

<li><a href="opawristlevel1.php" target="_blank">Wrist Tests - Level 1</a></li>
</ul>
<hr />

</div>
<?php


?>
</body>
</html>