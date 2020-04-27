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

$SIN1 = $SIN2 = $SIN3 = $SIN4 = $FeedBack = $FeedBackLabel= $HiddenText ="";
$ComeGo1 = $ComeGo2 = $ComeGo3 = $ComeGo4 = $ComeGo5 = $ComeGo6 = $ComeGo7 = $ComeGo8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$SIN1 = test_input($_POST["SIN1"]);
	$SIN2 = test_input($_POST["SIN2"]);
	$SIN3 = test_input($_POST["SIN3"]);
	$SIN4 = test_input($_POST["SIN4"]);
	$ComeGo1 = test_input($_POST["ComeGo1"]);
	$ComeGo2 = test_input($_POST["ComeGo2"]);
	$ComeGo3 = test_input($_POST["ComeGo3"]);
	$ComeGo4 = test_input($_POST["ComeGo4"]);
	$ComeGo5 = test_input($_POST["ComeGo5"]);
	$ComeGo6 = test_input($_POST["ComeGo6"]);
	$ComeGo7 = test_input($_POST["ComeGo7"]);
    $ComeGo8 = test_input($_POST["ComeGo8"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 11.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=c189a4dd-61b5-441d-8a2f-50e600da8520&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 16a</p></div>
<h2>Read about ‘SIN’ factors and description of pain.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]&nbsp;|&nbsp; [<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Estimate the severity of the symptoms based on ‘duration of pain’? (Please choose as many as applicable)</p>

<input type="checkbox" name="SIN1" value="Non Painful">Non Painful<br />
<input type="checkbox" name="SIN2" value="Mild">Mild<br />
<input type="checkbox" name="SIN3" value="Moderate">Moderate<br />
<input type="checkbox" name="SIN4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 16b</p></div>
<div class="PageReadableBlue"><p>What does a <?php echo "\""; ?>coming and going<?php echo "\""; ?> pain indicate? (Please choose as many as applicable)</p>

<input type="checkbox" name="ComeGo1" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="ComeGo2" value="Mechanical">Mechanical<br />
<input type="checkbox" name="ComeGo3" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="ComeGo4" value="Myogenic">Myogenic<br />
<input type="checkbox" name="ComeGo5" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="ComeGo6" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="ComeGo7" value="Red Flag">Red Flag<br />
<input type="checkbox" name="ComeGo8" value="Yellow Flag">Yellow Flag<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip12Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 11 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$fOutputText = "<strong><p>Question 16a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($SIN1) && $SIN1=="Non Painful") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘SIN’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN2) && $SIN2=="Mild") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN3) && $SIN3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘SIN’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN4) && $SIN4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘SIN’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);

$SIN1 = "";
$SIN2 = "";
$SIN3 = "";
$SIN4 = "";
$FeedBack="";


if ((isset($ComeGo1) && ($ComeGo1!="")) ||
   (isset($ComeGo2) && ($ComeGo2!="")) ||
   (isset($ComeGo3) && ($ComeGo3!="")) ||
   (isset($ComeGo4) && ($ComeGo4!="")) ||
   (isset($ComeGo5) && ($ComeGo5!="")) ||
   (isset($ComeGo6) && ($ComeGo6!="")) ||
   (isset($ComeGo7) && ($ComeGo7!="")) ||
   (isset($ComeGo8) && ($ComeGo8!=""))){
$fOutputText = "<strong><p>Question 16b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($ComeGo1) && $ComeGo1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
    $FeedBack = "X Inflammatory  – please reconsider your answer referring to the information on ‘Description of pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ComeGo2) && $ComeGo2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .="PageReadableBrightGreen";
    $FeedBack = "√ Mechanical – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ComeGo3) && $ComeGo3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightGreen";
	$FeedBack = "√ Arthrogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ComeGo4) && $ComeGo4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightGreen";
	$FeedBack = "√ Myogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo5) && $ComeGo5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo6) && $ComeGo6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo7) && $ComeGo7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
	$FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo8) && $ComeGo8=="Yellow Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .="PageReadableBrightRed";
	$FeedBack = "X Yellow Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
fclose($fp);

$ComeGo1 = "";
$ComeGo2 = "";
$ComeGo3 = "";
$ComeGo4 = "";
$ComeGo5 = "";
$ComeGo6 = "";
$ComeGo7 = "";
$ComeGo8 = "";
$FeedBack="";
?>
</body>
</html>