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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $HealingStage = test_input($_POST["HealingStage"]);
    $Severity = test_input($_POST["Severity"]);
	$Irritability = test_input($_POST["Irritability"]);
	$MechInFlame = test_input($_POST["MechInFlame"]);
	$PainResist = test_input($_POST["PainResist"]);
	$Genic = test_input($_POST["Genic"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
Palpation of the elbow, forearm and wrist.
<hr />
<div class="PageReadableDarkGreen"><h3>Clip XIX</h3></div>
<hr />
<p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=398cc8b9-ffa1-44fd-852a-6504369ae7ee&v=1" width="720" height="405" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe>
</p>
<hr />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><strong><h2>Question 31</h2></strong>
<h3>Read about palpation and revise the normal stages of healing</h3></div>
<div class="PageReadableBlack"><strong><h3>[<a href="palpation.html" target="_blank">Palpation</a>]&nbsp;|&nbsp;[<a href="http://www.electrotherapy.org/assets/Downloads/tissue%20repair%202014%20Final.pdf" target="_blank">Stages of Healing</a>]&nbsp;|&nbsp;[<a href="documentation.html" target="_blank">Documentation</a>]</strong></h3></strong></div>

<div class="PageReadableBlue"><strong><h2>Question 31a</h2></strong>
<h3>What stage of healing is the condition likely to be?</h3></div>

<div class="PageReadableBlack"><strong><h3>[Stages of Healing]</h3></strong></div>
<select name="HealingStage">
  <option value="BleedingHaematoma">Bleeding Haematoma</option>
  <option value="Inflammation">Inflammation</option>
  <option value="Proliferation">Proliferation</option>
  <option value="Remodelling">Remodelling</option>
</select>

<div class="PageReadableBlue"><strong><h2>Question 31b</h2></strong>
<h3>From the palpation findings identify any further support for the SIN factor.</h3></div>

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
 
<p><a href="Section3VideoClip22Questions.php">Next Question.</a></p>
<hr />
</form>
<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($HealingStage) && ($HealingStage!="")) ||
   (isset($Severity) && ($Severity!="")) ||
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

$fOutputText = "<hr />\nPalpation Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);	  
}
else
    {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

	if (isset($HealingStage) && ($HealingStage!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Healing Stage</strong>";
	$fOutputText .= "</div>";
	echo $HealingStage;
	$HealingStage = "";
    $fOutputText .= "<br />";
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


	
	$FeedBackLabel = "";
	fclose(!fp);
?>
<hr />
</body>
</html>