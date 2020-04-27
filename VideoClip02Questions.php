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

$FeedBack = $FeedBackLabel = $HiddenText ="";
$PainIndicator1a = $PainIndicator2a = $PainIndicator3a = $PainIndicator4a = $PainIndicator5a = $PainIndicator6a = $PainIndicator7a = $PainIndicator8a = "";

$PainIndicator1b = $PainIndicator2b = $PainIndicator3b = $PainIndicator4b = $PainIndicator5b = $PainIndicator6b = $PainIndicator7b = $PainIndicator8b = "";

$ForearmStructure1 = $ForearmStructure2 = $ForearmStructure3 = $ForearmStructure4 = $ForearmStructure5 = $ForearmStructure6 = $ForearmStructure7 = "";
$ElbowStructure01 = $ElbowStructure02 = $ElbowStructure03 = $ElbowStructure04 = $ElbowStructure05 = $ElbowStructure06 = $ElbowStructure07 = $ElbowStructure08 = $ElbowStructure09 = $ElbowStructure10 = $ElbowStructure11 = "";

$BackForearmStructure01 = $BackForearmStructure02 = $BackForearmStructure03 = $BackForearmStructure04 = $BackForearmStructure05 = $BackForearmStructure06 = $BackForearmStructure07 = $BackForearmStructure08 = $BackForearmStructure09 = $BackForearmStructure10 = $BackForearmStructure11 = $BackForearmStructure12 = $BackForearmStructure13 = $BackForearmStructure14 = $BackForearmStructure15 = $BackForearmStructure16 = $BackForearmStructure17 = "";

$LateralElbowStructure01 = $LateralElbowStructure02 = $LateralElbowStructure03 = $LateralElbowStructure04 = $LateralElbowStructure05 = $LateralElbowStructure06 = $LateralElbowStructure07 = $LateralElbowStructure08 = $LateralElbowStructure09 = $LateralElbowStructure10 = $LateralElbowStructure11 = $LateralElbowStructure12 = $LateralElbowStructure13 = $LateralElbowStructure14 = $LateralElbowStructure15 = $LateralElbowStructure16 = $LateralElbowStructure17 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$PainIndicator1a = test_input($_POST["PainIndicator1a"]);
	$PainIndicator2a = test_input($_POST["PainIndicator2a"]);
	$PainIndicator3a = test_input($_POST["PainIndicator3a"]);
	$PainIndicator4a = test_input($_POST["PainIndicator4a"]);
	$PainIndicator5a = test_input($_POST["PainIndicator5a"]);
	$PainIndicator6a = test_input($_POST["PainIndicator6a"]);
	$PainIndicator7a = test_input($_POST["PainIndicator7a"]);
	$PainIndicator8a = test_input($_POST["PainIndicator8a"]);
	$PainIndicator1b = test_input($_POST["PainIndicator1b"]);
	$PainIndicator2b = test_input($_POST["PainIndicator2b"]);
	$PainIndicator3b = test_input($_POST["PainIndicator3b"]);
	$PainIndicator4b = test_input($_POST["PainIndicator4b"]);
	$PainIndicator5b = test_input($_POST["PainIndicator5b"]);
	$PainIndicator6b = test_input($_POST["PainIndicator6b"]);
	$PainIndicator7b = test_input($_POST["PainIndicator7b"]);
	$PainIndicator8b = test_input($_POST["PainIndicator8b"]);
	$ForearmStructure1 = test_input($_POST["ForearmStructure1"]);
	$ForearmStructure2 = test_input($_POST["ForearmStructure2"]);
	$ForearmStructure3 = test_input($_POST["ForearmStructure3"]);
	$ForearmStructure4 = test_input($_POST["ForearmStructure4"]);
	$ForearmStructure5 = test_input($_POST["ForearmStructure5"]);
	$ForearmStructure6 = test_input($_POST["ForearmStructure6"]);
	$ForearmStructure7 = test_input($_POST["ForearmStructure7"]);
	$ElbowStructure01 = test_input($_POST["ElbowStructure01"]);
	$ElbowStructure02 = test_input($_POST["ElbowStructure02"]);
	$ElbowStructure03 = test_input($_POST["ElbowStructure03"]);
	$ElbowStructure04 = test_input($_POST["ElbowStructure04"]);
	$ElbowStructure05 = test_input($_POST["ElbowStructure05"]);
	$ElbowStructure06 = test_input($_POST["ElbowStructure06"]);
	$ElbowStructure07 = test_input($_POST["ElbowStructure07"]);
	$ElbowStructure08 = test_input($_POST["ElbowStructure08"]);
	$ElbowStructure09 = test_input($_POST["ElbowStructure09"]);
	$ElbowStructure10 = test_input($_POST["ElbowStructure10"]);
	$ElbowStructure11 = test_input($_POST["ElbowStructure11"]);
	$BackForearmStructure01 = test_input($_POST["BackForearmStructure01"]);
	$BackForearmStructure02 = test_input($_POST["BackForearmStructure02"]);
	$BackForearmStructure03 = test_input($_POST["BackForearmStructure03"]);
	$BackForearmStructure04 = test_input($_POST["BackForearmStructure04"]);
	$BackForearmStructure05 = test_input($_POST["BackForearmStructure05"]);
	$BackForearmStructure06 = test_input($_POST["BackForearmStructure06"]);
	$BackForearmStructure07 = test_input($_POST["BackForearmStructure07"]);
	$BackForearmStructure08 = test_input($_POST["BackForearmStructure08"]);
	$BackForearmStructure09 = test_input($_POST["BackForearmStructure09"]);
	$BackForearmStructure10 = test_input($_POST["BackForearmStructure10"]);
	$BackForearmStructure11 = test_input($_POST["BackForearmStructure11"]);
	$BackForearmStructure12 = test_input($_POST["BackForearmStructure12"]);
	$BackForearmStructure13 = test_input($_POST["BackForearmStructure13"]);
	$BackForearmStructure14 = test_input($_POST["BackForearmStructure14"]);
	$BackForearmStructure15 = test_input($_POST["BackForearmStructure15"]);
	$BackForearmStructure16 = test_input($_POST["BackForearmStructure16"]);
	$BackForearmStructure17 = test_input($_POST["BackForearmStructure17"]);
	$LateralElbowStructure01 = test_input($_POST["LateralElbowStructure01"]);
	$LateralElbowStructure02 = test_input($_POST["LateralElbowStructure02"]);
	$LateralElbowStructure03 = test_input($_POST["LateralElbowStructure03"]);
	$LateralElbowStructure04 = test_input($_POST["LateralElbowStructure04"]);
	$LateralElbowStructure05 = test_input($_POST["LateralElbowStructure05"]);
	$LateralElbowStructure06 = test_input($_POST["LateralElbowStructure06"]);
	$LateralElbowStructure07 = test_input($_POST["LateralElbowStructure07"]);
	$LateralElbowStructure08 = test_input($_POST["LateralElbowStructure08"]);
	$LateralElbowStructure09 = test_input($_POST["LateralElbowStructure09"]);
	$LateralElbowStructure10 = test_input($_POST["LateralElbowStructure10"]);
	$LateralElbowStructure11 = test_input($_POST["LateralElbowStructure11"]);
	$LateralElbowStructure12 = test_input($_POST["LateralElbowStructure12"]);
	$LateralElbowStructure13 = test_input($_POST["LateralElbowStructure13"]);
	$LateralElbowStructure14 = test_input($_POST["LateralElbowStructure14"]);
	$LateralElbowStructure15 = test_input($_POST["LateralElbowStructure15"]);
	$LateralElbowStructure16 = test_input($_POST["LateralElbowStructure16"]);
	$LateralElbowStructure17 = test_input($_POST["LateralElbowStructure17"]);	
	
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 02.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=3dc4c816-0b54-449c-a990-4b72a3e53531&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 04</p>
<h2>Read about 'Descriptions of Pain'</h2></div>

<div class="PageReadableBlack"><strong>[<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 04a</p>
<p>What does an achey pain indicate? (Please choose as many as applicable)</p>
<input type="checkbox" name="PainIndicator1a" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="PainIndicator2a" value="Mechanical">Mechanical<br />
<input type="checkbox" name="PainIndicator3a" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="PainIndicator4a" value="Myogenic">Myogenic<br />
<input type="checkbox" name="PainIndicator5a" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="PainIndicator6a" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="PainIndicator7a" value="Red Flag">Red Flag<br />
<input type="checkbox" name="PainIndicator8a" value="Yellow Flag">Yellow Flag<br /></div>

<div class="PageReadableBlue"><p>Question 04b</p>
<p>What does a Sharp pain indicate? (Please choose as many as applicable)</p>
<input type="checkbox" name="PainIndicator1b" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="PainIndicator2b" value="Mechanical">Mechanical<br />
<input type="checkbox" name="PainIndicator3b" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="PainIndicator4b" value="Myogenic">Myogenic<br />
<input type="checkbox" name="PainIndicator5b" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="PainIndicator6b" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="PainIndicator7b" value="Red Flag">Red Flag<br />
<input type="checkbox" name="PainIndicator8b" value="Yellow Flag">Yellow Flag<br /></div>

<div class="PageReadableBlue"><p>Question 05</p>
<h2>Read an anatomy text to review the 'Location of the pain'</h2></div>
<div class="PageReadableBlack"><strong>[<a href="anatomy.html" target="_blank">Anatomy Text References and Anatomy TV Web Links</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 05a</p>
<p>What structures <?php echo "\""; ?>Lie Beneath<?php echo "\""; ?> the 'Back of the forearm'? (Please choose as many as applicable)</p>
<input type="checkbox" name="ForearmStructure1" value="Radius">Radius<br />
<input type="checkbox" name="ForearmStructure2" value="Ulna">Ulna<br />
<input type="checkbox" name="ForearmStructure3" value="Wrist Exterior Muscles">Wrist Exterior Muscles<br />
<input type="checkbox" name="ForearmStructure4" value="Wrist Flexor Muscles">Wrist Flexor Muscles<br />
<input type="checkbox" name="ForearmStructure5" value="Radial Nerve">Radial Nerve<br />
<input type="checkbox" name="ForearmStructure6" value="Ulna Nerve">Ulna Nerve<br />
<input type="checkbox" name="ForearmStructure7" value="Median Nerve">Median Nerve<br /></div>

<div class="PageReadableBlue"><p>Question 05b</p>
<p>What structures <?php echo "\""; ?>Lie Beneath<?php echo "\""; ?> the 'lateral elbow'? (Please choose as many as applicable)</p>
<input type="checkbox" name="ElbowStructure01" value="PRUJ">Proximal Radio-Ulna Joint (PRUJ)<br />
<input type="checkbox" name="ElbowStructure02" value="DRUJ">Distal Radio-Ulna Joint (DRUJ)<br />
<input type="checkbox" name="ElbowStructure03" value="HRJ">Humero-Radial Joint (HRJ))<br />
<input type="checkbox" name="ElbowStructure04" value="HUJ">Humero-Ulna Joint (HUJ)<br />
<input type="checkbox" name="ElbowStructure05" value="Wrist Extensor Muscles">Wrist Extensor Muscles<br />
<input type="checkbox" name="ElbowStructure06" value="Wrist Flexor Muscles">Wrist Flexor Muscles<br />
<input type="checkbox" name="ElbowStructure07" value="Radial Nerve">Radial Nerve<br />
<input type="checkbox" name="ElbowStructure08" value="Ulna Nerve">Ulna Nerve<br />
<input type="checkbox" name="ElbowStructure09" value="Median Nerve">Median Nerve<br />
<input type="checkbox" name="ElbowStructure10" value="CETO">Common Extensor Tendon Origin (CETO)<br />
<input type="checkbox" name="ElbowStructure11" value="CFTO">Common Flexor Tendon Origin (CFTO)<br /></div>

<div class="PageReadableBlue"><p>Question 06</p>
<h2>Look at an anatomy text to consider what structures may 'Refer symptoms' to the location of the pain.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="anatomy.html" target="_blank">Anatomy Text References and Anatomy TV Web Links</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 06a</p>
<p>What structures 'Refer symptoms' to the 'Back of the forearm'? (please choose as many as applicable)</p>

<input type="checkbox" name="BackForearmStructure01" value="C5 Nerve Root">C5 Nerve Root<br />
<input type="checkbox" name="BackForearmStructure02" value="C6 Nerve Root">C6 nerve Root<br />
<input type="checkbox" name="BackForearmStructure03" value="C7 Nerve Root">C7 nerve Root<br />
<input type="checkbox" name="BackForearmStructure04" value="T1 Nerve Root">T1 nerve Root<br />
<input type="checkbox" name="BackForearmStructure05" value="Radial Nerve">Radial Nerve<br />
<input type="checkbox" name="BackForearmStructure06" value="Ulnar Nerve">Ulnar Nerve<br />
<input type="checkbox" name="BackForearmStructure07" value="Median Nerve">Median Nerve<br />
<input type="checkbox" name="BackForearmStructure08" value="DRUJ">Distal radio-ulnar Joint (DRUJ)<br />
<input type="checkbox" name="BackForearmStructure09" value="C5/6 Facet Joint">C5/6 Facet Joint<br />
<input type="checkbox" name="BackForearmStructure10" value="C6/7 Facet Joint">C6/7 Facet Joint<br />
<input type="checkbox" name="BackForearmStructure11" value="C8 Sclerotome">C8 Sclerotome<br />
<input type="checkbox" name="BackForearmStructure12" value="C7 Sclerotome">C7 Sclerotome<br />
<input type="checkbox" name="BackForearmStructure13" value="C6 Sclerotome">C6 Sclerotome<br />
<input type="checkbox" name="BackForearmStructure14" value="HeartCardiac">Heart / Cardiac<br />
<input type="checkbox" name="BackForearmStructure15" value="Liver">Liver<br />
<input type="checkbox" name="BackForearmStructure16" value="Infraspinatus Trigger Point">Infraspinatus Trigger Point<br />
<input type="checkbox" name="BackForearmStructure17" value="Supraspinatus Trigger Point">Supraspinatus Trigger Point<br /></div>

<div class="PageReadableBlue"><p>Question 06b</p>
<p>What structures 'Refer symptoms' to the 'Lateral elbow'? (please choose as many as applicable)</p>

<input type="checkbox" name="LateralElbowStructure01" value="C5 Nerve Root">C5 Nerve Root<br />
<input type="checkbox" name="LateralElbowStructure02" value="C6 Nerve Root">C6 nerve Root<br />
<input type="checkbox" name="LateralElbowStructure03" value="C7 Nerve Root">C7 nerve Root<br />
<input type="checkbox" name="LateralElbowStructure04" value="T1 Nerve Root">T1 nerve Root<br />
<input type="checkbox" name="LateralElbowStructure05" value="Radial Nerve">Radial Nerve<br />
<input type="checkbox" name="LateralElbowStructure06" value="Ulnar Nerve">Ulnar Nerve<br />
<input type="checkbox" name="LateralElbowStructure07" value="Median Nerve">Median Nerve<br />
<input type="checkbox" name="LateralElbowStructure08" value="DRUJ">Distal radio-ulnar Joint (DRUJ)<br />
<input type="checkbox" name="LateralElbowStructure09" value="C5/6 Facet Joint">C5/6 Facet Joint<br />
<input type="checkbox" name="LateralElbowStructure10" value="C6/7 Facet Joint">C6/7 Facet Joint<br />
<input type="checkbox" name="LateralElbowStructure11" value="C8 Sclerotome">C8 Sclerotome<br />
<input type="checkbox" name="LateralElbowStructure12" value="C7 Sclerotome">C7 Sclerotome<br />
<input type="checkbox" name="LateralElbowStructure13" value="C6 Sclerotome">C6 Sclerotome<br />
<input type="checkbox" name="LateralElbowStructure14" value="HeartCardiac">Heart / Cardiac<br />
<input type="checkbox" name="LateralElbowStructure15" value="Liver">Liver<br />
<input type="checkbox" name="LateralElbowStructure16" value="Infraspinatus Trigger Point">Infraspinatus Trigger Point<br />
<input type="checkbox" name="LateralElbowStructure17" value="Supraspinatus Trigger Point">Supraspinatus Trigger Point<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip03Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($PainIndicator1a) && ($PainIndicator1a!="")) || 
	(isset($PainIndicator2a) && ($PainIndicator2a!="")) || 
    (isset($PainIndicator3a) && ($PainIndicator3a!="")) || 
    (isset($PainIndicator4a) && ($PainIndicator4a!="")) || 
    (isset($PainIndicator5a) && ($PainIndicator5a!="")) ||
    (isset($PainIndicator6a) && ($PainIndicator6a!="")) ||
	(isset($PainIndicator7a) && ($PainIndicator7a!="")) ||
	(isset($PainIndicator8a) && ($PainIndicator8a!=""))
	) {
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 02 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

// End of feedback code.


if ((isset($PainIndicator1a) && ($PainIndicator1a!="")) || 
	(isset($PainIndicator2a) && ($PainIndicator2a!="")) || 
    (isset($PainIndicator3a) && ($PainIndicator3a!="")) || 
    (isset($PainIndicator4a) && ($PainIndicator4a!="")) || 
    (isset($PainIndicator5a) && ($PainIndicator5a!="")) ||
    (isset($PainIndicator6a) && ($PainIndicator6a!="")) ||
	(isset($PainIndicator7a) && ($PainIndicator7a!="")) ||
	(isset($PainIndicator8a) && ($PainIndicator8a!=""))
	) {
$fOutputText = "<strong><p>Question 04a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
}


if (isset($PainIndicator1a) && $PainIndicator1a=="Inflammatory") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory  – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator2a) && $PainIndicator2a=="Mechanical") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator3a) && $PainIndicator3a=="Arthrogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Arthrogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
 	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator4a) && $PainIndicator4a=="Myogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Myogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator5a) && $PainIndicator5a=="Vasculogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Vasculogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator6a) && $PainIndicator6a=="Neurogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
if (isset($PainIndicator7a) && $PainIndicator7a=="Red Flag") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
if (isset($PainIndicator8a) && $PainIndicator8a=="Yellow Flag") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yellow Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$PainIndicator1a = "";
$PainIndicator2a = "";
$PainIndicator3a = "";
$PainIndicator4a = "";
$PainIndicator5a = "";
$PainIndicator6a = "";
$PainIndicator7a = "";
$PainIndicator8a = "";
$FeedBack = "";

if ((isset($PainIndicator1b) && ($PainIndicator1b!="")) || 
	(isset($PainIndicator2b) && ($PainIndicator2b!="")) || 
    (isset($PainIndicator3b) && ($PainIndicator3b!="")) || 
    (isset($PainIndicator4b) && ($PainIndicator4b!="")) || 
    (isset($PainIndicator5b) && ($PainIndicator5b!="")) ||
    (isset($PainIndicator6b) && ($PainIndicator6b!="")) ||
	(isset($PainIndicator7b) && ($PainIndicator7b!="")) ||
	(isset($PainIndicator8b) && ($PainIndicator8b!=""))
	) {
$fOutputText = "<strong><p>Question 04b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
}	
	
if (isset($PainIndicator1b) && $PainIndicator1b=="Inflammatory") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Inflammatory  – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator2b) && $PainIndicator2b=="Mechanical") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator3b) && $PainIndicator3b=="Arthrogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Arthrogenic - well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator4b) && $PainIndicator4b=="Myogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Myogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator5b) && $PainIndicator5b=="Vasculogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Vaculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator6b) && $PainIndicator6b=="Neurogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Neurogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
if (isset($PainIndicator7b) && $PainIndicator7b=="Red Flag") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	
if (isset($PainIndicator8b) && $PainIndicator8b=="Yellow Flag") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yellow Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}		

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);


$PainIndicator1b = "";
$PainIndicator2b = "";
$PainIndicator3b = "";
$PainIndicator4b = "";
$PainIndicator5b = "";
$PainIndicator6b = "";
$PainIndicator7b = "";
$PainIndicator8b = "";
$FeedBack = "";
	
if ((isset($ForearmStructure1) && ($ForearmStructure1!="")) || 
	(isset($ForearmStructure2) && ($ForearmStructure2!="")) || 
    (isset($ForearmStructure3) && ($ForearmStructure3!="")) || 
    (isset($ForearmStructure4) && ($ForearmStructure4!="")) || 
    (isset($ForearmStructure5) && ($ForearmStructure5!="")) ||
	(isset($ForearmStructure6) && ($ForearmStructure6!="")) ||
	(isset($ForearmStructure7) && ($ForearmStructure7!=""))
	) {
$fOutputText = "<strong><p>Question 05a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
}	

if (isset($ForearmStructure1) && $ForearmStructure1=="Radius") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Radius – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
	fwrite($fp, $fOutputText);
    }
	
if (isset($ForearmStructure2) && $ForearmStructure2=="Ulna") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Ulna – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ForearmStructure3) && $ForearmStructure3=="Wrist Extensor Muscles") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Wrist Extensor Muscles – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ForearmStructure4) && $ForearmStructure4=="Wrist Flexor Muscles") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Wrist Flexor Muscles – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ForearmStructure5) && $ForearmStructure5=="Radial Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Radial Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ForearmStructure6) && $ForearmStructure6=="Ulnar Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Ulnar Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ForearmStructure7) && $ForearmStructure7=="Median Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Median Nerve  – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);

	
$ForearmStructure1 = "";
$ForearmStructure2 = "";
$ForearmStructure3 = "";
$ForearmStructure4 = "";
$ForearmStructure5 = "";
$ForearmStructure6 = "";
$ForearmStructure7 = "";
$FeedBack="";


if ((isset($ElbowStructure01) && ($ElbowStructure01!="")) || 
	(isset($ElbowStructure02) && ($ElbowStructure02!="")) || 
    (isset($ElbowStructure03) && ($ElbowStructure03!="")) || 
    (isset($ElbowStructure04) && ($ElbowStructure04!="")) || 
    (isset($ElbowStructure05) && ($ElbowStructure05!="")) ||
	(isset($ElbowStructure06) && ($ElbowStructure06!="")) ||
	(isset($ElbowStructure07) && ($ElbowStructure07!="")) ||
	(isset($ElbowStructure08) && ($ElbowStructure08!="")) ||
	(isset($ElbowStructure09) && ($ElbowStructure09!="")) ||
	(isset($ElbowStructure10) && ($ElbowStructure10!="")) ||
	(isset($ElbowStructure11) && ($ElbowStructure11!=""))
	) {
$fOutputText = "<strong><p>Question 05b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
}

if (isset($ElbowStructure01) && $ElbowStructure01=="PRUJ") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Proximal Radio-Ulna Joint  – well done – this is the correct answer";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

	if (isset($ElbowStructure02) && $ElbowStructure02=="DRUJ") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Distal Radio-Ulnar Jointoint  – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure03) && $ElbowStructure03=="HRJ") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Humero-radial joint  – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ElbowStructure04) && $ElbowStructure04=="HUJ") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Humuro-ulna joint  – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ElbowStructure05) && $ElbowStructure05=="Wrist Extensor Muscles") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Wrist Extensor Muscles – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure06) && $ElbowStructure06=="Wrist Flexor Muscles") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Wrist Flexor Muscles – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure07) && $ElbowStructure07=="Radial Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Radial Nerve  – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure08) && $ElbowStructure08=="Ulnar Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Ulnar Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure09) && $ElbowStructure09=="Median Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Median Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure10) && $ElbowStructure10=="CETO") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Common Extensor Tendon Origin – please reconsider your answer refer to an anatomy text book.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ElbowStructure11) && $ElbowStructure11=="CFTO") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Common Flexor Tendon Origin – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
	$fOutputText = "</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	
	$ElbowStructure01 = "";
	$ElbowStructure02 = "";
	$ElbowStructure03 = "";
	$ElbowStructure04 = "";
	$ElbowStructure05 = "";
	$ElbowStructure06 = "";
	$ElbowStructure07 = "";
	$ElbowStructure08 = "";
	$ElbowStructure09 = "";
	$ElbowStructure10 = "";
	$ElbowStructure11 = "";
	$FeedBack = "";	

if ((isset($BackForearmStructure01) && ($BackForearmStructure01!="")) || 
	(isset($BackForearmStructure02) && ($BackForearmStructure02!="")) || 
    (isset($BackForearmStructure03) && ($BackForearmStructure03!="")) || 
    (isset($BackForearmStructure04) && ($BackForearmStructure04!="")) || 
    (isset($BackForearmStructure05) && ($BackForearmStructure05!="")) || 
	(isset($BackForearmStructure06) && ($BackForearmStructure06!="")) || 
	(isset($BackForearmStructure07) && ($BackForearmStructure07!="")) || 
	(isset($BackForearmStructure08) && ($BackForearmStructure08!="")) || 
	(isset($BackForearmStructure09) && ($BackForearmStructure09!="")) || 
	(isset($BackForearmStructure10) && ($BackForearmStructure10!="")) || 
	(isset($BackForearmStructure11) && ($BackForearmStructure11!="")) || 
    (isset($BackForearmStructure12) && ($BackForearmStructure12!="")) || 
	(isset($BackForearmStructure13) && ($BackForearmStructure13!="")) || 
	(isset($BackForearmStructure14) && ($BackForearmStructure14!="")) || 
	(isset($BackForearmStructure15) && ($BackForearmStructure15!="")) || 
	(isset($BackForearmStructure16) && ($BackForearmStructure16!="")) || 
    (isset($BackForearmStructure17) && ($BackForearmStructure17!=""))
	) {
$fOutputText = "<strong><p>Question 06a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
}

if (isset($BackForearmStructure01) && $BackForearmStructure01=="C5 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C5 Nerve Root  – please reconsider your answer refer to the link on pain referral patterns.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure02) && $BackForearmStructure02=="C6 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C6 Nerve Root – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure03) && $BackForearmStructure03=="C7 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C7 Nerve Root – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure04) && $BackForearmStructure04=="T1 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ T1 Nerve Root – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure05) && $BackForearmStructure05=="Radial Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ T1 Radial Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure06) && $BackForearmStructure06=="Ulnar Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Ulnar Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure07) && $BackForearmStructure07=="Median Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Median Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure08) && $BackForearmStructure08=="DRUJ") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Distal Radio-Ulnar Joint – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure09) && $BackForearmStructure09=="C5/6 Facet Joint") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C5/6 Facet Joint – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure10) && $BackForearmStructure10=="C6/7 Facet Joint") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C6/7 Facet Joint – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure11) && $BackForearmStructure11=="C8 Sclerotome") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C8 Sclerotome – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure12) && $BackForearmStructure12=="C7 Sclerotome") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C7 Sclerotome – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure13) && $BackForearmStructure14=="C6 Sclerotome") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C6 Sclerotome – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure14) && $BackForearmStructure14=="HeartCardiac") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Heart/Cardiac – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure15) && $BackForearmStructure15=="Liver") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Liver – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure16) && $BackForearmStructure16=="Infraspinatus Trigger Point") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Infraspinatus Trigger Point – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($BackForearmStructure17) && $BackForearmStructure17=="Supraspinatus Trigger Point") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Supraspinatus Trigger Point – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
	$fOutputText = "</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	
	$BackForearmStructure01 = "";
	$BackForearmStructure02 = "";
	$BackForearmStructure03 = "";
	$BackForearmStructure04 = "";
	$BackForearmStructure05 = "";
	$BackForearmStructure06 = "";
	$BackForearmStructure07 = "";
	$BackForearmStructure08 = "";
	$BackForearmStructure09 = "";
	$BackForearmStructure10 = "";
	$BackForearmStructure11 = "";
	$BackForearmStructure12 = "";
	$BackForearmStructure13	= "";
	$BackForearmStructure14 = "";
	$BackForearmStructure15 = "";
	$BackForearmStructure16 = "";
	$BackForearmStructure17 = "";
	$FeedBack = "";	

if ((isset($LateralElbowStructure01) && ($LateralElbowStructure01!="")) || 
	(isset($LateralElbowStructure02) && ($LateralElbowStructure02!="")) || 
    (isset($LateralElbowStructure03) && ($LateralElbowStructure03!="")) || 
    (isset($LateralElbowStructure04) && ($LateralElbowStructure04!="")) || 
    (isset($LateralElbowStructure05) && ($LateralElbowStructure05!="")) || 
	(isset($LateralElbowStructure06) && ($LateralElbowStructure06!="")) || 
	(isset($LateralElbowStructure07) && ($LateralElbowStructure07!="")) || 
	(isset($LateralElbowStructure08) && ($LateralElbowStructure08!="")) || 
	(isset($LateralElbowStructure09) && ($LateralElbowStructure09!="")) || 
	(isset($LateralElbowStructure10) && ($LateralElbowStructure10!="")) || 
	(isset($LateralElbowStructure11) && ($LateralElbowStructure11!="")) || 
    (isset($LateralElbowStructure12) && ($LateralElbowStructure12!="")) || 
	(isset($LateralElbowStructure13) && ($LateralElbowStructure13!="")) || 
	(isset($LateralElbowStructure14) && ($LateralElbowStructure14!="")) || 
	(isset($LateralElbowStructure15) && ($LateralElbowStructure15!="")) || 
	(isset($LateralElbowStructure16) && ($LateralElbowStructure16!="")) || 
    (isset($LateralElbowStructure17) && ($LateralElbowStructure17!=""))
	) {

$fOutputText = "<strong><p>Question 06a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
}

if (isset($LateralElbowStructure01) && $LateralElbowStructure01=="C5 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C5 nerve root – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure02) && $LateralElbowStructure02=="C6 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  C6 Nerve Root – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure03) && $LateralElbowStructure03=="C7 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C7 Nerve Root – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure04) && $LateralElbowStructure04=="T1 Nerve Root") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X T1 Nerve Root – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure05) && $LateralElbowStructure05=="Radial Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ T1 Radial Nerve – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure06) && $LateralElbowStructure06=="Ulnar Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Ulnar Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure07) && $LateralElbowStructure07=="Median Nerve") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Median Nerve – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure08) && $LateralElbowStructure08=="DRUJ") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Distal Radio-Ulnar Joint – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure09) && $LateralElbowStructure09=="C5/6 Facet Joint") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C5/6 Facet Joint – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure10) && $LateralElbowStructure10=="C6/7 Facet Joint") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C6/7 Facet Joint – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure11) && $LateralElbowStructure11=="C8 Sclerotome") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C8 Sclerotome – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure12) && $LateralElbowStructure12=="C7 Sclerotome") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ C7 Sclerotome – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure13) && $LateralElbowStructure14=="C6 Sclerotome") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X C6 Sclerotome – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure14) && $LateralElbowStructure14=="HeartCardiac") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Heart/Cardiac – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure15) && $LateralElbowStructure15=="Liver") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Liver – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure16) && $LateralElbowStructure16=="Infraspinatus Trigger Point") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Infraspinatus Trigger Point – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($LateralElbowStructure17) && $LateralElbowStructure17=="Supraspinatus Trigger Point") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Supraspinatus Trigger Point – please reconsider your answer referring to an ‘Anatomy text’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
	$fOutputText = "</strong>";
	echo $fOutputText; 

	fwrite($fp, $fOutputText);
    fclose($fp);
	



	
	$LateralElbowStructure01 = "";
	$LateralElbowStructure02 = "";
	$LateralElbowStructure03 = "";
	$LateralElbowStructure04 = "";
	$LateralElbowStructure05 = "";
	$LateralElbowStructure06 = "";
	$LateralElbowStructure07 = "";
	$LateralElbowStructure08 = "";
	$LateralElbowStructure09 = "";
	$LateralElbowStructure10 = "";
	$LateralElbowStructure11 = "";
	$LateralElbowStructure12 = "";
	$LateralElbowStructure13 = "";
	$LateralElbowStructure14 = "";
	$LateralElbowStructure15 = "";
	$LateralElbowStructure16 = "";
	$LateralElbowStructure17 = "";
	$FeedBack = "";	
	
?>
</body>
</html>