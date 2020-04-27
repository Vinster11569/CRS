<!DOCTYPE HTML>  
<html>
<head>
<title>OPA -> Wrist -> Level 2</title>
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
<div class="PageReadableBlue"><p>For the objective physical assessment, only select the Level 2 tests for the wrist you are sure of by clicking in the test box. Your selections will turn green. Please do not close this tab, as you will need to be able to toggle back to it for reference in the next section. You can select Level 3 tests for the wrist by clicking the link. If you wish to clear your answers and start again, there is a reset link at the bottom of this page.</p></div>
<hr />
<h2>Wrist Tests - Level 2</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th><th>Level 2</th></tr>
<tr><td>Wrist</td><td>Observation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPosture" id="WPosture" value="Posture">Posture</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMuscleForm" id="WMuscleForm" value="Muscle Form">Muscle Form</td></tr>
<tr><td></td><td></td><td>Soft Tissue</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAttitudes" id="WAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAreaTenderess" id="WAreaTenderess" value="Area of Tenderess">Area of Tenderess</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WSwelling2" id="WSwelling2" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WIncTemp" id="WIncTemp" value="Increased Temperature">Increased Temperature</td></tr>
<tr><td></td><td>Active Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAFlexion" id="WAFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAExtension" id="WAExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WARadialDeviation" id="WARadialDeviation" value="Radial Deviation">Radial Deviation</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAUlnarDeviation" id="WAUlnarDeviation" value="Ulnar Deviation">Ulnar Deviation</td></tr>
<tr><td></td><td>Passive Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPFlexion" id="WPFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPExtension" id="WPExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPRadialDeviation" id="WPRadialDeviation" value="Radial Deviation">Radial Deviation</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPUlnarDeviation" id="WPUlnarDeviation" value="Ulnar Deviation">Ulnar Deviation</td></tr>
<tr><td></td><td>Accessory Movements</td><td>Distal Radioulnar Joint</td></tr>
<tr><td></td><td></td><td>Radiocarpal</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td></tr>
<tr><td></td><td>Muscle</td><td>Strength</td></tr>
<tr><td></td><td></td><td>Length</td></tr>
<tr><td></td><td></td><td>Isometric</td></tr>
<tr><td></td><td></td><td>Special</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td></tr>
<tr><td></td><td></td><td>Myotomes</td></tr>
<tr><td></td><td></td><td>Reflexes</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT1" id="WNDULNDT1" value="ULNDT 1">ULNDT 1</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT2a" id="WNDULNDT2a" value="ULNDT 2a">ULNDT 2a</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT2b" id="WNDULNDT2b" value="ULNDT 2b">ULNDT 2b</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT3" id="WNDULNDT3" value="ULNDT 3">ULNDT3</td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNTinels" id="WNDNTinels" value="Tinels">Tinels</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNPinch" id="WNDNPinch" value="Pinch-grip Test">Pinch-grip Test</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNPhalens" id="WNDNPhalens" value="Phalens">Phalens</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNReversePhalens" id="WNDNReversePhalens" value="Reverse Phalens">Reverse Phalens</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNFroment" id="WNDNFroment" value="Froment">Froment</td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNBAP" id="WNDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNRAP" id="WNDNRAP" value="Radial Artery Pulse">Radial Artery Pulse</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNTOT" id="WNDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td></tr>
</table>
<hr />
<p><a href="opawristlevel3.php" target="_blank">Wrist Tests - Level 3</a></p>
<hr />
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>