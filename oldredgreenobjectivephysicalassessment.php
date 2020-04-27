<!DOCTYPE HTML>  
<html>
<head>
<title>Objective Physical Assessment</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<?php
$WrongColour = $CorrectColour = "";

$WrongColour = "#F00";
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
onclick="this.style.backgroundColor = '#F00';" // Red
onclick="this.style.backgroundColor = '#00FF00';"  //Green
 -->

<hr />
<h1 align="center">Objective Physical Assessment.</h1>
<hr />
<div class="PageReadableBlue"><p>For the objective physcical assessment, only select the tests you are sure of by clicking in the test box. Correct answer will turn green and incorrect ones red. This means you will receive instant feedback. If you wish to clear your answers and start again, there is a reset link at the bottom of this page.</p></div>
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
<tr><td></td><td>Accessory Movements</td><td>Humeroulnar Joint</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="EMedialGlide" id="EMedialGlide" value="Medial Glide">Medial Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ELateralGlide" id="ELateralGlide" value="Lateral Glide">Lateral Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ECaudadGlide" id="ECaudadGlide" value="Caudad Glide">Caudad Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ECompression" id="ECompression" value="Compression">Compression</td></tr>
<tr><td></td><td></td><td>Radiohumeral Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ERCaudadGlide" id="ERCaudadGlide" value="Caudad Glide">Caudad Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ERCephaladGlide" id="ERCephaladGlide" value="Cephalad Glide">Cephalad Glide</td></tr>
<tr><td></td><td></td><td>Proximal Radioulnar Joint</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPRJAP" id="EPRJAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EPRJPA" id="EPRJPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td>Distal Radioulnar Joint</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="EDRJAP" id="EDRJAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="EDRJPA" id="EDRJPA" value="P-A">P-A</td></tr>
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
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ELSPronators" id="ELSPronators" value="Pronators">Pronators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ELSSupinators" id="ELSSupinators" value="Supinators">Supinators</td></tr>
<tr><td></td><td></td><td>Isometric</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMIFlexors" id="EMIFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="EMIExtensors" id="EMIExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="EMIPronators" id="EMIPronators" value="Pronators">Pronators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="EMISupinators" id="EMISupinators" value="Supinators">Supinators</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSTE" id="EMSTE" value="Tennis Elbow">Tennis Elbow</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="EMSGE" id="EMSGE" value="Golfer's Elbow">Golfer's Elbow</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="ENDC1" id="ENDC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC2" id="ENDC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC3" id="ENDC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC4" id="ENDC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC5" id="ENDC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC6" id="ENDC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC7" id="ENDC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDC8" id="ENDC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDT1" id="ENDT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Myotomes</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC1" id="ENMC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC2" id="ENMC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC3" id="ENMC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC4" id="ENMC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC5" id="ENMC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC6" id="ENMC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC7" id="ENMC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMC8" id="ENMC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMT1" id="ENMT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Reflexes</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMRBiceps" id="ENMRBiceps" value="Biceps">Biceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMRTriceps" id="ENMRTriceps" value="Triceps">Triceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENMRBrachioradialis" id="ENMRBrachioradialis" value="Brachioradialis">Brachioradialis</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDULNDT1" id="ENDULNDT1" value="ULNDT 1">ULNDT 1</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDULNDT2a" id="ENDULNDT2a" value="ULNDT 2a">ULNDT 2a</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDULNDT2b" id="ENDULNDT2b" value="ULNDT 2b">ULNDT 2b</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDULNDT3" id="ENDULNDT3" value="ULNDT 3">ULNDT3</td><td></td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNTinels" id="ENDNTinels" value="Tinels">Tinels</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNPinch" id="ENDNPinch" value="Pinch-grip Test">Pinch-grip Test</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNPronatorSyndrome" id="ENDNPronatorSyndrome" value="Pronator Syndrome">Pronator Syndrome</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNHSPS" id="ENDNHSPS" value="Humerus Supracondylar Process Syndrome">Humerus Supracondylar Process Syndrome</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNRTS" id="ENDNRTS" value="Radial Tunnel Syndrome">Radial Tunnel Syndrome</td><td></td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNBAP" id="ENDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNRAP" id="ENDNRAP" value="Radial Artery Pulse">Radial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="ENDNTOT" id="ENDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td><td></td></tr>
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
<tr><td></td><td></td><td>Radiocarpal</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WRCAP" id="WRCAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WRCPA" id="WRCPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WRCMedialGlide" id="WRCMedialGlide" value="Medial Glide">Medial Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WRCLateralGlide" id="WRCLateralGlide" value="Lateral Glide">Lateral Glide</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WRCCephalad" id="WRCCephalad" value="Cephalad">Cephalad</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WRCCaudad" id="WRCCaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WJLWSS" id="WJLWSS" value="Watsons Scaphoid Shift">Watsons Scaphoid Shift</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WJLLB" id="WJLB" value="Lunotriquestral Ballotment">Lunotriquestral Ballotment</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WJLMidCarpal" id="WJLMidCarpal" value="Midcarpal">Midcarpal</td></tr>
<tr><td></td><td>Muscle</td><td>Strength</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMSFlexors" id="WMSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMSExtensors" id="WMSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMSRadialDeviators" id="WMSRadialDeviators" value="Radial Deviators">Radial Deviators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMSUlnarDeviators" id="WMSUlnarDeviators" value="Ulnar Deviators">Ulnar Deviators
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMSGripStrength" id="WMSGripStrength" value="Grip Strength">Grip Strength</td></tr>
<tr><td></td><td></td><td>Length</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="WLSFlexors" id="WLSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WLSExtensors" id="WLSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WLSRadialDeviators" id="WLSRadialDeviators" value="Radial Deviators">Radial Deviators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WLSUlnarDeviators" id="WLSUlnarDeviators" value="Ulnar Deviators">Ulnar Deviators</td></tr>
<tr><td></td><td></td><td>Isometric</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMIFlexors" id="WMIFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMIExtensors" id="WMIExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMIRadialDeviators" id="WMIRadialDeviators" value="Radial Deviators">Radial Deviators</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMITFCC" id="WMITFCC" value="TFCC">TFCC</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WMIUlnarDeviators" id="WMIUlnarDeviators" value="Ulnar Deviators">Ulnar Deviators</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC1" id="WNDC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC2" id="WNDC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC3" id="WNDC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC4" id="WNDC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC5" id="WNDC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC6" id="WNDC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC7" id="WNDC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDC8" id="WNDC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDT1" id="WNDT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Myotomes</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC1" id="WNMC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC2" id="WNMC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC3" id="WNMC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC4" id="WNMC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC5" id="WNMC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC6" id="WNMC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC7" id="WNMC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMC8" id="WNMC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMT1" id="WNMT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Reflexes</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMRBiceps" id="WNMRBiceps" value="Biceps">Biceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMRTriceps" id="WNMRTriceps" value="Triceps">Triceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNMRBrachioradialis" id="WNMRBrachioradialis" value="Brachioradialis">Brachioradialis</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDULNDT1" id="WNDULNDT1" value="ULNDT 1">ULNDT 1</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDULNDT2a" id="WNDULNDT2a" value="ULNDT 2a">ULNDT 2a</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDULNDT2b" id="WNDULNDT2b" value="ULNDT 2b">ULNDT 2b</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDULNDT3" id="WNDULNDT3" value="ULNDT 3">ULNDT3</td><td></td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNTinels" id="WNDNTinels" value="Tinels">Tinels</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNPinch" id="WNDNPinch" value="Pinch-grip Test">Pinch-grip Test</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNPhalens" id="WNDNPhalens" value="Phalens">Phalens</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNReversePhalens" id="WNDNReversePhalens" value="Reverse Phalens">Reverse Phalens</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNFroment" id="WNDNFroment" value="Froment">Froment</td><td></td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNBAP" id="WNDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNRAP" id="WNDNRAP" value="Radial Artery Pulse">Radial Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="WNDNTOT" id="WNDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td><td></td></tr>
<tr><td>Shoulder</td><td>Observation</td><td>Posture</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SHumerusAcromion" id="SHumerusAcromion" value="Humerus-Acromion"Humerus-Acromion></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMuscleForm" id="SMuscleForm" value="Muscle Form">Muscle Form</td><td></td></tr>
<tr><td></td><td></td><td>Soft Tissue</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SSwelling1" id="SSwelling1" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SRedness" id="SRedness" value="Redness">Redness</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAttitudes" id="SAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td><td></td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAreaTenderess" id="SAreaTenderess" value="Area of Tenderess">Area of Tenderess</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SSwelling2" id="SSwelling2" value="Swelling">Swelling</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SIncTemp" id="SIncTemp" value="Increased Temperature">Increased Temperature</td><td></td></tr>
<tr><td></td><td>Active Range of Movement</td><td>Glenohumeral</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMFlexion" id="SARMFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMExtension" id="SARMExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMAbduction" id="SARMAbduction" value="Abduction">Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMAdduction" id="SARMAdduction" value="Adduction">Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMMedialRotation" id="SARMMedialRotation" value="Medial Rotation">Medial Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMMLateralRotation" id="SARMLateralRotation" value="Lateral Rotation">Lateral Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMHAbduction" id="SARMHAbduction" value="Horizontal Abduction">Horizontal Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMHAdduction" id="SARMHAdduction" value="Horizontal Adduction">Horizontal Adduction</td></tr>



<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMHBB" id="SARMHBB" value="HBB">HBB</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMHBH" id="SARMHBH" value="HBH">HBH</td></tr>
<tr><td></td><td></td><td>Shoulder Girdle</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMElevation" id="SARMElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMDepression" id="SARMDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMProtraction" id="SARMProtraction" value="Protraction">Protractionn</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SARMRetraction" id="SARMRetraction" value="Retraction">Retractionn</td></tr>
<tr><td></td><td>Passive Range of Movement</td><td>Glenohumeral</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMFlexion" id="SPRMFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMExtension" id="SPRMExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMAbduction" id="SPRMAbduction" value="Abduction">Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMAdduction" id="SPRMAdduction" value="Adduction">Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMMedialRotation" id="SPRMMedialRotation" value="Medial Rotation">Medial Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMMLateralRotation" id="SPRMLateralRotation" value="Lateral Rotation">Lateral Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMHAbduction" id="SPRMHAbduction" value="Horizontal Abduction">Horizontal Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMHAdduction" id="SPRMHAdduction" value="Horizontal Adduction">Horizontal Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMHBB" id="SPRMHBB" value="HBB">HBB</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMHBH" id="SPRMHBH" value="HBH">HBH</td></tr>
<tr><td></td><td></td><td>Shoulder Girdle</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMElevation" id="SPRMElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMDepression" id="SPRMDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMProtraction" id="SPRMProtraction" value="Protraction">Protractionn</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SPRMRetraction" id="SPRMRetraction" value="Retraction">Retractionn</td></tr>
<tr><td></td><td>Accessory Movements</td><td>Glenohumeral</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMGAP" id="SAMGAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMGPA" id="SAMGPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMGCaudad" id="SAMGCaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMGCephalad" id="SAMGCephalad" value="Cephalad">Cephalad</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMGLateral" id="SAMGLateral" value="Lateral Glide">Lateral</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMGMedial" id="SAMGMedial" value="Medial Glide">Medial</td></tr>
<tr><td></td><td></td><td>Acromioclavicular</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMAAP" id="SAMAAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMAPA" id="SAMAPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMACaudad" id="SAMACaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td></td><td>Sternoclavicular</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMSAP" id="SAMSAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMSPA" id="SAMSPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SAMSCaudad" id="SAMSCaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SJLAD" id="SJLAD" value="Anterior Draw">Anterior Draw</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SJLFB" id="SJLFB" value="Fucrum Test">Fucrum Test</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SJLJT" id="SJLJT" value="Jerk Test">Jerk Test</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SJLSS" id="SJLSS" value="Sulcus Sign">Sulcus Sign</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SJLSL" id="SJLSL" value="Shoulder Lock">Shoulder Lock</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SJLSQ" id="SJLSQ" value="Shoulder Quadrant">Shoulder Quadrant</td></tr>
<tr><td></td><td>Muscle Tests</td><td>Strength</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSFlexors" id="SMSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSExtensors" id="SMSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSAbductors" id="SMSAbductors" value="Abductors">Abductors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSUlAdductors" id="SMSAdductors" value="Adductors">Adductors
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSMedialRotators" id="SMSMedialRotators" value="Medial Rotators">Medial Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSLateralRotators" id="SMSLateralRotators" value="Lateral Rotators">Lateral Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSElevation" id="SMSElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSDepression" id="SMSDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSProtractors" id="SMSProtractors" value="Protractors">Protractors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSRetractors" id="SMSRetractors" value="Retractors">Retractors</td></tr>
<tr><td></td><td>Muscle</td><td>Length</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLFlexors" id="SMLFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLExtensors" id="SMLExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLAbductors" id="SMLAbductors" value="Abductors">Abductors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLUlAdductors" id="SMLAdductors" value="Adductors">Adductors
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLMedialRotators" id="SMLMedialRotators" value="Medial Rotators">Medial Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLLateralRotators" id="SMLLateralRotators" value="Lateral Rotators">Lateral Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLElevation" id="SMLElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLDepression" id="SMLDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLProtractors" id="SMLProtractors" value="Protractors">Protractors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMLRetractors" id="SMLRetractors" value="Retractors">Retractors</td></tr>
<tr><td></td><td></td><td>Isometric</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIFlexors" id="SMIFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIExtensors" id="SMIExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIAbductors" id="SMIAbductors" value="Abductors">Abductors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIUlAdductors" id="SMIAdductors" value="Adductors">Adductors
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIMedialRotators" id="SMIMedialRotators" value="Medial Rotators">Medial Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMILateralRotators" id="SMILateralRotators" value="Lateral Rotators">Lateral Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIElevation" id="SMIElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIDepression" id="SMIDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIProtractors" id="SMIProtractors" value="Protractors">Protractors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMIRetractors" id="SMIRetractors" value="Retractors">Retractors</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SMSPLHBI" id="SMSPLHBI" value="LH Biceps Impingement">LH Biceps Impingement</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC1" id="SNDC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC2" id="SNDC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC3" id="SNDC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC4" id="SNDC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC5" id="SNDC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC6" id="SNDC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC7" id="SNDC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDC8" id="SNDC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDT1" id="SNDT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Myotomes</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC1" id="SNMC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC2" id="SNMC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC3" id="SNMC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC4" id="SNMC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC5" id="SNMC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC6" id="SNMC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC7" id="SNMC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMC8" id="SNMC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMT1" id="SNMT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Reflexes</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMRBiceps" id="SNMRBiceps" value="Biceps">Biceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMRTriceps" id="SNMRTriceps" value="Triceps">Triceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNMRBrachioradialis" id="SNMRBrachioradialis" value="Brachioradialis">Brachioradialis</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDULNDT1" id="SNDULNDT1" value="ULNDT 1">ULNDT 1</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDULNDT2a" id="SNDULNDT2a" value="ULNDT 2a">ULNDT 2a</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDULNDT2b" id="SNDULNDT2b" value="ULNDT 2b">ULNDT 2b</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDULNDT3" id="SNDULNDT3" value="ULNDT 3">ULNDT3</td><td></td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDNTinels" id="SNDNTinels" value="Tinels">Tinels</td><td></td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDNVAP" id="SNDNVAP" value="Vertebratal Artery Pulse">Vertebratal Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDNTOT" id="SNDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#F00';"><input type="checkbox" name="SNDNBAP" id="SNDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td><td></td></tr>
</table>
<hr />

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>