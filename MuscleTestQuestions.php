<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Clinical Reasoning Tool</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<?php

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBackLabel = $HealingStage = $Severity = $Irritability = $MechInFlame = $PainResist = $Genic = "";
$tOGS1 = $tOGS2 = $tOGS3 = $tPRROM1 = $tPRROM2 = $tPRROM3 = $tLimitation1 = $tLimitation2 = $tLimitation3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $HealingStage = test_input($_POST["HealingStage"]);
    $Severity = test_input($_POST["Severity"]);
	$Irritability = test_input($_POST["Irritability"]);
	$MechInFlame = test_input($_POST["MechInFlame"]);
	$PainResist = test_input($_POST["PainResist"]);
	$Genic = test_input($_POST["Genic"]);
	$tOGS1 = test_input($_POST["tOGS1"]);
	$tOGS2 = test_input($_POST["tOGS2"]);
	$tOGS3 = test_input($_POST["tOGS3"]);
	$tPRROM1 = test_input($_POST["tPRROM1"]);
	$tPRROM2 = test_input($_POST["tPRROM2"]);
	$tPRROM3 = test_input($_POST["tPRROM3"]);
	$tLimitation1 = test_input($_POST["tLimitation1"]);
	$tLimitation2 = test_input($_POST["tLimitation2"]);
	$tLimitation3 = test_input($_POST["tLimitation3"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
Accessory movements of the elbow.
<hr />
<div class="PageReadableDarkGreen"><h3>Clip XIX</h3></div>
<hr />
<p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=740f5643-fcbb-4627-93d3-cbc9bf70bfba&v=1" width="720" height="405" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe>
</p>
<hr />

<div class="PageReadableBlue"><strong><h2>Question 33</h2></strong>
<h3>Read about muscle tests and their documentation.</h3></div>
<div class="PageReadableBlack"><strong><h3>[<a href="muscletests.html" target="_blank">Muscle Tests and Oxford Grading Scale</a>]&nbsp;|&nbsp;[<a href="documentation.html" target="_blank">Documentation</a>]</strong></h3></strong></div>

<div class="PageReadableBlue"><h3>Question 33a - Record the following:</h3></div>
<div class="PageReadableBlue">
<p>(i.) - Record the Oxford Scale Grade.<br />
(ii.) - Record when pain or resistance were observed.<br />
(iii.) - Record the limitation of the test.</p>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<table border="1">
<tr><th>Muscle Group</th><th>OGS</th><th>P<sub>1</sub> or R<sub>1 ROM</sub></th><th>Limitation</th></tr>
<tr><td>Strength Wrist Extensors</td>
<td><textarea id="tOGS1" name="tOGS1" rows="1" cols="30"></textarea></td>
<td><textarea id="tPRROM1" name="tPRROM1" rows="1" cols="30"></textarea></td>
<td><textarea id="tLimitation1" name="tLimitation1" rows="1" cols="30"></textarea></td></tr>
<tr><td>Strength Wrist Flexors</td>
<td><textarea id="tOGS2" name="tOGS2" rows="1" cols="30"></textarea></td>
<td><textarea id="tPRROM2" name="tPRROM2" rows="1" cols="30"></textarea></td>
<td><textarea id="tLimitation2" name="tLimitation2" rows="1" cols="30"></textarea></td></tr>
<tr><td>Isometric Wrist Flexors &amp; Extensors / Function</td>
<td><textarea id="tOGS3" name="tOGS3" rows="1" cols="30"></textarea></td>
<td><textarea id="tPRROM3" name="tPRROM3" rows="1" cols="30"></textarea></td>
<td><textarea id="tLimitation3" name="tLimitation3" rows="1" cols="30"></textarea></td></tr>
</table>



<div class="PageReadableBlue"><strong><h2>Question 33b</h2></strong>

<h3>From the range of movement findings identify any further support for the SIN factor.</h3></div>

<div class="PageReadableBlack"><strong><h3>[Severity]</h3><strong></div>
<select name="Severity">
  <option value="Non Painful">Non Painful</option>
  <option value="Painful">Painful</option>
  <option value="Moderate">Moderate</option>
  <option value="Severe">Severe</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Irritability]</h3></strong></div>
<select name="Irritability">
  <option value="Non Irritable">Non Irritable</option>
  <option value="Mild">Mild</option>
  <option value="Moderate">Moderate</option>
  <option value="Severe">Severe</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Mechanical versus Inflammatory]</h3></strong></div>
<select name="MechInflame">
  <option value="Mechanical" >Mechanical</option>
  <option value="Inflammatory">Inflammatory</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Pain versus Resistance]</h3></strong></div>
<select name="PainResist">
  <option value="Pain">Pain</option>
  <option value="Resistance">Resistance</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Genic]</h3></strong></div>
<select name="Genic">
  <option value="Arthrogenic">Arthrogenic</option>
  <option value="Myogenic">Myogenic</option>
  <option value="Neurogenic">Neurogenic</option>
  <option value="Vasculogenic">Vasculogenic</option>
</select>

<hr />
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="FunctionalSpecialTestQuestions.php">Next Question.</a></p>
<hr />
</form>
<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($Severity) && ($Severity!="")) ||
   (isset($Irritability) && ($Irritability!="")) ||
   (isset($MechInFlame) && ($MechInFlame!="")) ||
   (isset($PainResist) && ($PainResist!="")) ||
   (isset($Genic) && ($Genic!=""))){
      $FeedBackLabel = "Your Feedback:";
	  
	@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nMuscle Test Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);	  
	  }
else
    {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($tOGS1) && ($tOGS1!="")) ||
   (isset($tOGS2) && ($tOGS2!="")) |
   (isset($tOGS3) && ($tOGS3!="")) ||
   (isset($tPRROM1) && ($tPRROM1!="")) ||
   (isset($tPRROM2) && ($tPRROM2!="")) ||
   (isset($tPRROM3) && ($tPRROM3!="")) ||
   (isset($tLimitation1) && ($tLimitation1!="")) ||
   (isset($tLimitation2) && ($tLimitation2!="")) ||
   (isset($tLimitation3) && ($tLimitation3!=""))){


   $fOutputText = "<table border=\"";
   $fOutputText .= "1\"";
   $fOutputText .= "><tr><th>Muscle Group</th><th>OGS</th><th>P<sub>1</sub> or R<sub>1 ROM</sub></th><th>Limitation</th></tr><tr><td>Strength Wrist Extensors</td><td>$tOGS1";
   $fOutputText .= "</td><td>$tOGS2</td><td>$tOGS3</td></tr><tr><td>Strength Wrist Flexors</td><td>$tPRROM1</td><td>$tPRROM2</td><td>$tPRROM3</td></tr>";
   $fOutputText .= "<tr><td>Isometric Wrist Flexors &amp; Extensors / Function</td><td>$tLimitation1</td><td>$tLimitation2</td><td>$tLimitation3</td></tr></table>";
   echo $fOutputText;
   fwrite($fp, $fOutputText);}

	if (isset($Severity) && ($Severity!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Severity</strong>";
	$fOutputText .= "</div>";
	echo $Severity;
	$Severity = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($Irritability) && ($Irritability!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Irritability</strong>";
	$fOutputText .= "</div>";
	echo $Irritability;
	$Irritability = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
if (isset($MechInFlame) && ($MechInFlame!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Mechanical versus Inflammatory</strong>";
	$fOutputText .= "</div>";
	echo $MechInFlame;
	$MechInFlame = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($PainResist) && ($PainResist!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Pain versus Resistance</strong>";
	$fOutputText .= "</div>";
	echo $PainResist;
	$PainResist = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}		

if (isset($Genic) && ($Genic!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Genic</strong>";
	$fOutputText .= "</div>";
	echo $Genic;
	$Genic = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}


	fclose(!fp);
	$FeedBackLabel = "";
?>
<hr />
</body>
</html>