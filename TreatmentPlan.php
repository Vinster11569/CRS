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

$FeedBackLabel = $TP = $TP2 = $TP3 = $TP4 = $TP5 = $TP6 = $TP7 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clinimp = test_input($_POST["clinimp"]);
	$TP1 = test_input($_POST["TP1"]);
	$TP2 = test_input($_POST["TP2"]);
	$TP3 = test_input($_POST["TP3"]);
	$TP4 = test_input($_POST["TP4"]);
	$TP5 = test_input($_POST["TP5"]);
	$TP6 = test_input($_POST["TP6"]);
	$TP7 = test_input($_POST["TP7"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
<div class="PageReadableBlue"><strong><h2>Section 4E - Treatment Plan</h2></strong></div>
<hr />
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<div class="PageReadableBlue"><strong><h2>Question 41</h2></strong></div>
<div class="PageReadableBlue">Use the link to read more about writing a treatment plan.</div>
<div class="PageReadableBlack"><strong><h3>[<a href="writingatreatmentplan.html" target="_blank">Writing A Treatment plan</a>]</h3></strong></div>
<div class="PageReadableBlue"><strong><h2>Question 40a</h2></strong>
Using the information from the whole assessment, write SMART Goals which directly link to the problem list.<br /></div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table border="1">
<tr><th>ICF</th><th>Problem List</th><th>SMART Goal</th><th>Treatment Plan</th></tr>

<tr><td>1. Pain</td><td>P<sub>A</sub>: Intermittent, sharp 4/10 - 6/10 CETO<br />P<sub>B</sub>: Intermittent ache 2/10 - 4/10 wrist extensors TOP</td><td>Pain reduced 50% in 4/52 and free in 8/52</td><td><textarea rows="3" cols="30" name="TP1" id="TP1"></textarea></td></tr>

<tr><td>2. Swelling</td><td>Tendinosis CETO (tennis elbow)</td><td>No swelling or inflammation in 6/52</td><td><textarea rows="3" cols="30" name="TP2" id="TP2"></textarea></td></tr>

<tr><td>3. Muscle</td><td>Weak 4/5 wrist extensors - resisted and active</td><td>5/5 wrist extensors in 8/52</td><td><textarea rows="3" cols="30" name="TP3" id="TP3"></textarea></td></tr>

<tr><td></td><td>Reduced grip strength 4/5</td><td>5/5 grip strength 8/52</td><td><textarea rows="3" cols="30" name="TP4" id="TP4"></textarea></td></tr>

<tr><td>4. Activity</td><td>Reduced grip duration to 10 minutes</td><td>5/5 grip strength 8/52 (able to complete 40 minutes driving)</td><td><textarea rows="3" cols="30" name="TP5" id="TP5"></textarea></td></tr>

<tr><td>5. Participation</td><td>Unable to continue with badminton group</td><td>Return to badminton once/week</td><td><textarea rows="3" cols="30" name="TP6" id="TP6"></textarea></td></tr>

<tr><td></td><td>Unable to continue decorating new home</td><td>Resume home decorating without recurrence</td><td><textarea rows="3" cols="30" name="TP7" id="TP7"></textarea></td></tr>

</table>

<div class="PageReadableBlue">Click on the link to view an example Treatment Plan for this case study.</div>
<div class="PageReadableBlack"><strong>[<a href="exampletreatmentplan.html" target="_blank">Example Treatment Plan</a>]</strong></div></p>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="FinalSection.php">Next Question.</a></p>

</form>



<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($TP1) && ($TP1!=""))|| 
	(isset($TP2) && ($TP2!="")) || 
	(isset($TP3) && ($TP3!="")) || 
	(isset($TP4) && ($TP4!="")) || 
	(isset($TP5) && ($TP5!="")) || 
	(isset($TP6) && ($TP6!="")) || 
	(isset($TP7	) && ($TP7	!="")))
	{
    $FeedBackLabel = "Your Feedback:";
	
		@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nTreatment Plan Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
	
	}
else
   {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if ((isset($TP1) && ($TP1!=""))|| 
	(isset($TP2) && ($TP2!="")) || 
	(isset($TP3) && ($TP3!="")) || 
	(isset($TP4) && ($TP4!="")) || 
	(isset($TP5) && ($TP5!="")) || 
	(isset($TP6) && ($TP6!="")) || 
	(isset($TP7	) && ($TP7	!="")))
	{

$fOutputText = "<p><strong><table border=\"";
$fOutputText .= "1\"";
$fOutputText .= "><tr><th>ICF</th><th>Problem List</th><th>SMART Goal</th><th>Treatment Plan</th></tr><tr><td>1. Pain</td><td>";
$fOutputText .= "P<sub>A</sub>: Intermittent, sharp 4/10 - 6/10 CETO<br />P<sub>B</sub>: Intermittent ache 2/10 - 4/10 wrist extensors TOP";
$fOutputText .= "</td><td>Pain reduced 50% in 4/52 and free in 8/52</td><td>$TP1</td></tr><tr><td>2. Swelling</td><td>";
$fOutputText .= "Tendinosis CETO (tennis elbow)</td><td>No swelling or inflammation in 6/52</td>";
$fOutputText .= "<td>$TP2</td></tr><tr><td>3. Muscle</td><td>Weak 4/5 wrist extensors - resisted and active";
$fOutputText .= "</td><td>5/5 wrist extensors in 8/52</td><td>$TP3</td></tr><tr><td></td><td>";
$fOutputText .= "Reduced grip strength 4/5</td><td>5/5 grip strength 8/52</td>";
$fOutputText .= "<td>$TP4</td></tr><tr><td>4. Activity</td><td>Reduced grip duration to 10 minutes";
$fOutputText .= "</td><td>5/5 grip strength 8/52 (able to complete 40 minutes driving)</td><td>$TP5</td></tr>";
$fOutputText .= "<tr><td>5. Participation</td><td>Unable to continue with badminton group";
$fOutputText .= "</td><td>Return to badminton once/week</td><td>$TP6</td></tr>";
$fOutputText .= "<tr><td></td><td>Unable to continue with decorating new home</td><td>Resume home decorating without recurrence</td>";
$fOutputText .= "<td>$TP7</td></tr></table></strong></p>";

echo $fOutputText;
fwrite($fp, $fOutputText);

$TP1 = "";
$TP2 = "";
$TP3 = "";
$TP4 = "";
$TP5 = "";
$TP6 = "";
$TP7 = "";
	}
fclose(!fp);
?>
<hr />
</body>
</html>