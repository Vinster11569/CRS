<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Section 2f - Which Tests? / Objective Physical Assessment</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel= $WhichTests ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$WhichTests = test_input($_POST["WhichTests"]);	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2f</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2f: Which Tests?</h2>
<img src="./images/lightbulb.jpg" alt="Light Bulb Icon" />
<p>Write a plan for the objective physical assessment.</p></div>
Type your thoughts here.
<p><textarea id="WhichTests" name="WhichTests" rows="5" cols="100">

</textarea></p>

<div class="PageReadableBlue"><h2>Objective Physical Assesment</h2>

<p>Remember to consider the SIN factor as you choose which tests you would want to include in the physical assessment.</p></div>

<div class="PageReadableBlack">[<a href="opa.php" target="_blank">Objective Physical Assessment</a>] <em>(This page will open in a new window, so you can return back here once completed.)</em></div>


<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2g.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ($WhichTests!=""){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2f: Objective Physcial Assessment\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

// End of feedback code.

if ($WhichTests!="") {


$fOutputText = "<p><strong>Section 2f: Objective Physical Assessment<br />$WhichTests</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

$WhichTests = "";}

fclose($fp);

?>
</body>
</html>