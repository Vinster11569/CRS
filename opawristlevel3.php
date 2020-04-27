<!DOCTYPE HTML>  
<html>
<head>
<title>OPA -> Wrist -> Level 3</title>
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
<div class="PageReadableBlue"><p>For the objective physical assessment, only select the tests you are sure of by clicking in the test box. Your selections will turn green. Please do not close this tab, as you will need to be able to toggle back to it for reference in the next section. If you wish to clear your answers and start again, there is a reset link at the bottom of this page.</p></div>
<hr />
<h2>Wrist Tests - Level 3</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th><th>Level 2</th><th>Level 3</th></tr>
<tr><td>Wrist</td><td>Observation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPosture" id="WPosture" value="Posture">Posture</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMuscleForm" id="WMuscleForm" value="Muscle Form">Muscle Form</td><td></td></tr>
<tr><td></td><td></td><td>Soft Tissue</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WSwelling1" id="WSwelling1" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRedness" id="WRedness" value="Redness">Redness</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WDeformities" id="WDeformities" value="Deformities">Deformities</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAttitudes" id="WAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td><td></td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAreaTenderess" id="WAreaTenderess" value="Area of Tenderess">Area of Tenderess</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WSwelling2" id="WSwelling2" value="Swelling">Swelling</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WIncTemp" id="WIncTemp" value="Increased Temperature">Increased Temperature</td><td></td></tr>
<tr><td></td><td>Active Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAFlexion" id="WAFlexion" value="Flexion">Flexion</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAExtension" id="WAExtension" value="Extension">Extension</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WARadialDeviation" id="WARadialDeviation" value="Radial Deviation">Radial Deviation</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WAUlnarDeviation" id="WAUlnarDeviation" value="Ulnar Deviation">Ulnar Deviation</td><td></td></tr>
<tr><td></td><td>Passive Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPFlexion" id="WPFlexion" value="Flexion">Flexion</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPExtension" id="WPExtension" value="Extension">Extension</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPRadialDeviation" id="WPRadialDeviation" value="Radial Deviation">Radial Deviation</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WPUlnarDeviation" id="WPUlnarDeviation" value="Ulnar Deviation">Ulnar Deviation</td><td></td></tr>
<tr><td></td><td>Accessory Movements</td><td>Distal Radioulnar Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WDRUJAP" id="WDRUJAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WDRUJPA" id="WDRUJPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td>Radiocarpal</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRCAP" id="WRCAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRCPA" id="WRCPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRCMedialGlide" id="WRCMedialGlide" value="Medial Glide">Medial Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRCLateralGlide" id="WRCLateralGlide" value="Lateral Glide">Lateral Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRCCephalad" id="WRCCephalad" value="Cephalad">Cephalad</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WRCCaudad" id="WRCCaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WJLWSS" id="WJLWSS" value="Watsons Scaphoid Shift">Watsons Scaphoid Shift</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WJLLB" id="WJLB" value="Lunotriquestral Ballotment">Lunotriquestral Ballotment</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WJLMidCarpal" id="WJLMidCarpal" value="Midcarpal">Midcarpal</td></tr>
<tr><td></td><td>Muscle</td><td>Strength</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMSFlexors" id="WMSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMSExtensors" id="WMSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMSRadialDeviators" id="WMSRadialDeviators" value="Radial Deviators">Radial Deviators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMSUlnarDeviators" id="WMSUlnarDeviators" value="Ulnar Deviators">Ulnar Deviators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMSGripStrength" id="WMSGripStrength" value="Grip Strength">Grip Strength</td></tr>
<tr><td></td><td></td><td>Length</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WLSFlexors" id="WLSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WLSExtensors" id="WLSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WLSRadialDeviators" id="WLSRadialDeviators" value="Radial Deviators">Radial Deviators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WLSUlnarDeviators" id="WLSUlnarDeviators" value="Ulnar Deviators">Ulnar Deviators</td></tr>
<tr><td></td><td></td><td>Isometric</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMIFlexors" id="WMIFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMIExtensors" id="WMIExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMIRadialDeviators" id="WMIRadialDeviators" value="Radial Deviators">Radial Deviators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMIUlnarDeviators" id="WMIUlnarDeviators" value="Ulnar Deviators">Ulnar Deviators</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WMITFCC" id="WMITFCC" value="TFCC">TFCC</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC1" id="WNDC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC2" id="WNDC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC3" id="WNDC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC4" id="WNDC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC5" id="WNDC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC6" id="WNDC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC7" id="WNDC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDC8" id="WNDC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDT1" id="WNDT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Myotomes</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC1" id="WNMC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC2" id="WNMC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC3" id="WNMC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC4" id="WNMC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC5" id="WNMC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC6" id="WNMC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC7" id="WNMC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMC8" id="WNMC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMT1" id="WNMT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Reflexes</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMRBiceps" id="WNMRBiceps" value="Biceps">Biceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMRTriceps" id="WNMRTriceps" value="Triceps">Triceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNMRBrachioradialis" id="WNMRBrachioradialis" value="Brachioradialis">Brachioradialis</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT1" id="WNDULNDT1" value="ULNDT 1">ULNDT 1</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT2a" id="WNDULNDT2a" value="ULNDT 2a">ULNDT 2a</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT2b" id="WNDULNDT2b" value="ULNDT 2b">ULNDT 2b</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDULNDT3" id="WNDULNDT3" value="ULNDT 3">ULNDT3</td><td></td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNTinels" id="WNDNTinels" value="Tinels">Tinels</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNPinch" id="WNDNPinch" value="Pinch-grip Test">Pinch-grip Test</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNPhalens" id="WNDNPhalens" value="Phalens">Phalens</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNReversePhalens" id="WNDNReversePhalens" value="Reverse Phalens">Reverse Phalens</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNFroment" id="WNDNFroment" value="Froment">Froment</td><td></td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNBAP" id="WNDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNRAP" id="WNDNRAP" value="Radial Artery Pulse">Radial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WNDNTOT" id="WNDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td><td></td></tr>
</table>
<hr />

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>