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
// define variables and set to empty values

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";


$FeedBack = $FeedBackLabel = $Prognosis = "";
$SM1 = $SM2 = $SM3 = $SM4 = $SM5 = $SM6 = $SM7 = $SM8 = $SM9 = $OM1 = $OM2 = $OM3 = $OM4 = $OM5 = $OM6 = $OM7 = $OM8 = $OM9 = "";
$OutComeMeasure1 = $OutComeMeasure2 = $OutComeMeasure3 = $OutComeMeasure4 = $OutComeMeasure5 = $OutComeMeasure6 = $OutComeMeasure7 = $OutComeMeasure8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
    $Prognosis = test_input($_POST["Prognosis"]);
	$SM1 = test_input($_POST["SM1"]);
	$SM2 = test_input($_POST["SM2"]);
	$SM3 = test_input($_POST["SM3"]);
	$SM4 = test_input($_POST["SM4"]);
	$SM5 = test_input($_POST["SM5"]);
	$SM6 = test_input($_POST["SM6"]);
	$SM7 = test_input($_POST["SM7"]);
	$SM8 = test_input($_POST["SM8"]);
	$SM9 = test_input($_POST["SM9"]);
	$OM1 = test_input($_POST["OM1"]);
	$OM2 = test_input($_POST["OM2"]);
	$OM3 = test_input($_POST["OM3"]);
	$OM4 = test_input($_POST["OM4"]);
	$OM5 = test_input($_POST["OM5"]);
	$OM6 = test_input($_POST["OM6"]);
	$OM7 = test_input($_POST["OM7"]);
	$OM8 = test_input($_POST["OM8"]);
	$OM9 = test_input($_POST["OM9"]);
	$OutComeMeasure1 = test_input($_POST["OutComeMeasure1"]);
	$OutComeMeasure2 = test_input($_POST["OutComeMeasure2"]);
	$OutComeMeasure3 = test_input($_POST["OutComeMeasure3"]);
	$OutComeMeasure4 = test_input($_POST["OutComeMeasure4"]);
	$OutComeMeasure5 = test_input($_POST["OutComeMeasure5"]);
	$OutComeMeasure6 = test_input($_POST["OutComeMeasure6"]);
	$OutComeMeasure7 = test_input($_POST["OutComeMeasure7"]);
	$OutComeMeasure8 = test_input($_POST["OutComeMeasure8"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<div>
<div class="PageReadableBlue"><h2>Section 4F: Prognosis.</h2></div>
<div class="PageReadableBlue">Use this link to read more about deciding on a prognosis.</div>
<div class="PageReadableBlack"><strong>[<a href="prognosis.html" target="_blank">Prognosis</a>]</strong></div>
<div class="PageReadableBlue"><h2>Question 42</h2></div>
<div class="PageReadableBlue">Identify the prognosis for the condition based on the information you have so far:</div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<input type="radio" name="Prognosis" id="Prognosis" value="Improving">Improving<br />
<input type="radio" name="Prognosis" id="Prognosis" value="Static">Static<br />
<input type="radio" name="Prognosis" id="Prognosis" value="Worsening">Worsening<br />

<div class="PageReadableBlue"><h2>Section 4G: Subjective Marker.</h2></div>
<div class="PageReadableBlue">Use this link to read more about Subjective Markers.</div>
<div class="PageReadableBlack"><strong>[<a href="subjectiveandobjectivemarkers.html" target="_blank">Subjective and Objective Markers</a>]</strong></div>
<div class="PageReadableBlue"><h2>Question 43</h2></div>
<div class="PageReadableBlue">Using the information from the whole assessment, choose a subjective marker.</div>

<input type="checkbox" name="SM1" id="SM1" value="Gripping Tolerance">Gripping Tolerance<br />
<input type="checkbox" name="SM2" id="SM2" value="VAS">VAS<br />
<input type="checkbox" name="SM3" id="SM3" value="Opening Jars">Opening Jars<br />
<input type="checkbox" name="SM4" id="SM4" value="Home Decorating">Home Decorating<br />
<input type="checkbox" name="SM5" id="SM5" value="Badminton">Badminton<br />
<input type="checkbox" name="SM6" id="SM6" value="OGS Strength Wrist Extensors">OGS Strength Wrist Extensors<br />
<input type="checkbox" name="SM7" id="SM7" value="Pain On Middle Finger Extension">Pain On Middle Finger Extension<br />
<input type="checkbox" name="SM8" id="SM8" value="Palpable Swelling">Palpable Swelling<br />
<input type="checkbox" name="SM9" id="SM9" value="Tenderness On Palpation (TOP)">Tenderness On Palpation (TOP)<br />


<div class="PageReadableBlue"><h2>Section 4H: Objective Marker.</h2></div>
<div class="PageReadableBlue">Use this link to read more about Objective Markers.</div>
<div class="PageReadableBlack"><strong>[<a href="subjectiveandobjectivemarkers.html" target="_blank">Subjective and Objective Markers</a>]</strong></div>
<div class="PageReadableBlue"><h2>Question 44</h2></div>
<div class="PageReadableBlue">Using the information from the whole assessment, choose an objective marker.</div>

<input type="checkbox" name="OM1" id="OM1" value="Gripping Tolerance">Gripping Tolerance<br />
<input type="checkbox" name="OM2" id="OM2" value="VAS">VAS<br />
<input type="checkbox" name="OM3" id="OM3" value="Opening Jars">Opening Jars<br />
<input type="checkbox" name="OM4" id="OM4" value="Home Decorating">Home Decorating<br />
<input type="checkbox" name="OM5" id="OM5" value="Badminton">Badminton<br />
<input type="checkbox" name="OM6" id="OM6" value="OGS Strength Wrist Extensors">OGS Strength Wrist Extensors<br />
<input type="checkbox" name="OM7" id="OM7" value="Pain On Middle Finger Extension">Pain On Middle Finger Extension<br />
<input type="checkbox" name="OM8" id="OM8" value="Palpable Swelling">Palpable Swelling<br />
<input type="checkbox" name="OM9" id="OM9" value="Tenderness On Palpation (TOP)">Tenderness On Palpation (TOP)<br />

<div class="PageReadableBlue"><h2>Section 4I: Outcome Measure.</h2></div>
<div class="PageReadableBlue">Use this link to read more about Outcome Measures.</div>
<div class="PageReadableBlack"><strong>[<a href="outcomemeasures.html" target="_blank">Outcome Measures</a>]</strong></div>
<div class="PageReadableBlue"><h2>Question 45</h2></div>
<div class="PageReadableBlue">Using the information from the whole assessment, choose an appropriate outcome measure.</div>

<input type="checkbox" name="OutComeMeasure1" id="OutComeMeasure1" value="SF36">SF36<br />
<input type="checkbox" name="OutComeMeasure2" id="OutComeMeasure2" value="LEFS">LEFS<br />
<input type="checkbox" name="OutComeMeasure3" id="OutComeMeasure3" value="HADS">HADS<br />
<input type="checkbox" name="OutComeMeasure4" id="OutComeMeasure4" value="DASH">DASH<br />
<input type="checkbox" name="OutComeMeasure5" id="OutComeMeasure5" value="EQ-5D-5L">EQ-5D-5L<br />
<input type="checkbox" name="OutComeMeasure6" id="OutComeMeasure6" value="Berg Balance Scale">Berg Balance Scale<br />
<input type="checkbox" name="OutComeMeasure7" id="OutComeMeasure7" value="Brighton Score">Brighton Score<br />
<input type="checkbox" name="OutComeMeasure8" id="OutComeMeasure8" value="Oswestry Disability Index">Oswestry Disability Index<br />

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 <hr />
<p><a href="ResultsFeedback.php">Please Click Here to View Your Results and Give Feedback.</a></p>
<hr />
</form></div>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($Prognosis) && ($Prognosis!="")) || 
    (isset($SM1) && ($SM1!="")) || 
	(isset($SM2) && ($SM2!="")) || 
	(isset($SM3) && ($SM3!="")) || 
	(isset($SM4) && ($SM4!="")) || 
	(isset($SM5) && ($SM5!="")) || 
	(isset($SM6) && ($SM6!="")) || 
	(isset($SM7) && ($SM7!="")) || 
	(isset($SM8) && ($SM8!="")) || 
	(isset($SM9) && ($SM9!="")) || 
	(isset($OM1) && ($OM1!="")) || 
	(isset($OM2) && ($OM2!="")) || 
	(isset($OM3) && ($OM3!="")) || 
	(isset($OM4) && ($OM4!="")) || 
	(isset($OM5) && ($OM5!="")) || 
	(isset($OM6) && ($OM6!="")) || 
	(isset($OM7) && ($OM7!="")) || 
	(isset($OM8) && ($OM8!="")) || 
	(isset($OM9) && ($OM9!="")) || 
	(isset($OutComeMeasure1) && ($OutComeMeasure1!="")) || 
	(isset($OutComeMeasure2) && ($OutComeMeasure2!="")) || 
	(isset($OutComeMeasure3) && ($OutComeMeasure3!="")) || 
	(isset($OutComeMeasure4) && ($OutComeMeasure4!="")) || 
	(isset($OutComeMeasure5) && ($OutComeMeasure5!="")) || 
	(isset($OutComeMeasure6) && ($OutComeMeasure6!="")) || 
	(isset($OutComeMeasure7) && ($OutComeMeasure7!="")) || 
	(isset($OutComeMeasure8) && ($OutComeMeasure8!=""))) {
$FeedBackLabel = "Your Feedback:";

		@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nFinal Section Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if (isset($Prognosis) && ($Prognosis!="")) {
$fOutputText = "<p><strong>Question 42 - Prognosis</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

$fOutputText = "<div class=\"";

if (isset($Prognosis) && $Prognosis=="Improving") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Improving – well done – this is the correct answer.";}
	
if (isset($Prognosis) && $Prognosis=="Static") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Static – please reconsider your answer referring to the information on 'Condition Progression'.";}
	
if (isset($Prognosis) && $Prognosis=="Worsening") {
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X  Worsening – please reconsider your answer referring to the information on 'Condition Progression'.";}
	
$fOutputText .= "\">";
$fOutputText .= "<strong>$FeedBack</strong>";
$fOutputText .= "</div>";
$fOutputText .= "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$Prognosis = "";
$FeedBack="";}

if ((isset($SM1) && ($SM1!="")) || 
	(isset($SM2) && ($SM2!="")) || 
	(isset($SM3) && ($SM3!="")) || 
	(isset($SM4) && ($SM4!="")) || 
	(isset($SM5) && ($SM5!="")) || 
	(isset($SM6) && ($SM6!="")) || 
	(isset($SM7) && ($SM7!="")) || 
	(isset($SM8) && ($SM8!="")) || 
	(isset($SM9) && ($SM9!=""))) {

$fOutputText = "<p><strong>Question 43 - Subjective Markers</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);


if (isset($SM1) && $SM1=="Gripping Tolerance") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Gripping Tolerance – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($SM2) && $SM2=="VAS") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ VAS – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SM3) && $SM3=="Opening Jars") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Opening Jars – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SM4) && $SM4=="Home Decorating") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Home Decorating – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SM5) && $SM5=="Badminton") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Badminton – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SM6) && $SM6=="OGS Strength Wrist Extensors") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X OGS Strength Wrist Extensors – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SM7) && $SM7=="Pain On Middle Finger Extension") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Pain On Middle Finger Extension – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SM8) && $SM8=="Palpable Swelling") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Palpable Swelling – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SM9) && $SM9=="Tenderness On Palpation (TOP)") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Tenderness On Palpation (TOP) – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
$FeedBack="";
$SM1="";
$SM2="";
$SM3="";
$SM4="";
$SM5="";
$SM6="";
$SM7="";
$SM8="";
$SM9="";}

if ((isset($OM1) && ($OM1!="")) || 
	(isset($OM2) && ($OM2!="")) || 
	(isset($OM3) && ($OM3!="")) || 
	(isset($OM4) && ($OM4!="")) || 
	(isset($OM5) && ($OM5!="")) || 
	(isset($OM6) && ($OM6!="")) || 
	(isset($OM7) && ($OM7!="")) || 
	(isset($OM8) && ($OM8!="")) || 
	(isset($OM9) && ($OM9!=""))) {

$fOutputText = "<p><strong>Question 44 - Objective Markers</strong></p>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

if (isset($OM1) && $OM1=="Gripping Tolerance") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Gripping Tolerance – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($OM2) && $OM2=="VAS") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X VAS – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($OM3) && $OM3=="Opening Jars") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Opening Jars – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OM4) && $OM4=="Home Decorating") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Home Decorating – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OM5) && $OM5=="Badminton") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Badminton – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OM6) && $OM6=="OGS Strength Wrist Extensors") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ OGS Strength Wrist Extensors – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OM7) && $OM7=="Pain On Middle Finger Extension") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Pain On Middle Finger Extension – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OM8) && $OM8=="Palpable Swelling") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Palpable Swelling – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OM9) && $OM9=="Tenderness On Palpation (TOP)") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Tenderness On Palpation (TOP) – please reconsider your answer referring to the information on 'Subjective Markers'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
$FeedBack="";
$OM1="";
$OM2="";
$OM3="";
$OM4="";
$OM5="";
$OM6="";
$OM7="";
$OM8="";
$OM9="";}

if ((isset($OutComeMeasure1) && ($OutComeMeasure1!="")) || 
	(isset($OutComeMeasure2) && ($OutComeMeasure2!="")) || 
	(isset($OutComeMeasure3) && ($OutComeMeasure3!="")) || 
	(isset($OutComeMeasure4) && ($OutComeMeasure4!="")) || 
	(isset($OutComeMeasure5) && ($OutComeMeasure5!="")) || 
	(isset($OutComeMeasure6) && ($OutComeMeasure6!="")) || 
	(isset($OutComeMeasure7) && ($OutComeMeasure7!="")) || 
	(isset($OutComeMeasure8) && ($OutComeMeasure8!=""))) {

$fOutputText = "<p><strong>Question 45 - Objective Markers</strong></p>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

if (isset($OutComeMeasure1) && $OutComeMeasure1=="SF36") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X SF36 – please reconsider your answer referring to the information on 'Outcome Measures'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($OutComeMeasure2) && $OutComeMeasure2=="LEFS") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X LEFS – please reconsider your answer referring to the information on 'Outcome Measures'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($OutComeMeasure3) && $OutComeMeasure3=="HADS") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X HADS – please reconsider your answer referring to the information on 'Outcome Measures'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OutComeMeasure4) && $OutComeMeasure4=="DASH") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ DASH – well done - this is an appropriate outcome measure for this case study.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OutComeMeasure5) && $OutComeMeasure5=="EQ-5D-5L") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ EQ-5D-5L – well done - this is an appropriate outcome measure for this case study.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OutComeMeasure6) && $OutComeMeasure6=="Berg Balance Scale") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Berg Balance Scale – please reconsider your answer referring to the information on 'Outcome Measures'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OutComeMeasure7) && $OutComeMeasure7=="Brighton Score") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Brighton Score – please reconsider your answer referring to the information on 'Outcome Measures'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($OutComeMeasure8) && $OutComeMeasure8=="Oswestry Disability Index") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Oswestry Disability Index – please reconsider your answer referring to the information on 'Outcome Measures'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p><strong>$FeedBack</strong></p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
	
$FeedBack="";
$OutComeMeasure1="";
$OutComeMeasure2="";
$OutComeMeasure3="";
$OutComeMeasure4="";
$OutComeMeasure5="";
$OutComeMeasure6="";
$OutComeMeasure7="";
$OutComeMeasure8="";}

fclose(!fp);

?>

</body>
</html>