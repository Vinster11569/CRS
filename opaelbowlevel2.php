<!DOCTYPE HTML>  
<html>
<head>
<title>OPA -> Elbow -> Level 2</title>
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
<div class="PageReadableBlue"><p>For the objective physical assessment, only select the Level 2 tests for the elbow you are sure of by clicking in the test box. Your selections will turn green. Please do not close this tab, as you will need to be able to toggle back to it for reference in the next section. You can select Level 3 tests for the elbow by clicking the link. If you wish to clear your answers and start again, there is a reset link at the bottom of this page.</p></div>
<hr />
<h2>Elbow Tests - Level 2</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th><th>Level 2</th></tr>

<tr><td>Elbow</td><td>Observation</td><td>Posture</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMuscleForm" id="EMuscleForm" value="Muscle Form">Muscle Form</td></tr>
<tr><td></td><td></td><td>Soft Tissue</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAttitudes" id="EAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAreaTenderess" id="EAreaTenderess" value="Area of Tenderess">Area of Tenderess</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ESwelling2" id="ESwelling2" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EIncTemp" id="EIncTemp" value="Increased Temperature">Increased Temperature</td></tr>
<tr><td></td><td>Active Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAFlexion" id="EAFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAExtension" id="EAExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAPronation" id="EAPronation" value="Pronation">Pronation</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EASupination" id="EASupination" value="Supination">Supination</td></tr>
<tr><td></td><td>Passive Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPFlexion" id="EPFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPExtension" id="EPExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPPronation" id="EPPronation" value="Pronation">Pronation</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPSupination" id="EPSupination" value="Supination">Supination</td></tr>
<tr><td></td><td>Accessory Movements</td><td>Humeroulnar Joint</td></tr>
<tr><td></td><td></td><td>Radiohumeral Joint</td></tr>
<tr><td></td><td></td><td>Proximal Radioulnar Joint</td></tr>
<tr><td></td><td></td><td>Distal Radioulnar Joint</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td></tr>
<tr><td></td><td>Muscle</td><td>Strength</td></tr>
<tr><td></td><td></td><td>Length</td></tr>
<tr><td></td><td></td><td>Isometric</td></tr>
<tr><td></td><td></td><td>Special</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td></tr>
<tr><td></td><td></td><td>Myotomes</td></tr>
<tr><td></td><td></td><td>Reflexes</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT1" id="ENDULNDT1" value="ULNDT 1">ULNDT 1</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT2a" id="ENDULNDT2a" value="ULNDT 2a">ULNDT 2a</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT2b" id="ENDULNDT2b" value="ULNDT 2b">ULNDT 2b</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT3" id="ENDULNDT3" value="ULNDT 3">ULNDT3</td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNTinels" id="ENDNTinels" value="Tinels">Tinels</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNPinch" id="ENDNPinch" value="Pinch-grip Test">Pinch-grip Test</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNPronatorSyndrome" id="ENDNPronatorSyndrome" value="Pronator Syndrome">Pronator Syndrome</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNHSPS" id="ENDNHSPS" value="Humerus Supracondylar Process Syndrome">Humerus Supracondylar Process Syndrome</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNRTS" id="ENDNRTS" value="Radial Tunnel Syndrome">Radial Tunnel Syndrome</td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNBAP" id="ENDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNRAP" id="ENDNRAP" value="Radial Artery Pulse">Radial Artery Pulse</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNTOT" id="ENDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td></tr>
</table>
<hr />
<p><a href="opaelbowlevel3.php" target="_blank">Elbow Tests - Level 3</a></p>
<hr />
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>