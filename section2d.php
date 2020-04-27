<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Section 2d - Identifying Cautions and Precautions to the Objective Physical Assessment</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel=  $OPACaution = $OPAPreCaution = "";
$tMust = $tShould = $tCould = $tStanding = $tSitting = $tLying = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	$OPACaution = test_input($_POST["OPACaution"]);
	$OPAPreCaution = test_input($_POST["OPAPreCaution"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2d.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2d: Identifying cautions and precautions to the objective physical assessment</h2>
<p>Question 26<br />
<p>Use this link to read more about deciding on identifying cautions and precautions to the objective physical assessment.</p></div>
<div class="PageReadableBlack"><strong>[<a href="cautionsandprecautions.html" target="_blank">Cautions and Precuations</a>]</strong></div></p>
<div class="PageReadableBlue"><p>Question 26a<br />
Using all the information from the subjective interview, did you identify any cautions for the objective physical assessment?</p>
<input type="radio" name="OPACaution" value="Yes">Yes<br />
<input type="radio" name="OPACaution" value="No">No<br /></div>

<div class="PageReadableBlue"><p>Question 26b<br />
Using all the information from the subjective interview, did you identify any precautions for the objective physical assessment?</p>
<input type="radio" name="OPAPreCaution" value="Yes">Yes<br />
<input type="radio" name="OPAPreCaution" value="No">No<br /></div>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2e.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($OPACaution) && ($OPACaution!="")) ||
   (isset($OPAPreCaution) && ($OPAPreCaution!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2d Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if (isset($OPACaution) && ($OPACaution!="")) {
$fOutputText = "<strong><p>Question 26a</p>";


$fOutputText .= "<div class=\"";

if (isset($OPACaution) && $OPACaution=="Yes") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Cautions and Precautions’.";}

if (isset($OPACaution) && $OPACaution=="No") {	
		$fOutputText .= "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no cautions identified in the subjective interview.";}
	
	
$fOutputText .= "\">";
$fOutputText .= "<p>$FeedBack</p></div></strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$OPACaution = "";
$FeedBack="";}

if (isset($OPAPreCaution) && ($OPAPreCaution!="")) {
$fOutputText = "<strong><p>Question 26b</p>";


$fOutputText .= "<div class=\"";

if (isset($OPAPreCaution) && $OPAPreCaution=="Yes") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Yes - Well done - this is the correct answer - there were clearly some aggravating factors.";}

if (isset($OPAPreCaution) && $OPAPreCaution=="No") {	
		$fOutputText .= "PageReadableBrightRed";
		$FeedBack = "X No – please reconsider your answer referring to the information on ‘Red Flags’.";}
	
	
$fOutputText .= "\">";
$fOutputText .= "<p>$FeedBack</p></div></strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$OPAPreCaution = "";
$FeedBack="";}

fclose($fp);

?>
</body>
</html>