<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Section 2e - Aggravating Tests</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$AggPlan = $FeedBack = $FeedBackLabel= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$AggPlan = test_input($_POST["AggPlan"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2e: Aggravating Tests</h2>
<p>Write down which objective physcial tests are most likely to aggravate the physical symptoms.</p></div>
Type your thoughts here.
<p><textarea id="AggPlan" name="AggPlan" rows="5" cols="100">

</textarea></p>


<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2f.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ($AggPlan!=""){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2e: Aggravating Tests\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.


if ($AggPlan!="") {
$fOutputText = "<p><strong>Section 2e: aggravating Tests<br />$AggPlan</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$AggPlan = "";}
fclose($fp);
?>
</body>
</html>