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
$ICE1 = $ICE2 = $ICE3 = $ICE4 = $ICE5 = $ICE6 = $ICE7 = $ICE8 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$ICE1 = test_input($_POST["ICE1"]);
	$ICE2 = test_input($_POST["ICE2"]);
	$ICE3 = test_input($_POST["ICE3"]);
	$ICE4 = test_input($_POST["ICE4"]);
	$ICE5 = test_input($_POST["ICE5"]);
	$ICE6 = test_input($_POST["ICE6"]);
	$ICE7 = test_input($_POST["ICE7"]);
    $ICE8 = test_input($_POST["ICE8"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 16.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=6f73223f-e5f7-41a6-931c-350b66752153&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="PageReadableBlue"><p>Question 21d</p></div>
<div class="PageReadableBlue"><p>Read about ‘<strong><u>I</u></strong>deas, <strong><u>C</u></strong>oncerns and <strong><u>E</u></strong>xpectations’ of treatment'.</div>
<div class="PageReadableBlack">[<a href="ICE.html" target="_blank">ICE</a>]</div>
<div class="PageReadableBlue"><p>Which of these expectations of physiotherapy reduce the likelihood of being the source of symptoms? (Please choose as many as applicable)</p>

<input type="checkbox" name="ICE1" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="ICE2" value="Mechanical">Mechanical<br />
<input type="checkbox" name="ICE3" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="ICE4" value="Myogenic">Myogenic<br />
<input type="checkbox" name="ICE5" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="ICE6" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="ICE7" value="Red Flag">Red Flag<br />
<input type="checkbox" name="ICE8" value="Yellow Flag">Yellow Flag<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2a.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($ICE1) && ($ICE1!="")) ||
   (isset($ICE2) && ($ICE2!="")) ||
   (isset($ICE3) && ($ICE3!="")) ||
   (isset($ICE4) && ($ICE4!="")) ||
   (isset($ICE5) && ($ICE5!="")) ||
   (isset($ICE6) && ($ICE6!="")) ||
   (isset($ICE7) && ($ICE7!="")) ||
   (isset($ICE8) && ($ICE8!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 16 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($ICE1) && ($ICE1!="")) ||
   (isset($ICE2) && ($ICE2!="")) ||
   (isset($ICE3) && ($ICE3!="")) ||
   (isset($ICE4) && ($ICE4!="")) ||
   (isset($ICE5) && ($ICE5!="")) ||
   (isset($ICE6) && ($ICE6!="")) ||
   (isset($ICE7) && ($ICE7!="")) ||
   (isset($ICE8) && ($ICE8!=""))){
$fOutputText = "<strong><p>Question 21d</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($ICE1) && $ICE1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Inflammatory – please reconsider your answer referring to the information on 'ICE'.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ICE2) && $ICE2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on 'ICE'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ICE3) && $ICE3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Arthrogenic – please reconsider your answer referring to the information on 'ICE'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ICE4) && $ICE4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Myogenic – please reconsider your answer referring to the information on 'ICE'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ICE5) && $ICE5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on 'ICE'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($ICE6) && $ICE6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on 'ICE'.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ICE7) && $ICE7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Red Flag – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($ICE8) && $ICE8=="Yellow Flag") {
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

$ICE1 = "";
$ICE2 = "";
$ICE3 = "";
$ICE4 = "";
$ICE5 = "";
$ICE6 = "";
$ICE7 = "";
$ICE8 = "";
$FeedBack="";
?>
</body>
</html>