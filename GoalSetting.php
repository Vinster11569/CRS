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

$FeedBackLabel = $SG1 = $SG2 = $SG3 = $SG4 = $SG5 = $SG6 = $SG7 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clinimp = test_input($_POST["clinimp"]);
	$SG1 = test_input($_POST["SG1"]);
	$SG2 = test_input($_POST["SG2"]);
	$SG3 = test_input($_POST["SG3"]);
	$SG4 = test_input($_POST["SG4"]);
	$SG5 = test_input($_POST["SG5"]);
	$SG6 = test_input($_POST["SG6"]);
	$SG7 = test_input($_POST["SG7"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
<div class="PageReadableBlue"><strong><h2>Section 4E - Goal Setting</h2></strong></div>
<hr />
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<div class="PageReadableBlue"><strong><h2>Question 40</h2></strong></div>
<div class="PageReadableBlue">Use the link to read more about writing SMART Goal setting.</div>
<div class="PageReadableBlack"><strong><h3>[<a href="smartgoals.html" target="_blank">Writing SMART Goals</a>]</h3></strong></div>
<div class="PageReadableBlue"><strong><h2>Question 40a</h2></strong>
Using the information from the whole assessment, write SMART Goals which directly link to the problem list.<br /></div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table border="1">
<tr><th>ICF</th><th>Problem List</th><th>SMART Goal</th></tr>

<tr><td>1. Pain</td><td>P<sub>A</sub>: Intermittent, sharp 4/10 - 6/10 CETO<br />P<sub>B</sub>: Intermittent ache 2/10 - 4/10 wrist extensors TOP</td><td><textarea rows="3" cols="30" name="SG1" id="SG1"></textarea></td></tr>

<tr><td>2. Swelling</td><td>Tendinosis CETO (tennis elbow)</td><td><textarea rows="3" cols="30" name="SG2" id="SG2"></textarea></td></tr>

<tr><td>3. Muscle</td><td>Weak 4/5 wrist extensors - resisted and active</td><td><textarea rows="3" cols="30" name="SG3" id="SG3"></textarea></td></tr>

<tr><td></td><td>Reduced grip strength 4/5</td><td><textarea rows="3" cols="30" name="SG4" id="SG4"></textarea></td></tr>

<tr><td>4. Activity</td><td>Reduced grip duration to 10 minutes</td><td><textarea rows="3" cols="30" name="SG5" id="SG5"></textarea></td></tr>

<tr><td>5. Participation</td><td>Unable to continue with badminton group</td><td><textarea rows="3" cols="30" name="SG6" id="SG6"></textarea></td></tr>

<tr><td></td><td>Unable to continue decorating new home</td><td><textarea rows="3" cols="30" name="SG7" id="SG7"></textarea></td></tr>

</table>

<div class="PageReadableBlue">Click on the link to view example SMART Goals for this case study.</div>
<div class="PageReadableBlack"><strong>[<a href="examplesmartgoals.html" target="_blank">Example SMART Goals</a>]</strong></div></p>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="TreatmentPlan.php">Next Question.</a></p>

</form>



<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($SG1) && ($SG1!=""))|| 
	(isset($SG2) && ($SG2!="")) || 
	(isset($SG3) && ($SG3!="")) || 
	(isset($SG4) && ($SG4!="")) || 
	(isset($SG5) && ($SG5!="")) || 
	(isset($SG6) && ($SG6!="")) || 
	(isset($SG7	) && ($SG7	!="")))
	{
    $FeedBackLabel = "Your Feedback:";
	
	@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nGoal Setting Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
	}
else
   {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if ((isset($SG1) && ($SG1!=""))|| 
	(isset($SG2) && ($SG2!="")) || 
	(isset($SG3) && ($SG3!="")) || 
	(isset($SG4) && ($SG4!="")) || 
	(isset($SG5) && ($SG5!="")) || 
	(isset($SG6) && ($SG6!="")) || 
	(isset($SG7	) && ($SG7	!="")))
	{

$fOutputText = "<p><strong><table border=\"";
$fOutputText .= "1\"";
$fOutputText .= "><tr><th>ICF</th><th>Problem List</th><th>SMART Goal</th></tr><tr><td>1. Pain</td><td>";
$fOutputText .= "P<sub>A</sub>: Intermittent, sharp 4/10 - 6/10 CETO<br />P<sub>B</sub>: Intermittent ache 2/10 - 4/10 wrist extensors TOP";
$fOutputText .= "</td><td>$SG1</td></tr><tr><td>2. Swelling</td><td>";
$fOutputText .= "Tendinosis CETO (tennis elbow)</td><td>$SG2</td></tr><tr><td>3. Muscle</td><td>";
$fOutputText .= "Weak 4/5 wrist extensors - resisted and active</td><td>$SG3</td></tr><tr><td></td><td>";
$fOutputText .= "Reduced grip strength 4/5</td><td>$SG4</td></tr><tr><td>4. Activity</td><td>";
$fOutputText .= "Reduced grip duration to 10 minutes</td><td>$SG5</td></tr><tr><td>5. Participation</td><td>";
$fOutputText .= "Unable to continue with badminton group</td><td>$SG6</td></tr>";
$fOutputText .= "<tr><td></td><td>Unable to continue with decorating new home</td>";
$fOutputText .= "<td>$SG7</td></tr></table></strong></p>";

echo $fOutputText;
fwrite($fp, $fOutputText);

$SG1 = "";
$SG2 = "";
$SG3 = "";
$SG4 = "";
$SG5 = "";
$SG6 = "";
$SG7 = "";
	}
fclose(!fp);
?>
<hr />
</body>
</html>