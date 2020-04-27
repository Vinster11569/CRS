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

$FeedBackLabel = $arom = $por = $Severity = $Irritability = $MechInFlame = $PainResist = $Genic = "";
$Severity1 = $Irritability1 = $MechInFlame1 = $PainResist1 = $Genic1 = "";
$tWE1 = $tWE2 = $tWE3 = $tWF1 = $tWF2 = $tWF3 = $tEE1 = $tEE2 = $tEE3 = $tEF1 = $tEF2 = $tEF3 = $tES1 = $tES2 = $tES3 = $tEP1 = $tEP2 = $tEP3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $por = test_input($_POST["por"]);
    $arom = test_input($_POST["arom"]);
    $tWE1 = test_input($_POST["tWE1"]);
    $tWE2 = test_input($_POST["tWE2"]);
    $tWE3 = test_input($_POST["tWE3"]);
    $tWF1 = test_input($_POST["tWF1"]);
    $tWF2 = test_input($_POST["tWF2"]);
    $tWF3 = test_input($_POST["tWF3"]);
    $tEE1 = test_input($_POST["tEE1"]);
    $tEE2 = test_input($_POST["tEE2"]);
    $tEE3 = test_input($_POST["tEE3"]);
    $tEF1 = test_input($_POST["tEF1"]);
    $tEF2 = test_input($_POST["tEF2"]);
    $tEF3 = test_input($_POST["tEF3"]);
    $tES1 = test_input($_POST["tES1"]);
    $tES2 = test_input($_POST["tES2"]);
    $tES3 = test_input($_POST["tES3"]);
    $tEP1 = test_input($_POST["tEP1"]);
    $tEP2 = test_input($_POST["tEP2"]);
    $tEP3 = test_input($_POST["tEP 3"]);	
    $Severity = test_input($_POST["Severity"]);
	$Irritability = test_input($_POST["Irritability"]);
	$MechInFlame = test_input($_POST["MechInFlame"]);
	$PainResist = test_input($_POST["PainResist"]);
	$Genic = test_input($_POST["Genic"]);
	$Severity1 = test_input($_POST["Severity1"]);
	$Irritability1 = test_input($_POST["Irritability1"]);
	$MechInFlame1 = test_input($_POST["MechInFlame1"]);
	$PainResist1 = test_input($_POST["PainResist1"]);
	$Genic1 = test_input($_POST["Genic1"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
Active Range of Movement of the elbow and wrist measured by a goniometer.
<hr />
<div class="PageReadableDarkGreen"><h3>Clip XIX</h3></div>
<hr />
<p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=df76e699-ee7a-481a-a019-a63f91be459b&v=1" width="720" height="405" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe>
</p>
<hr />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><strong><h2>Question 29</h2></strong>
<h3>Read about active range of movement and goniometry</h3></div>
<div class="PageReadableBlack"><strong><h3>[<a href="arom.html" target="_blank">Active Range of Movement</a>]&nbsp;|&nbsp;[<a href="goniometry.html" target="_blank">Goniometry</a>]&nbsp;|&nbsp;[<a href="documentation.html" target="_blank">Documentation</a>]</strong></h3></strong></div>
<hr />
<div class="PageReadableBlue"><strong><h3>Question 29i</h3></strong>
<p>Record the active range of movement in degrees: <input type="text" size="3" name="arom" />&nbsp;&deg;</p></div>

<div class="PageReadableBlue"><strong><h3>Question 29ii</h3></strong>
<p>Record when pain or resistance were observed: <input type="text" size="30" name="por" /></p></div>

<div class="PageReadableBlue"><strong><h3>Question 29iii</h3></strong>
<p>Record the limit to the movement.</p></div>

<table border="1">
<tr>
<th>Movement</th><th>Active Range</th><th>P<sub>1</sub> or R<sub>2 ROM</sub></th><th>Limitation</th>
<tr>
<th>Wrist Extension</th>
<td><textarea id="tWE1" name="tWE1" rows="1" cols="30"></textarea></td>
<td><textarea id="tWE2" name="tWE2" rows="1" cols="30"></textarea></td>
<td><textarea id="tWE3" name="tWE3" rows="1" cols="30"></textarea></td>
</tr>
<tr>
<th>Wrist Flexion</th>
<td><textarea id="tWF1" name="tWF1" rows="1" cols="30"></textarea></td>
<td><textarea id="tWF2" name="tWF2" rows="1" cols="30"></textarea></td>
<td><textarea id="tWF3" name="tWF3" rows="1" cols="30"></textarea></td>
</tr>
<tr>
<th>Elbow Extension</th>
<td><textarea id="tEE1" name="tEE1" rows="1" cols="30"></textarea></td>
<td><textarea id="tEE2" name="tEE2" rows="1" cols="30"></textarea></td>
<td><textarea id="tEE3" name="tEE3" rows="1" cols="30"></textarea></td>
</tr>
<tr>
<th>Elbow Flexion</th>
<td><textarea id="tEF1" name="tEF1" rows="1" cols="30"></textarea></td>
<td><textarea id="tEF2" name="tEF2" rows="1" cols="30"></textarea></td>
<td><textarea id="tEF3" name="tEF3" rows="1" cols="30"></textarea></td>
</tr>
<tr>
<th>Elbow Supination</th>
<td><textarea id="tES1" name="tES1" rows="1" cols="30"></textarea></td>
<td><textarea id="tES2" name="tES2" rows="1" cols="30"></textarea></td>
<td><textarea id="tES3" name="tES3" rows="1" cols="30"></textarea></td>
</tr>
<tr>
<th>Elbow Pronation</th>
<td><textarea id="tEP1" name="tEP1" rows="1" cols="30"></textarea></td>
<td><textarea id="tEP2" name="tEP2" rows="1" cols="30"></textarea></td>
<td><textarea id="tEP3" name="tEP3" rows="1" cols="30"></textarea></td>
</tr>
<tr>
</table>


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

<div class="PageReadableBlue"><strong><h2>Question 30</h2></strong>
<h3>Read about passive range of movement and goniometry</h3></div>
<div class="PageReadableBlack"><strong><h3>[<a href="prom.html" target="_blank">Passive Range of Movement</a>]&nbsp;|&nbsp;[<a href="goniometry.html" target="_blank">Goniometry</a>]&nbsp;|&nbsp;[<a href="documentation.html" target="_blank">Documentation</a>]</strong></h3></strong></div>

<p>Click to save this Word document <a href="./documents/Passive Range of Movement.docx" target="_blank">Here</a> and then open it to:<br />
(i) Record the passive range of movement n degrees<br />
(ii) Draw a movement diagram</p>

<div class="PageReadableBlue">From the range of movement findings identify any further support for the SIN factor.</div>

<div class="PageReadableBlack"><strong><h3>[Severity]</h3><strong></div>
<select name="Severity1">
  <option value="Non Painful">Non Painful</option>
  <option value="Painful">Painful</option>
  <option value="Moderate">Moderate</option>
  <option value="Severe">Severe</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Irritability]</h3></strong></div>
<select name="Irritability1">
  <option value="Non Irritable">Non Irritable</option>
  <option value="Mild">Mild</option>
  <option value="Moderate">Moderate</option>
  <option value="Severe">Severe</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Mechanical versus Inflammatory]</h3></strong></div>
<select name="MechInflame1">
  <option value="Mechanical" >Mechanical</option>
  <option value="Inflammatory">Inflammatory</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Pain versus Resistance]</h3></strong></div>
<select name="PainResist1">
  <option value="Pain">Pain</option>
  <option value="Resistance">Resistance</option>
</select>

<div class="PageReadableBlack"><strong><h3>[Genic]</h3></strong></div>
<select name="Genic1">
  <option value="Arthrogenic">Arthrogenic</option>
  <option value="Myogenic">Myogenic</option>
  <option value="Neurogenic">Neurogenic</option>
  <option value="Vasculogenic">Vasculogenic</option>
</select>


<hr />
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="PalpationQuestions.php">Next Question.</a></p>
<hr />
</form>
<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($por) && ($por!="")) ||
   (isset($arom) && ($arom!="")) ||
   (isset($Severity) && ($Severity!="")) ||
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

$fOutputText = "<hr />\nSection 3: Video clip 19 Questions\n<hr />\n";
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

if (isset($arom) && ($arom!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Active Range of Movement</strong></div>";
	
	$fOutputText .= $arom;
	$fOutputText .= "&deg";
	$arom = "";
    $fOutputText .= "<br />";
	
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($por) && ($por!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Pain or Resistance Observed?</strong></div>";
	
	$fOutputText .= $por;
	$por = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if ((isset($tWE1) && ($tWE1!="")) ||
   (isset($tWE2) && ($tWE2!="")) |
   (isset($tWE3) && ($tWE3!="")) ||
   (isset($tWF1) && ($tWF1!="")) ||
   (isset($tWF2) && ($tWF2!="")) ||
   (isset($tWF3) && ($tWF3!="")) ||
   (isset($tEE1) && ($tEE1!="")) ||
   (isset($tEE2) && ($tEE2!="")) ||
   (isset($tEE3) && ($tEE3!="")) ||
   (isset($tEF1) && ($tEF1!="")) ||
   (isset($tEF2) && ($tEF2!="")) ||
   (isset($tEF3) && ($tEF3!="")) ||
   (isset($tES1) && ($tES1!="")) ||
   (isset($tES2) && ($tES2!="")) ||
   (isset($tES3) && ($tES3!="")) ||
   (isset($tEP1) && ($tEP1!="")) ||
   (isset($tEP2) && ($tEP2!="")) ||
   (isset($tEP3) && ($tEP3!=""))){
   
   $fOutputText = "<table border=\"";
   $fOutputText .= "1\"";
   $fOutputText .= "><tr><th>Movement</th><th>Active Range</th><th>P<sub>1</sub> or R<sub>2 ROM</sub></th><th>Limitation</th></tr><tr><th>Wrist Extension</th><td>";
   $fOutputText .= "$tWE1</td><td>$tWE2</td><td>$tWE3</td></tr><tr><th>Wrist Flexion</th><td>$tWF1</td><td>$tWF2</td><td>$tWF3</td></tr><tr><th>Elbow Extension</th><td>";
   $fOutputText .= "$tEE1</td><td>$tEE2</td><td>$tEE3</td></tr><tr><th>Elbow Flexion</th><td>$tEF1</td><td>$tEF2</td><td>$tEF3</td></tr><tr><th>Elbow Supination</th><td>";
   $fOutputText .= "$tES1</td><td>$tES2</td><td>$tES3</td></tr><tr><th>Elbow Pronation</th><td>$tEP1</td><td>$tEP2</td><td>$tEP3</td></tr></table>";
   
   echo $fOutputText;
   fwrite($fp, $fOutputText); 
   }
	
	if (isset($Severity) && ($Severity!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Severity</strong></div>";
	
	$fOutputText .= $Severity;
	$Severity = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($Irritability) && ($Irritability!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Irritability</strong></div>";
	
	$fOutputText .= $Irritability;
	$Irritability = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
if (isset($MechInFlame) && ($MechInFlame!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Mechanical versus Inflammatory</strong></div>";
	
	$fOutputText .= $MechInFlame;
	$MechInFlame = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($PainResist) && ($PainResist!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Pain versus Resistance</strong></div>";
	
	$fOutputText .= $PainResist;
	$PainResist = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}		

if (isset($Genic) && ($Genic!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Genic</strong></div>";
	
	$fOutputText .= $Genic;
	$Genic = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

	if (isset($Severity1) && ($Severity1!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Severity</strong></div>";
	
	$fOutputText .= $Severity1;
	$Severity1 = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($Irritability1) && ($Irritability1!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Irritability</strong></div>";
	
	$fOutputText .= $Irritability1;
	$Irritability1 = "";
    $fOutputText .= "<br />";
    echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
if (isset($MechInFlame1) && ($MechInFlame1!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Mechanical versus Inflammatory</strong></div>";
	
	$fOutputText .= $MechInFlame1;
	$MechInFlame1 = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($PainResist1) && ($PainResist1!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Pain versus Resistance</strong></div>";
	
	$fOutputText .= $PainResist1;
	$PainResist1 = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}		

if (isset($Genic1) && ($Genic1!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Genic</strong></div>";
	
	$fOutputText .= $Genic1;
	$Genic1 = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
	fclose($fp);
	$FeedBackLabel = "";
?>
<hr />
</body>
</html>