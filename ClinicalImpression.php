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

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBackLabel = $clinimp = $PLPain = $PLSwelling = $PLMuscle = $PLJoint = $PLNerve = $PLActivity = $PLParticipation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clinimp = test_input($_POST["clinimp"]);
	$PLPain = test_input($_POST["PLPain"]);
	$PLSwelling = test_input($_POST["PLSwelling"]);
	$PLMuscle = test_input($_POST["PLMuscle"]);
	$PLJoint = test_input($_POST["PLJoint"]);
	$PLNerve = test_input($_POST["PLNerve"]);
	$PLActivity = test_input($_POST["PLActivity"]);
	$PLParticipation = test_input($_POST["PLParticipation"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
<div class="PageReadableBlue"><strong><h2>Section 4C - Clinical Impression</h2></strong></div>
<hr />
<div class="PageReadableBlue"><strong><h2>Question 37</h2></strong></div>
<div class="PageReadableBlue">Use the link to read more about writing a clinical impression.</div>
<div class="PageReadableBlack"><strong><h3>[<a href="writingaclinicalimpression.html" target="_blank">Writing A Clinical Impression</a>]</h3></strong></div>
<div class="PageReadableBlue"><strong><h2>Question 37a</h2></strong>
Using the information from the whole assessment, write a clinical impression:<br />
Please type your clinical impression in the box below:</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<textarea rows="4" cols="50" name="clinimp" id="clinimp"></textarea>
<div class="PageReadableBlue"><strong>Click on this link to view an example clinical impression for this case study.</strong>
<div class="PageReadableBlack"><strong>[<a href="exampleclinicalimpression.html" target="_blank">Example Clinical Impression</a>]</strong></div></p>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>

<div class="PageReadableBlue"><strong><h2>Section 4d: Problem List</h2></strong></div>
<div class="PageReadableBlue"><strong><h2>Question 39</h2></strong></div>
<div class="PageReadableBlue">Use the link to read more about writing a problem list.</div>
<div class="PageReadableBlack"><strong>[<a href="writingaproblemlist.html" target="_blank">Writing A Problem List</a>]</strong></div></p>
<div class="PageReadableBlue"><strong><h2>Question 39a</h2></strong></div>
<div class="PageReadableBlue">Using information from the whole assessment, write a problem list:</div>
<table border="1">
<tr><th>ICF</th><th>Problem List</th></tr>
<tr><td>Pain</td><td><textarea rows="3" cols="30" name="PLPain" id="PLPain"></textarea></td></tr>
<tr><td>Swelling</td><td><textarea rows="3" cols="30" name="PLSwelling" id="PLSwelling"></textarea></td></tr>
<tr><td>Muscle</td><td><textarea rows="3" cols="30" name="PLMuscle" id="PLMuscle"></textarea></td></tr>
<tr><td>Joint</td><td><textarea rows="3" cols="30" name="PLJoint" id="PLJoint"></textarea></td></tr>
<tr><td>Nerve</td><td><textarea rows="3" cols="30" name="PLNerve" id="PLNerve"></textarea></td></tr>
<tr><td>Activity</td><td><textarea rows="3" cols="30" name="PLActivity" id="PLActivity"></textarea></td></tr>
<tr><td>Participation</td><td><textarea rows="3" cols="30" name="PLParticipation" id="PLParticipation"></textarea></td></tr>
</table>

<div class="PageReadableBlue">Click on the link to view an example problem list for this case study.</div>
<div class="PageReadableBlack"><strong>[<a href="exampleproblemlist.html" target="_blank">Example Problem List</a>]</strong></div></p>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>
<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="GoalSetting.php">Next Question.</a></p>

</form>



<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if (isset($clinimp) && $clinimp!=""){

    $FeedBackLabel = "Your Feedback:";
	
		@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nClinical Impression Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
	}
else
   {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if (isset($clinimp) && $clinimp!="") {

    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
    $fOutputText .= "Your Clinical Impression";
    $fOutputText .="</div>";
	$fOutputText .= "<strong>$clinimp</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	$clinimp="";}

if ((isset($PLPain) && ($PLPain!=""))|| 
	(isset($PLSwelling) && ($PLSwelling!="")) || 
	(isset($PLMuscle) && ($PLMuscle!="")) || 
	(isset($PLJoint) && ($PLJoint!="")) || 
	(isset($PLNerve) && ($PLNerve!="")) || 
	(isset($PLActivity) && ($PLActivity!="")) || 
	(isset($PLParticipation) && ($PLParticipation!="")))
	{

$fOutputText = "<p><strong><table border=\"";
$fOutputText .= "1\"";
$fOutputText .= "><tr><th>ICF</th><th>Problem List</th></tr><tr><td>Pain</td>";
$fOutputText .= "<td>$PLPain</td></tr><tr><td>Swelling</td>";
$fOutputText .= "<td>$PLSwelling</td></tr><tr><td>Muscle</td>";
$fOutputText .= "<td>$PLMuscle</td></tr><tr><td>Joint</td>";
$fOutputText .= "<td>$PLJoint</td></tr><tr><td>Nerve</td>";
$fOutputText .= "<td>$PLNerve</td></tr><tr><td>Activity</td>";
$fOutputText .= "<td>$PLActivity</td></tr><tr><td>Participation</td>";
$fOutputText .= "<td>$PLParticipation</td></tr></table></strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$PLPain = "";
$PLSwelling = "";
$PLMuscle = "";
$PLJoint = "";
$PLNerve = "";
$PLActivity = "";
$PLParticipation = "";
	}
fclose(!fp);
$FeedBackLabel = "";
?>
<hr />
</body>
</html>