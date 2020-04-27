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

$Irritability1 = $Irritability2 = $Irritability3 = $Irritability4 =  $FeedBack = $FeedBackLabel= $HiddenText ="";
$ComeGo1 = $ComeGo2 = $ComeGo3 = $ComeGo4 = $ComeGo5 = $ComeGo6 = $ComeGo7 = $ComeGo8 = "";
$AggroGrip01a = $AggroGrip02a = $AggroGrip03a = $AggroGrip04a = $AggroGrip05a = $AggroGrip06a = $AggroGrip07a = $AggroGrip08a = $AggroGrip09a = $AggroGrip10a = $AggroGrip11a = $AggroGrip12a = $AggroGrip13a = $AggroGrip14a = $AggroGrip15a ="";
$AggroGrip01b = $AggroGrip02b = $AggroGrip03b = $AggroGrip04b = $AggroGrip05b = $AggroGrip06b = $AggroGrip07b = $AggroGrip08b = $AggroGrip09b = $AggroGrip10b = $AggroGrip11b = $AggroGrip12b = $AggroGrip13b = $AggroGrip14b = $AggroGrip15b ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$Irritability1 = test_input($_POST["Irritability1"]);
	$Irritability2 = test_input($_POST["Irritability2"]);
	$Irritability3 = test_input($_POST["Irritability3"]);
	$Irritability4 = test_input($_POST["Irritability4"]);
	$ComeGo1 = test_input($_POST["ComeGo1"]);
	$ComeGo2 = test_input($_POST["ComeGo2"]);
	$ComeGo3 = test_input($_POST["ComeGo3"]);
	$ComeGo4 = test_input($_POST["ComeGo4"]);
	$ComeGo5 = test_input($_POST["ComeGo5"]);
	$ComeGo6 = test_input($_POST["ComeGo6"]);
	$ComeGo7 = test_input($_POST["ComeGo7"]);
    $ComeGo8 = test_input($_POST["ComeGo8"]);
	$AggroGrip01a = test_input($_POST["AggroGrip01a"]);
	$AggroGrip02a = test_input($_POST["AggroGrip02a"]);
	$AggroGrip03a = test_input($_POST["AggroGrip03a"]);
	$AggroGrip04a = test_input($_POST["AggroGrip04a"]);
	$AggroGrip05a = test_input($_POST["AggroGrip05a"]);
	$AggroGrip06a = test_input($_POST["AggroGrip06a"]);
	$AggroGrip07a = test_input($_POST["AggroGrip07a"]);
	$AggroGrip08a = test_input($_POST["AggroGrip08a"]);
	$AggroGrip09a = test_input($_POST["AggroGrip09a"]);
	$AggroGrip10a = test_input($_POST["AggroGrip10a"]);
	$AggroGrip11a = test_input($_POST["AggroGrip11a"]);
	$AggroGrip12a = test_input($_POST["AggroGrip12a"]);
	$AggroGrip13a = test_input($_POST["AggroGrip13a"]);
	$AggroGrip14a = test_input($_POST["AggroGrip14a"]);
	$AggroGrip15a = test_input($_POST["AggroGrip15a"]);
	$AggroGrip01b = test_input($_POST["AggroGrip01b"]);
	$AggroGrip02b = test_input($_POST["AggroGrip02b"]);
	$AggroGrip03b = test_input($_POST["AggroGrip03b"]);
	$AggroGrip04b = test_input($_POST["AggroGrip04b"]);
	$AggroGrip05b = test_input($_POST["AggroGrip05b"]);
	$AggroGrip06b = test_input($_POST["AggroGrip06b"]);
	$AggroGrip07b = test_input($_POST["AggroGrip07b"]);
	$AggroGrip08b = test_input($_POST["AggroGrip08b"]);
	$AggroGrip09b = test_input($_POST["AggroGrip09b"]);
	$AggroGrip10b = test_input($_POST["AggroGrip10b"]);
	$AggroGrip11b = test_input($_POST["AggroGrip11b"]);
	$AggroGrip12b = test_input($_POST["AggroGrip12b"]);
	$AggroGrip13b = test_input($_POST["AggroGrip13b"]);
	$AggroGrip14b = test_input($_POST["AggroGrip14b"]);
	$AggroGrip15b = test_input($_POST["AggroGrip15b"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 07.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=c2654afe-7d5c-463c-a7ae-b0b27ac64bc9&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 11</p>
<h2>Read about ‘SIN’ factors.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]</strong></div></p>

<div class="PageReadableBlue"><p>a.	Estimate the irritability of the symptoms based on times taken to aggravate and ease the symptoms?  (Please choose as many as applicable)</p>

<input type="checkbox" name="Irritability1" value="Non Irritable">Non Irritable<br />
<input type="checkbox" name="Irritability2" value="Mild">Mild<br />
<input type="checkbox" name="Irritability3" value="Moderate">Moderate<br />
<input type="checkbox" name="Irritability4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><h2>Read about ‘Aggravating factors’ and refer to an anatomy text.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="aggravatingfactors.html" target="_blank">Aggravating Factors</a>]&nbsp;|&nbsp;[<a href="anatomy.html" target="_blank">Anatomy Text References and Anatomy TV Web Links</a>]</strong></p></div>

<div class="PageReadableBlue"><p>Question 12a</p>
<p>Which structures may be aggravated by gripping and using a screw driver? (Please choose as many as applicable)</p>
<input type="checkbox" name="AggroGrip01a" value="PRUJ">Proximal Radio-Ulna Jointoint (PRUJ)<br />
<input type="checkbox" name="AggroGrip02a" value="DRUJ">Distal Radio-Ulna Joint (DRUJ)<br />
<input type="checkbox" name="AggroGrip03a" value="HRJ">Humero-Radial Joint (HRJ))<br />
<input type="checkbox" name="AggroGrip04a" value="HUJ">Humero-Ulna Joint (HUJ)<br />
<input type="checkbox" name="AggroGrip05a" value="Wrist Extensor Muscles">Wrist Extensor Muscles<br />
<input type="checkbox" name="AggroGrip06a" value="Wrist Flexor Muscles">Wrist Flexor Muscles<br />
<input type="checkbox" name="AggroGrip07a" value="Elbow Extensor Muscles">Elbow Extensor Muscles<br />
<input type="checkbox" name="AggroGrip08a" value="Elbow Flexor Muscles">Elbow Flexor Muscles<br />
<input type="checkbox" name="AggroGrip09a" value="Elbow Pronator Muscles">Elbow Pronator Muscles<br />
<input type="checkbox" name="AggroGrip10a" value="Elbow Supinator Muscles">Elbow Supinator Muscles<br />
<input type="checkbox" name="AggroGrip11a" value="Radial Nerve">Radial Nerve<br />
<input type="checkbox" name="AggroGrip12a" value="Ulnar Nerve">Ulnar Nerve<br />
<input type="checkbox" name="AggroGrip13a" value="Median Nerve">Median Nerve<br />
<input type="checkbox" name="AggroGrip14a" value="CETO">Common Extensor Tendon Origin (CETO)<br />
<input type="checkbox" name="AggroGrip15a" value="CFTO">Common Flexor Tendon Origin (CFTO)<br /></div>

<div class="PageReadableBlue"><p>Question 12b</p>
<p>Which structures may be aggravated by driving a car? (Please choose as many as applicable)</p>
<input type="checkbox" name="AggroGrip01b" value="PRUJ">Proximal Radio-Ulna Jointoint (PRUJ)<br />
<input type="checkbox" name="AggroGrip02b" value="DRUJ">Distal Radio-Ulna Joint (DRUJ)<br />
<input type="checkbox" name="AggroGrip03b" value="HRJ">Humero-Radial Joint (HRJ))<br />
<input type="checkbox" name="AggroGrip04b" value="HUJ">Humero-Ulna Joint (HUJ)<br />
<input type="checkbox" name="AggroGrip05b" value="Wrist Extensor Muscles">Wrist Extensor Muscles<br />
<input type="checkbox" name="AggroGrip06b" value="Wrist Flexor Muscles">Wrist Flexor Muscles<br />
<input type="checkbox" name="AggroGrip07b" value="Elbow Extensor Muscles">Elbow Extensor Muscles<br />
<input type="checkbox" name="AggroGrip08b" value="Elbow Flexor Muscles">Elbow Flexor Muscles<br />
<input type="checkbox" name="AggroGrip09b" value="Elbow Pronator Muscles">Elbow Pronator Muscles<br />
<input type="checkbox" name="AggroGrip10b" value="Elbow Supinator Muscles">Elbow Supinator Muscles<br />
<input type="checkbox" name="AggroGrip11b" value="Radial Nerve">Radial Nerve<br />
<input type="checkbox" name="AggroGrip12b" value="Ulnar Nerve">Ulnar Nerve<br />
<input type="checkbox" name="AggroGrip13b" value="Median Nerve">Median Nerve<br />
<input type="checkbox" name="AggroGrip14b" value="CETO">Common Extensor Tendon Origin (CETO)<br />
<input type="checkbox" name="AggroGrip15b" value="CFTO">Common Flexor Tendon Origin (CFTO)<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip08Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($Irritability1) && ($Irritability1!="")) ||
   (isset($Irritability2) && ($Irritability2!="")) ||
   (isset($Irritability3) && ($Irritability3!="")) ||
   (isset($Irritability4) && ($Irritability4!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 07 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($Irritability1) && ($Irritability1!="")) ||
   (isset($Irritability2) && ($Irritability2!="")) ||
   (isset($Irritability3) && ($Irritability3!="")) ||
   (isset($Irritability4) && ($Irritability4!=""))){
$fOutputText = "<strong><p>Question 11</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($Irritability1) && $Irritability1=="Non Irritable") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability2) && $Irritability2=="Mild") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability3) && $Irritability3=="Moderate") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability4) && $Irritability4=="Severe") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$Irritability1 = "";
$Irritability2 = "";
$Irritability3 = "";
$Irritability4 = "";
$FeedBack="";
echo "</p>";

if ((isset($AggroGrip01a) && ($AggroGrip01a!="")) ||
   (isset($AggroGrip02a) && ($AggroGrip02a!="")) ||
   (isset($AggroGrip03a) && ($AggroGrip03a!="")) ||
   (isset($AggroGrip04a) && ($AggroGrip04a!="")) ||
   (isset($AggroGrip05a) && ($AggroGrip05a!="")) ||
   (isset($AggroGrip06a) && ($AggroGrip06a!="")) ||
   (isset($AggroGrip07a) && ($AggroGrip07a!="")) ||
   (isset($AggroGrip08a) && ($AggroGrip08a!="")) ||
   (isset($AggroGrip09a) && ($AggroGrip09a!="")) ||
   (isset($AggroGrip10a) && ($AggroGrip10a!="")) ||
   (isset($AggroGrip11a) && ($AggroGrip11a!="")) ||
   (isset($AggroGrip12a) && ($AggroGrip12a!="")) ||
   (isset($AggroGrip13a) && ($AggroGrip13a!="")) ||
   (isset($AggroGrip14a) && ($AggroGrip14a!="")) ||
   (isset($AggroGrip15a) && ($AggroGrip15a!=""))){
$fOutputText = "<strong><p>Question 12a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($AggroGrip01a) && $AggroGrip01a=="PRUJ") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Proximal Radio-Ulna Joint – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip02a) && $AggroGrip02a=="DRUJ") {
   $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Distal Radio-Ulnar Joint – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip03a) && $AggroGrip03a=="HRJ") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Humero-Radial Joint – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip04a) && $AggroGrip04a=="HUJ") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Humuro-Ulna Joint – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($AggroGrip05a) && $AggroGrip05a=="Wrist Extensor Muscles") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Wrist Extensor Muscles – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($AggroGrip06a) && $AggroGrip06a=="Wrist Flexor Muscles") {
   $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Wrist Flexor Muscles - please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip07a) && $AggroGrip07a=="Elbow Extensor Muscles") {
   $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Elbow Extensor Muscles - please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip08a) && $AggroGrip08a=="Elbow Flexor Muscles") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Elbow Flexor Muscles - please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip09a) && $AggroGrip09a=="Elbow Pronator Muscles") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Elbow Pronator Muscles – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
if (isset($AggroGrip10a) && $AggroGrip10a=="Elbow Supinator Muscles") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Elbow Supinator Muscles – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip11a) && $AggroGrip11a=="Radial Nerve") {
   $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Radial Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip12a) && $AggroGrip12a=="Ulnar Nerve") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Ulnar Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip13a) && $AggroGrip13a=="Median Nerve") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Median Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($AggroGrip14a) && $AggroGrip14a=="cETO") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Common Extensor Tendon Origin – – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($AggroGrip15a) && $AggroGrip15a=="CFTO") {
   $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X  Common Flexor Tendon Origin – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$AggroGrip01a = "";
$AggroGrip02a = "";
$AggroGrip03a = "";
$AggroGrip04a = "";
$AggroGrip05a = "";
$AggroGrip06a = "";
$AggroGrip07a = "";
$AggroGrip08a = "";
$AggroGrip09a = "";
$AggroGrip10a = "";
$AggroGrip11a = "";
$AggroGrip12a = "";
$AggroGrip13a = "";
$AggroGrip14a = "";
$AggroGrip15a = "";
$FeedBack="";

if ((isset($AggroGrip01b) && ($AggroGrip01b!="")) ||
   (isset($AggroGrip02b) && ($AggroGrip02b!="")) ||
   (isset($AggroGrip03b) && ($AggroGrip03b!="")) ||
   (isset($AggroGrip04b) && ($AggroGrip04b!="")) ||
   (isset($AggroGrip05b) && ($AggroGrip05b!="")) ||
   (isset($AggroGrip06b) && ($AggroGrip06b!="")) ||
   (isset($AggroGrip07b) && ($AggroGrip07b!="")) ||
   (isset($AggroGrip08b) && ($AggroGrip08b!="")) ||
   (isset($AggroGrip09b) && ($AggroGrip09b!="")) ||
   (isset($AggroGrip10b) && ($AggroGrip10b!="")) ||
   (isset($AggroGrip11b) && ($AggroGrip11b!="")) ||
   (isset($AggroGrip12b) && ($AggroGrip12b!="")) ||
   (isset($AggroGrip13b) && ($AggroGrip13b!="")) ||
   (isset($AggroGrip14b) && ($AggroGrip14b!="")) ||
   (isset($AggroGrip15b) && ($AggroGrip15b!=""))){
$fOutputText = "<strong><p>Question 12b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($AggroGrip01b) && $AggroGrip01b=="PRUJ") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Proximal Radio-Ulna Joint – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip02b) && $AggroGrip02b=="DRUJ") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Distal Radio-Ulnar Joint – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip03b) && $AggroGrip03b=="HRJ") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Humero-Radial Joint – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip04b) && $AggroGrip04b=="HUJ") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Humuro-Ulna Joint – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip05b) && $AggroGrip05b=="Wrist Extensor Muscles") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Wrist Extensor Muscles – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($AggroGrip06b) && $AggroGrip06b=="Wrist Flexor Muscles") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Wrist Flexor Muscles - please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip07b) && $AggroGrip07b=="Elbow Extensor Muscles") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Elbow Extensor Muscles - please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip08b) && $AggroGrip08b=="Elbow Flexor Muscles") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Elbow Flexor Muscles - please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip09b) && $AggroGrip09b=="Elbow Pronator Muscles") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Elbow Pronator Muscles – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip10b) && $AggroGrip10b=="Elbow Supinator Muscles") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Elbow Supinator Muscles – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip11b) && $AggroGrip11b=="Radial Nerve") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Radial Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip12b) && $AggroGrip12b=="Ulnar Nerve") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Ulnar Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($AggroGrip13b) && $AggroGrip13b=="Median Nerve") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Median Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($AggroGrip14b) && $AggroGrip14b=="CETO") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Common Extensor Tendon Origin – – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($AggroGrip15b) && $AggroGrip15b=="CFTO") {
    $fOutputText =  "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√  Common Flexor Tendon Origin – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}


$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
fclose($fp);

$AggroGrip01b = "";
$AggroGrip02b = "";
$AggroGrip03b = "";
$AggroGrip04b = "";
$AggroGrip05b = "";
$AggroGrip06b = "";
$AggroGrip07b = "";
$AggroGrip08b = "";
$AggroGrip09b = "";
$AggroGrip10b = "";
$AggroGrip11b = "";
$AggroGrip12b = "";
$AggroGrip13b = "";
$AggroGrip14b = "";
$AggroGrip15b = "";
$FeedBack="";
?>
</body>
</html>