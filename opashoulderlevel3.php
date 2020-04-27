<!DOCTYPE HTML>  
<html>
<head>
<title>OPA -> Shoulder -> Level 3</title>
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
<h2>Shoulder Tests - Level 3</h2>
<hr />
<div align="top" valign="top" width="100%">
<table border="1">
<tr><th>Body Part</th><th>Level 1</th><th>Level 2</th><th>Level 3</th></tr>
<tr><td>Shoulder</td><td>Observation</td><td>Posture</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SHumerusAcromion" id="SHumerusAcromion" value="Humerus-Acromion"Humerus-Acromion></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMuscleForm" id="SMuscleForm" value="Muscle Form">Muscle Form</td><td></td></tr>
<tr><td></td><td></td><td>Soft Tissue</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SSwelling1" id="SSwelling1" value="Swelling">Swelling</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SRedness" id="SRedness" value="Redness">Redness</td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAttitudes" id="SAttitudes" value="Attitudes and Feelings">Attitudes and Feelings</td><td></td></tr>
<tr><td></td><td>Palpation</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAreaTenderess" id="SAreaTenderess" value="Area of Tenderess">Area of Tenderess</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SSwelling2" id="SSwelling2" value="Swelling">Swelling</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SIncTemp" id="SIncTemp" value="Increased Temperature">Increased Temperature</td><td></td></tr>
<tr><td></td><td>Active Range of Movement</td><td>Glenohumeral</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMFlexion" id="SARMFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMExtension" id="SARMExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMAbduction" id="SARMAbduction" value="Abduction">Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMAdduction" id="SARMAdduction" value="Adduction">Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMMedialRotation" id="SARMMedialRotation" value="Medial Rotation">Medial Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMMLateralRotation" id="SARMLateralRotation" value="Lateral Rotation">Lateral Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMHAbduction" id="SARMHAbduction" value="Horizontal Abduction">Horizontal Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMHAdduction" id="SARMHAdduction" value="Horizontal Adduction">Horizontal Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMHBB" id="SARMHBB" value="HBB">HBB</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMHBH" id="SARMHBH" value="HBH">HBH</td></tr>
<tr><td></td><td></td><td>Shoulder Girdle</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMElevation" id="SARMElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMDepression" id="SARMDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMProtraction" id="SARMProtraction" value="Protraction">Protractionn</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SARMRetraction" id="SARMRetraction" value="Retraction">Retractionn</td></tr>
<tr><td></td><td>Passive Range of Movement</td><td>Glenohumeral</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMFlexion" id="SPRMFlexion" value="Flexion">Flexion</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMExtension" id="SPRMExtension" value="Extension">Extension</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMAbduction" id="SPRMAbduction" value="Abduction">Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMAdduction" id="SPRMAdduction" value="Adduction">Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMMedialRotation" id="SPRMMedialRotation" value="Medial Rotation">Medial Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMMLateralRotation" id="SPRMLateralRotation" value="Lateral Rotation">Lateral Rotation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMHAbduction" id="SPRMHAbduction" value="Horizontal Abduction">Horizontal Abduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMHAdduction" id="SPRMHAdduction" value="Horizontal Adduction">Horizontal Adduction</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMHBB" id="SPRMHBB" value="HBB">HBB</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMHBH" id="SPRMHBH" value="HBH">HBH</td></tr>
<tr><td></td><td></td><td>Shoulder Girdle</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMElevation" id="SPRMElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMDepression" id="SPRMDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMProtraction" id="SPRMProtraction" value="Protraction">Protractionn</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SPRMRetraction" id="SPRMRetraction" value="Retraction">Retractionn</td></tr>
<tr><td></td><td>Accessory Movements</td><td>Glenohumeral</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMGAP" id="SAMGAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMGPA" id="SAMGPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMGCaudad" id="SAMGCaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMGCephalad" id="SAMGCephalad" value="Cephalad">Cephalad</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMGLateral" id="SAMGLateral" value="Lateral Glide">Lateral</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMGMedial" id="SAMGMedial" value="Medial Glide">Medial</td></tr>
<tr><td></td><td></td><td>Acromioclavicular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMAAP" id="SAMAAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMAPA" id="SAMAPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMACaudad" id="SAMACaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td></td><td>Sternoclavicular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMSAP" id="SAMSAP" value="A-P">A-P</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMSPA" id="SAMSPA" value="P-A">P-A</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SAMSCaudad" id="SAMSCaudad" value="Caudad">Caudad</td></tr>
<tr><td></td><td>Joint Integrity</td><td>Ligament Stability</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SJLAD" id="SJLAD" value="Anterior Draw">Anterior Draw</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SJLFB" id="SJLFB" value="Fucrum Test">Fucrum Test</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SJLJT" id="SJLJT" value="Jerk Test">Jerk Test</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SJLSS" id="SJLSS" value="Sulcus Sign">Sulcus Sign</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SJLSL" id="SJLSL" value="Shoulder Lock">Shoulder Lock</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SJLSQ" id="SJLSQ" value="Shoulder Quadrant">Shoulder Quadrant</td></tr>
<tr><td></td><td>Muscle Tests</td><td>Strength</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSFlexors" id="SMSFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSExtensors" id="SMSExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSAbductors" id="SMSAbductors" value="Abductors">Abductors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSUlAdductors" id="SMSAdductors" value="Adductors">Adductors
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSMedialRotators" id="SMSMedialRotators" value="Medial Rotators">Medial Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSLateralRotators" id="SMSLateralRotators" value="Lateral Rotators">Lateral Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSElevation" id="SMSElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSDepression" id="SMSDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSProtractors" id="SMSProtractors" value="Protractors">Protractors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSRetractors" id="SMSRetractors" value="Retractors">Retractors</td></tr>
<tr><td></td><td>Muscle</td><td>Length</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLFlexors" id="SMLFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLExtensors" id="SMLExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLAbductors" id="SMLAbductors" value="Abductors">Abductors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLUlAdductors" id="SMLAdductors" value="Adductors">Adductors
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLMedialRotators" id="SMLMedialRotators" value="Medial Rotators">Medial Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLLateralRotators" id="SMLLateralRotators" value="Lateral Rotators">Lateral Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLElevation" id="SMLElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLDepression" id="SMLDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLProtractors" id="SMLProtractors" value="Protractors">Protractors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMLRetractors" id="SMLRetractors" value="Retractors">Retractors</td></tr>
<tr><td></td><td></td><td>Isometric</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIFlexors" id="SMIFlexors" value="Flexors">Flexors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIExtensors" id="SMIExtensors" value="Extensors">Extensors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIAbductors" id="SMIAbductors" value="Abductors">Abductors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIUlAdductors" id="SMIAdductors" value="Adductors">Adductors
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIMedialRotators" id="SMIMedialRotators" value="Medial Rotators">Medial Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMILateralRotators" id="SMILateralRotators" value="Lateral Rotators">Lateral Rotators</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIElevation" id="SMIElevation" value="Elevation">Elevation</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIDepression" id="SMIDepression" value="Depression">Depression</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIProtractors" id="SMIProtractors" value="Protractors">Protractors</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMIRetractors" id="SMIRetractors" value="Retractors">Retractors</td></tr>
<tr><td></td><td></td><td>Special</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SMSPLHBI" id="SMSPLHBI" value="LH Biceps Impingement">LH Biceps Impingement</td></tr>
<tr><td></td><td>Neurological Integrity</td><td>Dermatones</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC1" id="SNDC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC2" id="SNDC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC3" id="SNDC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC4" id="SNDC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC5" id="SNDC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC6" id="SNDC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC7" id="SNDC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDC8" id="SNDC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDT1" id="SNDT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Myotomes</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC1" id="SNMC1" value="C1">C1</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC2" id="SNMC2" value="C2">C2</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC3" id="SNMC3" value="C3">C3</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC4" id="SNMC4" value="C4">C4</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC5" id="SNMC5" value="C5">C5</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC6" id="SNMC6" value="C6">C6</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC7" id="SNMC7" value="C7">C7</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMC8" id="SNMC8" value="C8">C8</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMT1" id="SNMT1" value="T1">T1</td></tr>
<tr><td></td><td></td><td>Reflexes</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMRBiceps" id="SNMRBiceps" value="Biceps">Biceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMRTriceps" id="SNMRTriceps" value="Triceps">Triceps</td></tr>
<tr><td></td><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNMRBrachioradialis" id="SNMRBrachioradialis" value="Brachioradialis">Brachioradialis</td></tr>
<tr><td></td><td>Neurodynamic Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT1" id="SNDULNDT1" value="ULNDT 1">ULNDT 1</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT2a" id="SNDULNDT2a" value="ULNDT 2a">ULNDT 2a</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT2b" id="SNDULNDT2b" value="ULNDT 2b">ULNDT 2b</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDULNDT3" id="SNDULNDT3" value="ULNDT 3">ULNDT3</td><td></td></tr>
<tr><td></td><td>Other Nerve Tests</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNTinels" id="SNDNTinels" value="Tinels">Tinels</td><td></td></tr>
<tr><td></td><td>Vascular</td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNVAP" id="SNDNVAP" value="Vertebratal Artery Pulse">Vertebratal Artery Pulse</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNTOT" id="SNDNTOT" value="Thoracic Outlet Test">Thoracic Outlet Test</td><td></td></tr>
<tr><td></td><td></td><td onclick="this.style.backgroundColor = '#00FF00';"><input type="checkbox" name="SNDNBAP" id="SNDNBAP" value="Brachial Artery Pulse">Brachial Artery Pulse</td><td></td></tr>
</table>
<hr />

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Table and Re-Attempt Question(s).</a></p>

<hr />

</div>
<?php


?>
</body>
</html>