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
<div class="PageReadableDarkGreen"><h3>Clip XIV</h3>
Functional Tests and Special Tests.<br />
Lateral epicondylitis special test positive.</div>
<hr />
<p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=c60ac6e5-f434-40cc-8b54-113c716892ac&v=1" width="720" height="405" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe>
</p>
<hr />

<div class="PageReadableBlue"><strong><h2>Question 34</h2></strong>
<h3>Read about elbow region specific functional tests and special tests.</h3></div>
<div class="PageReadableBlack"><strong><h3>[<a href="functionalspecialtests.html" target="_blank">Functional Tests and Special Tests</a>]</h3></strong></div>

<div class="PageReadableBlue"><h3>Question 33a - Record the following:</h3></div>
<div class="PageReadableBlue">(a) Was the test positive or negative?</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<table border="1">
<tr><th>Test</th><th>Outcome</th></tr>
<tr><td>Lateral epicondylitis special test</td>
<td>Positive (tennis elbow likely)</td></tr>
<tr><td></td><td>Negative (tennis elbow unlikely)</td></tr>
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
 
<p><a href="NeurologicalTestQuestions.php">Next Question.</a></p>
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

$fOutputText = "<hr />\nFunctional Special Test Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);	
	  }
else
    {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.



	if (isset($Severity) && ($Severity!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Severity</strong>";
	$fOutputText .= "</div>";
	$fOutputText .= "<strong>$Severity</strong>";
	$Severity = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);	}

if (isset($Irritability) && ($Irritability!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Irritability</strong>";
	$fOutputText .= "</div>";
	$fOutputText .= "<strong>$Irritability</strong>";
	$Irritability = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);	}	
	
if (isset($MechInFlame) && ($MechInFlame!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Mechanical versus Inflammatory</strong>";
	$fOutputText .= "</div>";
	$fOutputText .= "<strong>$MechInFlame</strong>";
	$MechInFlame = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
   fwrite($fp, $fOutputText);	}
	
if (isset($PainResist) && ($PainResist!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Pain versus Resistance</strong>";
	$fOutputText .= "</div>";
	$fOutputText .= "<strong>$PainResist</strong>";
	$PainResist = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);	}		

if (isset($Genic) && ($Genic!="")) {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
	$fOutputText .= "<strong>Genic</strong>";
	$fOutputText .= "</div>";
	$fOutputText .= "<strong>$Genic</strong>";
	$Genic = "";
    $fOutputText .= "<br />";
	echo $fOutputText;
    fwrite($fp, $fOutputText);	}


	fclose(!fp);
	$FeedBackLabel = "";
?>
<hr />
</body>
</html>