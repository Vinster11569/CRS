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
$EasingFactor1a = $EasingFactor2a = $EasingFactor3a = $EasingFactor4a = $EasingFactor5a = $EasingFactor6a = $EasingFactor7a = $EasingFactor8a = "";
$EasingFactor1b = $EasingFactor2b = $EasingFactor3b = $EasingFactor4b = $EasingFactor5b = $EasingFactor6b = $EasingFactor7b = $EasingFactor8b = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	
	$EasingFactor1a = test_input($_POST["EasingFactor1a"]);
	$EasingFactor2a = test_input($_POST["EasingFactor2a"]);
	$EasingFactor3a = test_input($_POST["EasingFactor3a"]);
	$EasingFactor4a = test_input($_POST["EasingFactor4a"]);
	$EasingFactor5a = test_input($_POST["EasingFactor5a"]);
	$EasingFactor6a = test_input($_POST["EasingFactor6a"]);
	$EasingFactor7a = test_input($_POST["EasingFactor7a"]);
	$EasingFactor8a = test_input($_POST["EasingFactor8a"]);
	$EasingFactor1b = test_input($_POST["EasingFactor1b"]);
	$EasingFactor2b = test_input($_POST["EasingFactor2b"]);
	$EasingFactor3b = test_input($_POST["EasingFactor3b"]);
	$EasingFactor4b = test_input($_POST["EasingFactor4b"]);
	$EasingFactor5b = test_input($_POST["EasingFactor5b"]);
	$EasingFactor6b = test_input($_POST["EasingFactor6b"]);
	$EasingFactor7b = test_input($_POST["EasingFactor7b"]);
	$EasingFactor8b = test_input($_POST["EasingFactor8b"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 08.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=62e6335e-5346-4b82-8fd3-1a841150b6f8&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 13</p>
<h2>Read about 'easing factors' and 'description of pain'</h2></div>
<div class="PageReadableBlack"><strong>[<a href="easingfactors.html" target="_blank">Easing Factors</a>]&nbsp;|&nbsp; [<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</strong></div>

<div class="PageReadableBlue"><p>Question 13a</p>
<p>What does an easing factor of ‘anti-inflammatory medication’ indicate? (Please choose as many as applicable)</p>

<input type="checkbox" name="EasingFactor1a" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="EasingFactor2a" value="Mechanical">Mechanical<br />
<input type="checkbox" name="EasingFactor3a" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="EasingFactor4a" value="Myogenic">Myogenic<br />
<input type="checkbox" name="EasingFactor5a" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="EasingFactor6a" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="EasingFactor7a" value="Red Flag">Red Flag<br />
<input type="checkbox" name="EasingFactor8a" value="Yellow Flag">Yellow Flag<br /></div>

<div class="PageReadableBlue"><p>Question 13b</p>
<p>What does an easing factor of ‘cryotherapy’ easing factor indicate? (Please choose as many as applicable)</p>

<input type="checkbox" name="EasingFactor1b" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="EasingFactor2b" value="Mechanical">Mechanical<br />
<input type="checkbox" name="EasingFactor3b" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="EasingFactor4b" value="Myogenic">Myogenic<br />
<input type="checkbox" name="EasingFactor5b" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="EasingFactor6b" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="EasingFactor7b" value="Red Flag">Red Flag<br />
<input type="checkbox" name="EasingFactor8b" value="Yellow Flag">Yellow Flag<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip09Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($EasingFactor1a) && ($EasingFactor1a!="")) ||
   (isset($EasingFactor2a) && ($EasingFactor2a!="")) ||
   (isset($EasingFactor3a) && ($EasingFactor3a!="")) ||
   (isset($EasingFactor4a) && ($EasingFactor4a!="")) ||
   (isset($EasingFactor5a) && ($EasingFactor5a!="")) ||
   (isset($EasingFactor6a) && ($EasingFactor6a!="")) ||
   (isset($EasingFactor7a) && ($EasingFactor7a!="")) ||
   (isset($EasingFactor8a) && ($EasingFactor8a!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 08 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.



if ((isset($EasingFactor1a) && ($EasingFactor1a!="")) ||
   (isset($EasingFactor2a) && ($EasingFactor2a!="")) ||
   (isset($EasingFactor3a) && ($EasingFactor3a!="")) ||
   (isset($EasingFactor4a) && ($EasingFactor4a!="")) ||
   (isset($EasingFactor5a) && ($EasingFactor5a!="")) ||
   (isset($EasingFactor6a) && ($EasingFactor6a!="")) ||
   (isset($EasingFactor7a) && ($EasingFactor7a!="")) ||
   (isset($EasingFactor8a) && ($EasingFactor8a!=""))){
$fOutputText = "<strong><p>Question 13a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($EasingFactor1a) && $EasingFactor1a=="Inflammatory") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory – well done – this is the correct answer.";
    $fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor2a) && $EasingFactor2a=="Mechanical") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor3a) && $EasingFactor3a=="Arthrogenic") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightGreen";
	$FeedBack = "√ Arthrogenic – well done – this is the correct answer.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor4a) && $EasingFactor4a=="Myogenic") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightGreen";
	$FeedBack = "√ Myogenic – well done – this is the correct answer.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($EasingFactor5a) && $EasingFactor5a=="Vasculogenic") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
    $fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($EasingFactor6a) && $EasingFactor6a=="Neurogenic") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor7a) && $EasingFactor7a=="Red Flag") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor8a) && $EasingFactor8a=="Yellow Flag") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightRed";
	$FeedBack = "X Yellow Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

   $fOutputText = "</strong>";
   echo $fOutputText;
   fwrite($fp, $fOutputText);
$EasingFactor1a = "";
$EasingFactor2a = "";
$EasingFactor3a = "";
$EasingFactor4a = "";
$EasingFactor5a = "";
$EasingFactor6a = "";
$EasingFactor7a = "";
$EasingFactor8a = "";
$FeedBack="";


if ((isset($EasingFactor1b) && ($EasingFactor1b!="")) ||
   (isset($EasingFactor2b) && ($EasingFactor2b!="")) ||
   (isset($EasingFactor3b) && ($EasingFactor3b!="")) ||
   (isset($EasingFactor4b) && ($EasingFactor4b!="")) ||
   (isset($EasingFactor5b) && ($EasingFactor5b!="")) ||
   (isset($EasingFactor6b) && ($EasingFactor6b!="")) ||
   (isset($EasingFactor7b) && ($EasingFactor7b!="")) ||
   (isset($EasingFactor8b) && ($EasingFactor8b!=""))){
   $fOutputText = "<p><strong>Question 13b</p>";
   echo $fOutputText;
   fwrite($fp, $fOutputText);
}

if (isset($EasingFactor1b) && $EasingFactor1b=="Inflammatory") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory – well done – this is the correct answer.";
    $fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor2b) && $EasingFactor2b=="Mechanical") {
   $fOutputText =  "<div class=\"";	
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor3b) && $EasingFactor3b=="Arthrogenic") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightGreen";
	$FeedBack = "√ Arthrogenic – well done – this is the correct answer.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor4b) && $EasingFactor4b=="Myogenic") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightGreen";
	$FeedBack = "√ Myogenic – well done – this is the correct answer.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
if (isset($EasingFactor5b) && $EasingFactor5b=="Vasculogenic") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
    $fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($EasingFactor6b) && $EasingFactor6b=="Neurogenic") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor7b) && $EasingFactor7b=="Red Flag") {
    $fOutputText =  "<div class=\"";	
	$fOutputText .=  "PageReadableBrightRed";
    $FeedBack = "X Red Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($EasingFactor8b) && $EasingFactor8b=="Yellow Flag") {
    $fOutputText =  "<div class=\"";
	$fOutputText .=  "PageReadableBrightRed";
	$FeedBack = "X Yellow Flag – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .="\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
fclose($fp);

$EasingFactor1b = "";
$EasingFactor2b = "";
$EasingFactor3b = "";
$EasingFactor4b = "";
$EasingFactor5b = "";
$EasingFactor6b = "";
$EasingFactor7b = "";
$EasingFactor8b = "";

$FeedBack="";

?>
</body>
</html>