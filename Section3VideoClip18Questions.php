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

$FeedBackLabel = $Severity = $Irritability = $MechInFlame = $PainResist = $Genic = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
<h1 align="center">Section 3</h1>
<h2 align="center">Objective Physical Assessment</h2>
<hr />
<div class="PageReadableBlue"><p>You should how have collected an objective physical examination for Mrs Andrews.</p>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb Icon" /></p>
<p>Watch again for a second time to the objective physical assessment. This time the recording will be paused to allow time to consider the responses and improve your documentation.</p>
<p>Multiple choices questions will then be asked to aid your clinical reasoning.</p></div>
<div class="PageReadableDarkGreen"><h2>Objective Physical Assessment</h2>
<h3>Clip XVIII</h3></div>
<hr />
<p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=f92bdac5-9191-4688-8dab-e7da95307a73&v=1" width="720" height="405" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe>
</p>
<hr />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Question 28</h2>
<p>Read about observation and how to document</p></div>
<div class="PageReadableBlack"><strong>[<a href="observation.html" target="_blank">Observation</a>]&nbsp;|&nbsp;[<a href="documentation.html" target="_blank">Documentation</a>]</strong></div>

<div class="PageReadableBlue"><p>From the observation findings identify any further support for the SIN factor.</p>
</div>
<hr />
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
 
<p><a href="Section3VideoClip19Questions.php">Next Question.</a></p>
<hr />
</form>
<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($Severity) && ($Severity!="")) ||
   (isset($Irritability) && ($Irritability!="")) ||
   (isset($MechInFlame) && ($MechInFlame!="")) ||
   (isset($PainResist) && ($PainResist!="")) ||
   (isset($Genic) && ($Genic!=""))){
   
/*if ((isset($Severity)) ||
   (isset($Irritability)) ||
   (isset($MechInFlame)) ||
   (isset($PainResist)) ||
   (isset($Genic))){*/
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 3 : Video Clip 18 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{
	$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";
	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if (isset($Severity) && ($Severity!="")) {
//if (isset($Severity)) {	
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Severity</strong></div>";
	$fOutputText .= $Severity;
	$fOutputText .= "<br />";
	$Severity = "";
    echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability) && ($Irritability!="")) {
//if (isset($Irritability)) {	
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Irritability</strong></div>";
	$fOutputText .= $Irritability;
	$fOutputText .= "<br />";
	$Irritability = "";
    echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
if (isset($MechInFlame) && ($MechInFlame!="")) {
//if (isset($MechInFlame)) {	
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Mechanical versus Inflammatory</strong></div>";
	$fOutputText .= $MechInFlame;
	$fOutputText .= "<br />";
	$MechInFlame = "";
    echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($PainResist) && ($PainResist!="")) {
//if (isset($PainResist)) {	
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Pain versus Resistance</strong></div>";
	$fOutputText .= $PainResist;
	$fOutputText .= "<br />";
	$PainResist = "";
    echo $fOutputText;
    fwrite($fp, $fOutputText);}		

if (isset($Genic) && ($Genic!="")) {
//if (isset($Genic)) {	
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Genic</strong></div>";
	$fOutputText .= $Genic;
	$fOutputText .= "<br />";
	$Genic = "";
    echo $fOutputText;
    fwrite($fp, $fOutputText);}
$FeedBackLabel = ""	;
fclose($fp);
?>
<hr />
</body>
</html>