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

$fOutputText = $StageCondition = $ConditionProgress = $InjuryMechanism = $FeedBack = $FeedBackLabel= $HiddenText ="";
$AggravatingFactors1 = $AggravatingFactors2 = $AggravatingFactors3 = $AggravatingFactors4 = $AggravatingFactors5 = $AggravatingFactors6 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
    $StageCondition = test_input($_POST["StageCondition"]);
    $ConditionProgress = test_input($_POST["ConditionProgress"]);
    $InjuryMechanism = test_input($_POST["InjuryMechanism"]);
	$AggravatingFactors1 = test_input($_POST["AggravatingFactors1"]);
	$AggravatingFactors2 = test_input($_POST["AggravatingFactors2"]);
	$AggravatingFactors3 = test_input($_POST["AggravatingFactors3"]);
	$AggravatingFactors4 = test_input($_POST["AggravatingFactors4"]);
	$AggravatingFactors5 = test_input($_POST["AggravatingFactors5"]);
	$AggravatingFactors6 = test_input($_POST["AggravatingFactors6"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Video Clip 01.</h1>

<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=c8cc66ab-c269-4bec-881b-1e35b06883c6&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><p>Question 01</p>
<h2>Read About 'Stage of Condition'</h2></div>
<div class="PageReadableBlack"><strong>[<a href="stageofcondition.html" target="_blank">Stage of Condition</a>]</strong></div>
<div class="PageReadableBlue"><p>What stage is the condition?</p>
  <input type="radio" name="StageCondition" value="Acute">Acute<br />
  <input type="radio" name="StageCondition" value="Sub-Acute">Sub-Acute<br />
  <input type="radio" name="StageCondition" value="Chronic">Chronic<br /></div>

<div class="PageReadableBlue"><p>Question 02</p>
<div class="PageReadableBlue"><p>How is the condition progressing?</p>
<input type="radio" name="ConditionProgress" value="Improving">Improving<br />
<input type="radio" name="ConditionProgress" value="Static">Static<br />
<input type="radio" name="ConditionProgress" value="Worsening">Worsening<br /></div>

<div class="PageReadableBlue"><p>Question 03a</p>
<h2>Read about 'Mechanism of Injury’</h2></div>
<div class="PageReadableBlack"><strong>[<a href="mechanismofinjury.html" target="_blank">Mechanism of Injury</a>]</strong></div></p>
<div class="PageReadableBlue"><p>What was the mechanism of injury?</p>
<input type="radio" name="InjuryMechanism" value="Insidious Onset">Insidious Onset<br />
<input type="radio" name="InjuryMechanism" value="Specific Event">Specific Event<br /></div>

<div class="PageReadableBlue"><p>Question 03b</p>
<h2>Read about 'Aggravating Factors'</h2></div>
<div class="PageReadableBlack"><strong>[<a href="aggravatingfactors.html" target="_blank">Aggravating Factors</a>]</strong></div></p>
<div class="PageReadableBlue"><p>What factors aggravated the condition? (Please choose as many as applicable)</p>
<input type="checkbox" name="AggravatingFactors1" value="Moving house">Moving house<br />
<input type="checkbox" name="AggravatingFactors2" value="Painting">Painting<br />
<input type="checkbox" name="AggravatingFactors3" value="Repeated Movements">Repeated Movements<br />
<input type="checkbox" name="AggravatingFactors4" value="Rest">Rest<br />
<input type="checkbox" name="AggravatingFactors5" value="Arm Elevation">Arm Elevation<br />
<input type="checkbox" name="AggravatingFactors6" value="Touching The Arm">Touching The Arm<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="VideoClip02Questions.php">Next Question.</a></p>

</form></div>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if (isset($StageCondition) && ($StageCondition!="")) {
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<p><strong>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}
$fOutputText = "<hr />\nVideo Clip 01 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if (isset($StageCondition) && ($StageCondition!="")) {
$fOutputText = "<p><strong>Question 01</p>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
}

$fOutputText = "<div class=\"";

if (isset($StageCondition) && $StageCondition=="Acute") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Acute  – please reconsider your answer referring to the information on ‘Stage of condition’.";}
	
if (isset($StageCondition) && $StageCondition=="Sub-Acute") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Sub-acute – well done – this is the correct answer.";}
	
if (isset($StageCondition) && $StageCondition=="Chronic") {
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X  Chronic – please reconsider your answer referring to the information on ‘Stage of condition’.";}
	
$fOutputText .= "\">";
$fOutputText .= $FeedBack;
$fOutputText .= "</div></strong></p>";

echo $fOutputText;
fwrite($fp, $fOutputText);

$StageCondition = "";
$FeedBack="";

if (isset($ConditionProgress) && ($ConditionProgress!="")) {
$fOutputText = "<p><strong>Question 02<br />";
echo $fOutputText;
fwrite($fp, $fOutputText);}

$fOutputText = "<div class=\"";
if (isset($ConditionProgress) && $ConditionProgress=="Improving") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Improving – please reconsider your answer referring to the information on ‘Condition progression’.";}
if (isset($ConditionProgress) && $ConditionProgress=="Static") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Static – well done – this is the correct answer";}
if (isset($ConditionProgress) && $ConditionProgress=="Worsening") {
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X  Worsening – please reconsider your answer referring to the information on ‘Condition progression’.";}
$fOutputText .= "\">";
$fOutputText .= $FeedBack;
$fOutputText .= "</div></strong></p>";

echo $fOutputText;
fwrite($fp, $fOutputText);

$ConditionProgress = "";
$FeedBack="";

if (isset($InjuryMechanism) && ($InjuryMechanism!="")) {
$fOutputText = "<p><strong>Question 03a<br />";
echo $fOutputText;
fwrite($fp, $fOutputText);}

$fOutputText = "<div class=\"";
if (isset($InjuryMechanism) && $InjuryMechanism=="Insidious Onset") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Insidious – please reconsider your answer referring to the information on ‘Mechanism of Injury’.";}
if (isset($InjuryMechanism) && $InjuryMechanism=="Specific Event") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Specific Event – well done – this is the correct answer";}
$fOutputText .= "\">";
$fOutputText .= $FeedBack;
$fOutputText .="</div></strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$InjuryMechanism = "";
$FeedBack="";

if ((isset($AggravatingFactors1) && ($AggravatingFactors1!="")) || 
	(isset($AggravatingFactors2) && ($AggravatingFactors2!="")) || 
    (isset($AggravatingFactors3) && ($AggravatingFactors3!="")) || 
    (isset($AggravatingFactors4) && ($AggravatingFactors4!="")) || 
    (isset($AggravatingFactors5) && ($AggravatingFactors5!="")) ||
    (isset($AggravatingFactors6) && ($AggravatingFactors6!=""))
	) {
$fOutputText = "<p><strong>Question 03b<br />";
echo $fOutputText;
fwrite($fp, $fOutputText);
$fOutputText="";
}

if (isset($AggravatingFactors1) && $AggravatingFactors1=="Moving House") {
	$fOutputText .= "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Moving House – well done – this is the correct answer .";
	$fOutputText .= "\">";
	$fOutputText .= "<p>";
    $fOutputText .= $FeedBack;
    $fOutputText .= "</p></div>";}
if (isset($AggravatingFactors2) && $AggravatingFactors2=="Painting") {
	$fOutputText .= "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Painting – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>";
	$fOutputText .= $FeedBack;
	$fOutputText .= "</p></div>";}
if (isset($AggravatingFactors3) && $AggravatingFactors3=="Repeated Movements") {
	$fOutputText .= "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Repeated movements – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>";
	$fOutputText .= $FeedBack;
	$fOutputText .= "</p></div>";}
if (isset($AggravatingFactors4) && $AggravatingFactors4=="Rest") {
	$fOutputText .= "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Rest – please reconsider your answer referring to the information on ‘Aggravating factors’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>";
	$fOutputText .= $FeedBack;
	$fOutputText .= "</p></div>";}
if (isset($AggravatingFactors5) && $AggravatingFactors5=="Arm Elevation") {
	$fOutputText .= "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  Arm elevation – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>";
	$fOutputText .= $FeedBack;
	$fOutputText .= "</p></div>";}
if (isset($AggravatingFactors6) && $AggravatingFactors6=="Touching The Arm") {
	$fOutputText .= "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X  Touching the arm – please reconsider your answer referring to the information on ‘Aggravating factors’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>";
	$fOutputText .= $FeedBack;
	$fOutputText .= "</p></div></strong></p>";}	
    echo $fOutputText;
	fwrite($fp, $fOutputText);
    fclose($fp);
	
$AggravatingFactors1 = "";
$AggravatingFactors2 = "";
$AggravatingFactors3 = "";
$AggravatingFactors4 = "";
$AggravatingFactors5 = "";
$AggravatingFactors6 = "";

$FeedBack="";
?>

</body>
</html>