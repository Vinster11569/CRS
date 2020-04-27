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

$SIN1 = $SIN2 = $SIN3 = $SIN4 =  $FeedBack = $FeedBackLabel= $HiddenText ="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$SIN1 = test_input($_POST["SIN1"]);
	$SIN2 = test_input($_POST["SIN2"]);
	$SIN3 = test_input($_POST["SIN3"]);
	$SIN4 = test_input($_POST["SIN4"]);

  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 09.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=6bede7cf-b320-491c-9d53-8f495c8a729c&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 14</p>
<h2>Read about ‘SIN’ factors.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Estimate the irritability of the symptoms based on times taken to aggravate and ease the symptoms? (Please choose as many as applicable)</p>

<input type="checkbox" name="SIN1" value="Non Irritable">Non Irritable<br />
<input type="checkbox" name="SIN2" value="Mild">Mild<br />
<input type="checkbox" name="SIN3" value="Moderate">Moderate<br />
<input type="checkbox" name="SIN4" value="Severe">Severe<br /></div>



<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip10Questions.php">Next Question.</a></p>

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

$fOutputText = "<hr />\nVideo Clip 09 Questions\n<hr />\n";
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
$fOutputText = "<strong><p>Question 14</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($SIN1) && $SIN1=="Non Irritable") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN2) && $SIN2=="Mild") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN3) && $SIN3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN4) && $SIN4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
flcose($fp);

$SIN1 = "";
$SIN2 = "";
$SIN3 = "";
$SIN4 = "";
$FeedBack="";
?>
</body>
</html>