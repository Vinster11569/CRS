<!DOCTYPE HTML>  
<html>
<head>
<title>OPA -> Shoulder -> Level 2</title>
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
<div class="PageReadableBlue"><p>For the objective physical assessment, only select the Level 2 tests for the shoulder you are sure of by clicking in the test box. Your selections will turn green. Please do not close this tab, as you will need to be able to toggle back to it for reference in the next section. You can select Level 3 tests for the shoulder by clicking the link. If you wish to clear your answers and start again, there is a reset link at the bottom of this page.</p></div>
<hr />
<h2>Shoulder Tests - Level 2</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th><th>Level 2</th></tr>
<tr><td>Shoulder</td><td>Observation</td><td>Posture</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMuscleForm" id="SMuscleForm" value="Muscle Form">Muscle Form</td></tr>
<tr><td></td><td></td><td>Soft Tissue</td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAttitudes" id="SAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAreaTenderess" id="SAreaTenderess" value="Area of Tenderess">Area of Tenderess</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SSwelling2" id="SSwelling2" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SIncTemp" id="SIncTemp" value="Increased Temperature">Increased Temperature</td></tr>
<tr><td></td><td>Active Range of Movement</td><td>Glenohumeral</td></tr>
<tr><td></td><td></td><td>Shoulder Girdle</td></tr>
<tr><td></td><td>Passive Range of Movement</td><td>Glenohumeral</td></tr>
<tr><td></td><td></td><td>Shoulder Girdle</td></tr>
<tr><td></td><td>Accessory Movements</td><td>Glenohumeral</td></tr>
<tr><td></td><td></td><td>Acromioclavicular</td></tr>
<tr><td></td><td></td><td>Sternoclavicular</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td></tr>
<tr><td></td><td></td><td>Special</td></tr>
<tr><td></td><td>Muscle Tests</td><td>Strength</td></tr>
<tr><td></td><td>Muscle</td><td>Length</td></tr>
<tr><td></td><td></td><td>Isometric</td></tr>
<tr><td></td><td></td><td>Special</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td></tr>
<tr><td></td><td></td><td>Myotomes</td></tr>
<tr><td></td><td></td><td>Reflexes</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT1" id="SNDULNDT1" value="ULNDT 1">ULNDT 1</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT2a" id="SNDULNDT2a" value="ULNDT 2a">ULNDT 2a</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT2b" id="SNDULNDT2b" value="ULNDT 2b">ULNDT 2b</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT3" id="SNDULNDT3" value="ULNDT 3">ULNDT3</td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNTinels" id="SNDNTinels" value="Tinels">Tinels</td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNVAP" id="SNDNVAP" value="Vertebratal Artery Pulse">Vertebratal Artery Pulse</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNTOT" id="SNDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNBAP" id="SNDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td></tr>
</table>
<hr />
<p><a href="opashoulderlevel3.php" target="_blank">Shoulder Tests - Level 3</a></p>
<hr />
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>