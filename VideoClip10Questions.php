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

$VAS1 = $VAS2 = $VAS3 = $VAS4 = $FeedBack = $FeedBackLabel= $HiddenText ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$VAS1 = test_input($_POST["VAS1"]);
	$VAS2 = test_input($_POST["VAS2"]);
	$VAS3 = test_input($_POST["VAS3"]);
	$VAS4 = test_input($_POST["VAS4"]);

  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 10.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=5ddf1678-a465-42bf-8c3f-39e60c3c71a7&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 15</p></div>
<h2>Read about verbal and visual analogue scores.</h2></div>
<div class="PageReadableBlack"><strong>[<a href="vas.html" target="_blank">Visual and Verbal Analogue Scales (VAS)</a>]</strong></div></p>

<div class="PageReadableBlue"><p>What would you estimate is the severity of the symptoms based on 'Pain score'? (Please choose as many as applicable)</p>

<input type="checkbox" name="VAS1" value="Non Painful">Non Painful<br />
<input type="checkbox" name="VAS2" value="Mild">Mild<br />
<input type="checkbox" name="VAS3" value="Moderate">Moderate<br />
<input type="checkbox" name="VAS4" value="Severe">Severe<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip11Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($VAS1) && ($VAS1!="")) ||
   (isset($VAS2) && ($VAS2!="")) ||
   (isset($VAS3) && ($VAS3!="")) ||
   (isset($VAS4) && ($VAS4!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 10 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($VAS1) && ($VAS1!="")) ||
   (isset($VAS2) && ($VAS2!="")) ||
   (isset($VAS3) && ($VAS3!="")) ||
   (isset($VAS4) && ($VAS4!=""))){
$fOutputText = "<strong><p>Question 15</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($VAS1) && $VAS1=="Non Painful") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘VAS’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($VAS2) && $VAS2=="Mild") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($VAS3) && $VAS3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘VAS’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($VAS4) && $VAS4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘VAS’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	

    $fOutputText = "</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	fclose($fp);
$VAS1 = "";
$VAS2 = "";
$VAS3 = "";
$VAS4 = "";
$FeedBack="";
?>
</body>
</html>