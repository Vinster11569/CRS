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

$FeedBack = $FeedBackLabel= $HiddenText ="";
$SymptonSource1 = $SymptonSource2 = $SymptonSource3 = $SymptonSource4 = $SymptonSource5 = $SymptonSource6 = $SymptonSource7 = $SymptonSource8 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$SymptonSource1 = test_input($_POST["SymptonSource1"]);
	$SymptonSource2 = test_input($_POST["SymptonSource2"]);
	$SymptonSource3 = test_input($_POST["SymptonSource3"]);
	$SymptonSource4 = test_input($_POST["SymptonSource4"]);
	$SymptonSource5 = test_input($_POST["SymptonSource5"]);
	$SymptonSource6 = test_input($_POST["SymptonSource6"]);
	$SymptonSource7 = test_input($_POST["SymptonSource7"]);
    $SymptonSource8 = test_input($_POST["SymptonSource8"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 14.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=c60ac6e5-f434-40cc-8b54-113c716892ac&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="PageReadableBlue"><p>Question 19</p></div>
<div class="PageReadableBlue"><p>Read about Red Flags.</div>
<div class="PageReadableBlack">[<a href="./documents/Red Flags.ppt" target="_blank">Red Flags</a>]</div>
<div class="PageReadableBlue"><p>What does lack of these symptoms reduce the likelihood of being the source of symptoms? (Please choose as many as applicable)</p>

<input type="checkbox" name="SymptonSource1" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="SymptonSource2" value="Mechanical">Mechanical<br />
<input type="checkbox" name="SymptonSource3" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="SymptonSource4" value="Myogenic">Myogenic<br />
<input type="checkbox" name="SymptonSource5" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="SymptonSource6" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="SymptonSource7" value="Red Flag">Red Flag<br />
<input type="checkbox" name="SymptonSource8" value="Yellow Flag">Yellow Flag<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip15Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($SymptonSource1) && ($SymptonSource1!="")) ||
   (isset($SymptonSource2) && ($SymptonSource2!="")) ||
   (isset($SymptonSource3) && ($SymptonSource3!="")) ||
   (isset($SymptonSource4) && ($SymptonSource4!="")) ||
   (isset($SymptonSource5) && ($SymptonSource5!="")) ||
   (isset($SymptonSource6) && ($SymptonSource6!="")) ||
   (isset($SymptonSource7) && ($SymptonSource7!="")) ||
   (isset($SymptonSource8) && ($SymptonSource8!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 14 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($SymptonSource1) && ($SymptonSource1!="")) ||
   (isset($SymptonSource2) && ($SymptonSource2!="")) ||
   (isset($SymptonSource3) && ($SymptonSource3!="")) ||
   (isset($SymptonSource4) && ($SymptonSource4!="")) ||
   (isset($SymptonSource5) && ($SymptonSource5!="")) ||
   (isset($SymptonSource6) && ($SymptonSource6!="")) ||
   (isset($SymptonSource7) && ($SymptonSource7!="")) ||
   (isset($SymptonSource8) && ($SymptonSource8!=""))){
$fOutputText = "<strong><p>Question 19</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($SymptonSource1) && $SymptonSource1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Inflammatory – please reconsider your answer referring to the information on ‘Description of pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SymptonSource2) && $SymptonSource2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SymptonSource3) && $SymptonSource3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Arthrogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SymptonSource4) && $SymptonSource4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Myogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($SymptonSource5) && $SymptonSource5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($SymptonSource6) && $SymptonSource6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($SymptonSource7) && $SymptonSource7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($SymptonSource8) && $SymptonSource8=="Yellow Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Yellow Flag – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

    $fOutputText = "</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
    fclose($fp);
	
$SymptonSource1 = "";
$SymptonSource2 = "";
$SymptonSource3 = "";
$SymptonSource4 = "";
$SymptonSource5 = "";
$SymptonSource6 = "";
$SymptonSource7 = "";
$SymptonSource8 = "";
$FeedBack="";


?>
</body>
</html>