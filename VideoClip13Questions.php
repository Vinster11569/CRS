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
$NightWaking1 = $NightWaking2 = $NightWaking3 = $NightWaking4 = $NightWaking5 = $NightWaking6 = $NightWaking7 = $NightWaking8 = "";
$DayTimePattern1 = $DayTimePattern2 = $DayTimePattern3 = $DayTimePattern4 = $DayTimePattern5 = $DayTimePattern6 = $DayTimePattern7 = $DayTimePattern8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$NightWaking1 = test_input($_POST["NightWaking1"]);
	$NightWaking2 = test_input($_POST["NightWaking2"]);
	$NightWaking3 = test_input($_POST["NightWaking3"]);
	$NightWaking4 = test_input($_POST["NightWaking4"]);
	$NightWaking5 = test_input($_POST["NightWaking5"]);
	$NightWaking6 = test_input($_POST["NightWaking6"]);
	$NightWaking7 = test_input($_POST["NightWaking7"]);
    $NightWaking8 = test_input($_POST["NightWaking8"]);
	$SIN1 = test_input($_POST["SIN1"]);
	$SIN2 = test_input($_POST["SIN2"]);
	$SIN3 = test_input($_POST["SIN3"]);
	$SIN4 = test_input($_POST["SIN4"]);
	$DayTimePattern1 = test_input($_POST["DayTimePattern1"]);
	$DayTimePattern2 = test_input($_POST["DayTimePattern2"]);
	$DayTimePattern3 = test_input($_POST["DayTimePattern3"]);
	$DayTimePattern4 = test_input($_POST["DayTimePattern4"]);
	$DayTimePattern5 = test_input($_POST["DayTimePattern5"]);
	$DayTimePattern6 = test_input($_POST["DayTimePattern6"]);
	$DayTimePattern7 = test_input($_POST["DayTimePattern7"]);
	$DayTimePattern8 = test_input($_POST["DayTimePattern8"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 13.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=81945a50-d252-4048-a2a5-f1de219fca50&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="PageReadableBlue"><p>Question 18</p></div>
<div class="PageReadableBlue"><p>Read about ‘diurnal patterns’ and description of pain.</div>
<div class="PageReadableBlack">[<a href="descriptionofpain.html" target="_blank">Description of Pain</a>]</div>
<div class="PageReadableBlue"><p>Question 18a</p></div>
<div class="PageReadableBlue"><p>What does lack of ‘night waking’ reduce the likelihood of being the source of symptoms? (Please choose as many as applicable)</p>

<input type="checkbox" name="NightWaking1" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="NightWaking2" value="Mechanical">Mechanical<br />
<input type="checkbox" name="NightWaking3" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="NightWaking4" value="Myogenic">Myogenic<br />
<input type="checkbox" name="NightWaking5" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="NightWaking6" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="NightWaking7" value="Red Flag">Red Flag<br />
<input type="checkbox" name="NightWaking8" value="Yellow Flag">Yellow Flag<br /></div>

<div class="PageReadableBlue"><p>Question 18b</p></div>

<div class="PageReadableBlue"><p>Estimate the severity of the symptoms based on ‘diurnal pattern’? (Please choose as many as applicable)</p>

<input type="checkbox" name="SIN1" value="Non Painful">Non Painful<br />
<input type="checkbox" name="SIN2" value="Mild">Mild<br />
<input type="checkbox" name="SIN3" value="Moderate">Moderate<br />
<input type="checkbox" name="SIN4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 18c</p></div>
<div class="PageReadableBlue"><p>c.	What does this ‘daytime pattern’ indicate?  (Please choose as many as applicable)</p>

<input type="checkbox" name="DayTimePattern1" value="Inflammatory">Inflammatory<br />
<input type="checkbox" name="DayTimePattern2" value="Mechanical">Mechanical<br />
<input type="checkbox" name="DayTimePattern3" value="Arthrogenic">Arthrogenic<br />
<input type="checkbox" name="DayTimePattern4" value="Myogenic">Myogenic<br />
<input type="checkbox" name="DayTimePattern5" value="Vasculogenic">Vasculogenic<br />
<input type="checkbox" name="DayTimePattern6" value="Neurogenic">Neurogenic<br />
<input type="checkbox" name="DayTimePattern7" value="Red Flag">Red Flag<br />
<input type="checkbox" name="DayTimePattern8" value="Yellow Flag">Yellow Flag<br /></div>


<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip14Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($NightWaking1) && ($NightWaking1!="")) ||
   (isset($NightWaking2) && ($NightWaking2!="")) ||
   (isset($NightWaking3) && ($NightWaking3!="")) ||
   (isset($NightWaking4) && ($NightWaking4!="")) ||
   (isset($NightWaking5) && ($NightWaking5!="")) ||
   (isset($NightWaking6) && ($NightWaking6!="")) ||
   (isset($NightWaking7) && ($NightWaking7!="")) ||
   (isset($NightWaking8) && ($NightWaking8!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 13 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}

$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($NightWaking1) && ($NightWaking1!="")) ||
   (isset($NightWaking2) && ($NightWaking2!="")) ||
   (isset($NightWaking3) && ($NightWaking3!="")) ||
   (isset($NightWaking4) && ($NightWaking4!="")) ||
   (isset($NightWaking5) && ($NightWaking5!="")) ||
   (isset($NightWaking6) && ($NightWaking6!="")) ||
   (isset($NightWaking7) && ($NightWaking7!="")) ||
   (isset($NightWaking8) && ($NightWaking8!=""))){
$fOutputText = "<strong><p>Question 18a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($NightWaking1) && $NightWaking1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($NightWaking2) && $NightWaking2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mechanical – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($NightWaking3) && $NightWaking3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Arthrogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($NightWaking4) && $NightWaking4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Myogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($NightWaking5) && $NightWaking5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($NightWaking6) && $NightWaking6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($NightWaking7) && $NightWaking7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Red Flag – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($NightWaking8) && $NightWaking8=="Yellow Flag") {
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
    
	
$NightWaking1 = "";
$NightWaking2 = "";
$NightWaking3 = "";
$NightWaking4 = "";
$NightWaking5 = "";
$NightWaking6 = "";
$NightWaking7 = "";
$NightWaking8 = "";
$FeedBack="";

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$fOutputText = "<strong><p>Question 18b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($SIN1) && $SIN1=="Non Painful") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘Description of pain’.";
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
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN4) && $SIN4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of pain’.";
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


if ((isset($DayTimePattern1) && ($DayTimePattern1!="")) ||
   (isset($DayTimePattern2) && ($DayTimePattern2!="")) ||
   (isset($DayTimePattern3) && ($DayTimePattern3!="")) ||
   (isset($DayTimePattern4) && ($DayTimePattern4!="")) ||
   (isset($DayTimePattern5) && ($DayTimePattern5!="")) ||
   (isset($DayTimePattern6) && ($DayTimePattern6!="")) ||
   (isset($DayTimePattern7) && ($DayTimePattern7!="")) ||
   (isset($DayTimePattern8) && ($DayTimePattern8!=""))){
$fOutputText = "<strong><p>Question 18c</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($DayTimePattern1) && $DayTimePattern1=="Inflammatory") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory – well done – this is the correct answer.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($DayTimePattern2) && $DayTimePattern2=="Mechanical") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical  – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($DayTimePattern3) && $DayTimePattern3=="Arthrogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Arthrogenic – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($DayTimePattern4) && $DayTimePattern4=="Myogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Myogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($DayTimePattern5) && $DayTimePattern5=="Vasculogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Vasculogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}	

if (isset($DayTimePattern6) && $DayTimePattern6=="Neurogenic") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Neurogenic – please reconsider your answer referring to the information on ‘Description of pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($DayTimePattern7) && $DayTimePattern7=="Red Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Red Flag – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($DayTimePattern8) && $DayTimePattern8=="Yellow Flag") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Yellow Flag – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

$fOutputText = "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
fclose($fp);

$DayTimePattern1 = "";
$DayTimePattern2 = "";
$DayTimePattern3 = "";
$DayTimePattern4 = "";
$DayTimePattern5 = "";
$DayTimePattern6 = "";
$DayTimePattern7 = "";
$DayTimePattern8 = "";
$FeedBack="";
?>
</body>
</html>