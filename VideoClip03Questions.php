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
$PainIndicator1a = $PainIndicator2a = $PainIndicator3a = $PainIndicator4a = $PainIndicator5a = $PainIndicator6a = $PainIndicator7a = $PainIndicator8a = "";



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
	
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 03.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=7b6eb528-dae8-4fc6-aae2-c444d7ac6d7d&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<h2>Read about 'Descriptions of Pain'</h2></div>

<div class="PageReadableBlack"><strong>[<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 07</p>
<p>What might a <?php echo "\""; ?>Single location of symptoms<?php echo "\""; ?> indicate? (Please choose as many as applicable)</p>
<input type="checkbox" name="PainIndicator1a" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="PainIndicator2a" value="Mechanical">Mechanical<br />
<input type="checkbox" name="PainIndicator3a" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="PainIndicator4a" value="Myogenic">Myogenic<br />
<input type="checkbox" name="PainIndicator5a" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="PainIndicator6a" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="PainIndicator7a" value="Red Flag">Red Flag<br />
<input type="checkbox" name="PainIndicator8a" value="Yellow Flag">Yellow Flag<br /></div>



<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip04Questions.php">Next Question.</a></p>

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

$fOutputText = "<hr />\nVideo Clip 03 Questions\n<hr />\n";
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
$fOutputText = "<strong><p>Question 07</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}


if (isset($PainIndicator1a) && $PainIndicator1a=="Inflammatory") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Inflammatory – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator2a) && $PainIndicator2a=="Mechanical") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical – well done – this is the correct answer.";
	$fOutputText .= "\">";
	$fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($PainIndicator3a) && $PainIndicator3a=="Arthrogenic") {
	$fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Arthrogenic – well done – this is the correct answer.";
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
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
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
fclose($fp);
$PainIndicator1a = "";
$PainIndicator2a = "";
$PainIndicator3a = "";
$PainIndicator4a = "";
$PainIndicator5a = "";
$PainIndicator6a = "";
$PainIndicator7a = "";
$PainIndicator8a = "";
$FeedBack = "";
?>
</body>
</html>