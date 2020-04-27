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
<div class="PageReadableBlue"><p>For the objective physical assessment, only select the tests you are sure of by clicking in the test box. Your selections will turn green. Please do not close this tab, as you will need to be able to toggle back to it for reference in the next section. If you wish to clear your answers and start again, there is a reset link at the bottom of this page.</p></div>
<hr />
<h2>Elbow Tests - Level 3</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th><th>Level 2</th><th>Level 3</th></tr>

<tr><td>Elbow</td><td>Observation</td><td>Posture</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ECarryAngle" id="ECarryAngle" value="Carry Angle">Carry Angle</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMuscleForm" id="EMuscleForm" value="Muscle Form">Muscle Form</td><td></td></tr>
<tr><td></td><td></td><td>Soft Tissue</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ESwelling1" id="ESwelling1" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ERedness" id="ERedness" value="Redness">Redness</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAttitudes" id="EAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td><td></td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAreaTenderess" id="EAreaTenderess" value="Area of Tenderess">Area of Tenderess</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ESwelling2" id="ESwelling2" value="Swelling">Swelling</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EIncTemp" id="EIncTemp" value="Increased Temperature">Increased Temperature</td><td></td></tr>
<tr><td></td><td>Active Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAFlexion" id="EAFlexion" value="Flexion">Flexion</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAExtension" id="EAExtension" value="Extension">Extension</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EAPronation" id="EAPronation" value="Pronation">Pronation</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EASupination" id="EASupination" value="Supination">Supination</td><td></td></tr>
<tr><td></td><td>Passive Range of Movement</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPFlexion" id="EPFlexion" value="Flexion">Flexion</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPExtension" id="EPExtension" value="Extension">Extension</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPPronation" id="EPPronation" value="Pronation">Pronation</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPSupination" id="EPSupination" value="Supination">Supination</td><td></td></tr>
<tr><td></td><td>Accessory Movements</td><td>Humeroulnar Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMedialGlide" id="EMedialGlide" value="Medial Glide">Medial Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ELateralGlide" id="ELateralGlide" value="Lateral Glide">Lateral Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ECaudadGlide" id="ECaudadGlide" value="Caudad Glide">Caudad Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ECompression" id="ECompression" value="Compression">Compression</td></tr>
<tr><td></td><td></td><td>Radiohumeral Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ERCaudadGlide" id="ERCaudadGlide" value="Caudad Glide">Caudad Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ERCephaladGlide" id="ERCephaladGlide" value="Cephalad Glide">Cephalad Glide</td></tr>
<tr><td></td><td></td><td>Proximal Radioulnar Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPRJAP" id="EPRJAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPRJPA" id="EPRJPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td>Distal Radioulnar Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EDRJAP" id="EDRJAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EDRJPA" id="EDRJPA" value="P-A">P-A</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EJLMedialCollateral" id="EJLMedialCollateral" value="Medial Collateral">Medial Collateral</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EJLLateralCollateral" id="EJLLateralCollateral" value="Lateral Collateral">Lateral Collateral</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EJLAnnularLigament" id="EJLAnnularLigament" value="Annular Ligament">Lateral Annular Ligament</td></tr>
<tr><td></td><td>Muscle</td><td>Strength</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSFlexors" id="EMSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSExtensors" id="EMSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSPronators" id="EMSPronators" value="Pronators">Pronators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSSupinators" id="EMSSupinators" value="Supinators">Supinators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSGripStrength" id="EMSGripStrength" value="Grip Strength">Grip Strength</td></tr>
<tr><td></td><td></td><td>Length</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ELSFlexors" id="ELSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ELSExtensors" id="ELSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ELSPronators" id="ELSPronators" value="Pronators">Pronators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ELSSupinators" id="ELSSupinators" value="Supinators">Supinators</td></tr>
<tr><td></td><td></td><td>Isometric</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMIFlexors" id="EMIFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMIExtensors" id="EMIExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMIPronators" id="EMIPronators" value="Pronators">Pronators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMISupinators" id="EMISupinators" value="Supinators">Supinators</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSTE" id="EMSTE" value="Tennis Elbow">Tennis Elbow</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSGE" id="EMSGE" value="Golfer's Elbow">Golfer's Elbow</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC1" id="ENDC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC2" id="ENDC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC3" id="ENDC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC4" id="ENDC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC5" id="ENDC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC6" id="ENDC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC7" id="ENDC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC8" id="ENDC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDT1" id="ENDT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Myotomes</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC1" id="ENMC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC2" id="ENMC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC3" id="ENMC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC4" id="ENMC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC5" id="ENMC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC6" id="ENMC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC7" id="ENMC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMC8" id="ENMC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMT1" id="ENMT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Reflexes</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMRBiceps" id="ENMRBiceps" value="Biceps">Biceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMRTriceps" id="ENMRTriceps" value="Triceps">Triceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENMRBrachioradialis" id="ENMRBrachioradialis" value="Brachioradialis">Brachioradialis</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT1" id="ENDULNDT1" value="ULNDT 1">ULNDT 1</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT2a" id="ENDULNDT2a" value="ULNDT 2a">ULNDT 2a</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT2b" id="ENDULNDT2b" value="ULNDT 2b">ULNDT 2b</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDULNDT3" id="ENDULNDT3" value="ULNDT 3">ULNDT3</td><td></td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNTinels" id="ENDNTinels" value="Tinels">Tinels</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNPinch" id="ENDNPinch" value="Pinch-grip Test">Pinch-grip Test</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNPronatorSyndrome" id="ENDNPronatorSyndrome" value="Pronator Syndrome">Pronator Syndrome</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNHSPS" id="ENDNHSPS" value="Humerus Supracondylar Process Syndrome">Humerus Supracondylar Process Syndrome</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNRTS" id="ENDNRTS" value="Radial Tunnel Syndrome">Radial Tunnel Syndrome</td><td></td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNBAP" id="ENDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNRAP" id="ENDNRAP" value="Radial Artery Pulse">Radial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDNTOT" id="ENDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td><td></td></tr>
</table>
<hr />

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>