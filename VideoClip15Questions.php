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

$ActivityLevel1 = $ActivityLevel2 = $ActivityLevel3 = $ActivityLevel4 = $SymptonSeverity1 = $SymptonSeverity2 = $SymptonSeverity3 = $SymptonSeverity4 = $FeedBack = $FeedBackLabel= $HiddenText ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$ActivityLevel1 = test_input($_POST["ActivityLevel1"]);
	$ActivityLevel2 = test_input($_POST["ActivityLevel2"]);
	$ActivityLevel3 = test_input($_POST["ActivityLevel3"]);
	$ActivityLevel4 = test_input($_POST["ActivityLevel4"]);
	$SymptonSeverity1 = test_input($_POST["SymptonSeverity1"]);
	$SymptonSeverity2 = test_input($_POST["SymptonSeverity2"]);
	$SymptonSeverity3 = test_input($_POST["SymptonSeverity3"]);
	$SymptonSeverity4 = test_input($_POST["SymptonSeverity4"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 15.</h1>

<p></p>
<p></p>
<p></p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=7e5c84a1-102a-4ea7-bec4-743fb750188f&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="PageReadableBlue"><p>Question 20</p></div>
<div class="PageReadableBlue"><p>Read about Healthy Lifestyles.</div>
<div class="PageReadableBlack">[<a href="http://www.nhs.uk/Livewell/fitness/Pages/physical-activity-guidelines-for-adults.aspx" target="_blank">Healthy lifestyles</a>]</div>

<div class="PageReadableBlue"><p>Question 20a</p></div>
<div class="PageReadableBlue"><p>What would you estimate is the level of activity? (Please choose as many as applicable)</p>

<input type="checkbox" name="ActivityLevel1" value="Sedentary">Sedentary<br />
<input type="checkbox" name="ActivityLevel2" value="Low Activity">Low Activity<br />
<input type="checkbox" name="ActivityLevel3" value="Moderate Activity">Moderate Activity<br />
<input type="checkbox" name="ActivityLevel4" value="High Activity">High Activity<br /></div>

<div class="PageReadableBlue"><p>Question 20b</p></div>

<div class="PageReadableBlue"><p>Estimate the severity of the symptoms based on ‘diurnal pattern’? (Please choose as many as applicable)</p>

<input type="checkbox" name="SymptonSeverity1" value="Non Painful">Non Painful<br />
<input type="checkbox" name="SymptonSeverity2" value="Mild">Mild<br />
<input type="checkbox" name="SymptonSeverity3" value="Moderate">Moderate<br />
<input type="checkbox" name="SymptonSeverity4" value="Severe">Severe<br /></div>



<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip16Questions.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($ActivityLevel1) && ($ActivityLevel1!="")) ||
    (isset($ActivityLevel2) && ($ActivityLevel2!="")) ||
    (isset($ActivityLevel3) && ($ActivityLevel3!="")) ||
    (isset($ActivityLevel4) && ($ActivityLevel4!="")) ||
    (isset($SymptonSeverity1) && ($SymptonSeverity1!="")) ||
    (isset($SymptonSeverity2) && ($SymptonSeverity2!="")) ||
    (isset($SymptonSeverity3) && ($SymptonSeverity3!="")) ||
    (isset($SymptonSeverity4) && ($SymptonSeverity4!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nVideo Clip 15 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($ActivityLevel1) && ($ActivityLevel1!="")) ||
   (isset($ActivityLevel2) && ($ActivityLevel2!="")) ||
   (isset($ActivityLevel3) && ($ActivityLevel3!="")) ||
   (isset($ActivityLevel4) && ($ActivityLevel4!=""))){
$fOutputText = "<strong><p>Question 20a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($ActivityLevel1) && $ActivityLevel1=="Sedentary") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Sedentary – please reconsider your answer referring to the information on ‘Healthy Lifestyles’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ActivityLevel2) && $ActivityLevel2=="Low Activity") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Low Activity – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ActivityLevel3) && $ActivityLevel3=="Moderate Activity") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Moderate Activity – please reconsider your answer referring to the information on ‘Healthy Lifestyles’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($ActivityLevel4) && $ActivityLevel4=="High Activity") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X High Activity – please reconsider your answer referring to the information on ‘Healthy Lifestyles’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

    $fOutputText = "</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	
$ActivityLevel1 = "";
$ActivityLevel2 = "";
$ActivityLevel3 = "";
$ActivityLevel4 = "";
$FeedBack="";

if ((isset($SymptonSeverity1) && ($SymptonSeverity1!="")) ||
   (isset($SymptonSeverity2) && ($SymptonSeverity2!="")) ||
   (isset($SymptonSeverity3) && ($SymptonSeverity3!="")) ||
   (isset($SymptonSeverity4) && ($SymptonSeverity4!=""))){
$fOutputText = "<strong><p>Question 20b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($SymptonSeverity1) && $SymptonSeverity1=="Non Painful") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘SIN Factor’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SymptonSeverity2) && $SymptonSeverity2=="Mild") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SymptonSeverity3) && $SymptonSeverity3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘SIN Factor’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SymptonSeverity4) && $SymptonSeverity4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘SIN Factor’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

    $fOutputText = "</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	fclose($fp);
	
$SymptonSeverity1 = "";
$SymptonSeverity2 = "";
$SymptonSeverity3 = "";
$SymptonSeverity4 = "";
$FeedBack="";
?>
</body>
</html>