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
$EasingFactors1 = $EasingFactors2 = $EasingFactors3 = $EasingFactors4 = $EasingFactors5 = $EasingFactors6 = $EasingFactors7 = $EasingFactors8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$EasingFactors1 = test_input($_POST["EasingFactors1"]);
	$EasingFactors2 = test_input($_POST["EasingFactors2"]);
	$EasingFactors3 = test_input($_POST["EasingFactors3"]);
	$EasingFactors4 = test_input($_POST["EasingFactors4"]);
	$EasingFactors5 = test_input($_POST["EasingFactors5"]);
	$EasingFactors6 = test_input($_POST["EasingFactors6"]);
	$EasingFactors7 = test_input($_POST["EasingFactors7"]);
    $EasingFactors8 = test_input($_POST["EasingFactors8"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 12.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=5b8094c1-782c-47be-bde7-b7bfe7af934a&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Read about easing factors and description of pain.</div>
<div class="PageReadableBlack">[<a href="easingfactors.html" target="_blank">Easing Factors</a>]&nbsp;|&nbsp; [<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</div>
<div class="PageReadableBlue"><p>Question 17</p></div>
<div class="PageReadableBlue"><p>a.	What does an easing factor of ‘massaging or rubbing’ indicate? (Please choose as many as applicable)</p>

<input type="checkbox" name="EasingFactors1" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="EasingFactors2" value="Mechanical">Mechanical<br />
<input type="checkbox" name="EasingFactors3" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="EasingFactors4" value="Myogenic">Myogenic<br />
<input type="checkbox" name="EasingFactors5" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="EasingFactors6" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="EasingFactors7" value="Red Flag">Red Flag<br />
<input type="checkbox" name="EasingFactors8" value="Yellow Flag">Yellow Flag<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip13Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($EasingFactors1) && ($EasingFactors1!="")) ||
   (isset($EasingFactors2) && ($EasingFactors2!="")) ||
   (isset($EasingFactors3) && ($EasingFactors3!="")) ||
   (isset($EasingFactors4) && ($EasingFactors4!="")) ||
   (isset($EasingFactors5) && ($EasingFactors5!="")) ||
   (isset($EasingFactors6) && ($EasingFactors6!="")) ||
   (isset($EasingFactors7) && ($EasingFactors7!="")) ||
   (isset($EasingFactors8) && ($EasingFactors8!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 12 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}

$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

// End of feedback code.

if ((isset($EasingFactors1) && ($EasingFactors1!="")) ||
   (isset($EasingFactors2) && ($EasingFactors2!="")) ||
   (isset($EasingFactors3) && ($EasingFactors3!="")) ||
   (isset($EasingFactors4) && ($EasingFactors4!="")) ||
   (isset($EasingFactors5) && ($EasingFactors5!="")) ||
   (isset($EasingFactors6) && ($EasingFactors6!="")) ||
   (isset($EasingFactors7) && ($EasingFactors7!="")) ||
   (isset($EasingFactors8) && ($EasingFactors8!=""))){

$fOutputText = "<strong><p>Question 17</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($EasingFactors1) && $EasingFactors1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactors2) && $EasingFactors2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactors3) && $EasingFactors3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Arthrogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactors4) && $EasingFactors4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Myogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($EasingFactors5) && $EasingFactors5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($EasingFactors6) && $EasingFactors6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($EasingFactors7) && $EasingFactors7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($EasingFactors8) && $EasingFactors8=="Yellow Flag") {
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
	fclose($fp);
	
$EasingFactors1 = "";
$EasingFactors2 = "";
$EasingFactors3 = "";
$EasingFactors4 = "";
$EasingFactors5 = "";
$EasingFactors6 = "";
$EasingFactors7 = "";
$EasingFactors8 = "";
$FeedBack="";
?>
</body>
</html>