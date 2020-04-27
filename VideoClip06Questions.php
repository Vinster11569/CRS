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
$ComeGo1 = $ComeGo2 = $ComeGo3 = $ComeGo4 = $ComeGo5 = $ComeGo6 = $ComeGo7 = $ComeGo8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";

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
<h1 align="center">Questions For Video Clip 06.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=44f01f53-8ded-4dd7-a343-a8b05924420d&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue">
<h2>10.	Read about ‘SIN’ factors and description of Pain.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]&nbsp;|&nbsp;[<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 10</p></div>
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
 
<p><a href="VideoClip07Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($ComeGo1) && ($ComeGo1!="")) ||
   (isset($ComeGo2) && ($ComeGo2!="")) ||
   (isset($ComeGo3) && ($ComeGo3!="")) ||
   (isset($ComeGo4) && ($ComeGo4!="")) ||
   (isset($ComeGo5) && ($ComeGo5!="")) ||
   (isset($ComeGo6) && ($ComeGo6!="")) ||
   (isset($ComeGo7) && ($ComeGo7!="")) ||
   (isset($ComeGo8) && ($ComeGo8!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 06 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.


if ((isset($ComeGo1) && ($ComeGo1!="")) ||
   (isset($ComeGo2) && ($ComeGo2!="")) ||
   (isset($ComeGo3) && ($ComeGo3!="")) ||
   (isset($ComeGo4) && ($ComeGo4!="")) ||
   (isset($ComeGo5) && ($ComeGo5!="")) ||
   (isset($ComeGo6) && ($ComeGo6!="")) ||
   (isset($ComeGo7) && ($ComeGo7!="")) ||
   (isset($ComeGo8) && ($ComeGo8!=""))){
$fOutputText = "<strong><p>Question 10b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($ComeGo1) && $ComeGo1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Inflammatory  – please reconsider your answer referring to the information on ‘Description of pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ComeGo2) && $ComeGo2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ComeGo3) && $ComeGo3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Arthrogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ComeGo4) && $ComeGo4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Myogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo5) && $ComeGo5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($ComeGo6) && $ComeGo6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo7) && $ComeGo7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ComeGo8) && $ComeGo8=="Yellow Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Yellow Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

$fOutputText = "</strong>";
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
echo "</p>";

?>
</body>
</html>