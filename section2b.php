<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Section 2b - Flags</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel= $RedFlag = $YellowFlag = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	$RedFlag = test_input($_POST["RedFlag"]);
	$YellowFlag = test_input($_POST["YellowFlag"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2b.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2b: Flags</h2>
<p>Question 23: Use this link to read more about Red Flags.</p></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/Red Flags.ppt" target="_blank">Red Flags</a>]</strong></div></p>
<div class="PageReadableBlue"><p>Question 23<br />
Using all the information from the subjective interview, did you identify any red flags?</p>
<input type="radio" name="RedFlag" value="Yes">Yes<br />
<input type="radio" name="RedFlag" value="No">No<br /></div>


<div class="PageReadableBlue">
<p>Question 24: Use this link to read more about Yellow Flags.</p></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/Yellow Flags.ppt" target="_blank">Yellow Flags</a>]</strong></div></p>
<div class="PageReadableBlue">Using all the information from the subjective interview, did you identify any yellow flags?</p>
<input type="radio" name="YellowFlag" value="Yes">Yes<br />
<input type="radio" name="YellowFlag" value="No">No<br /></div>



<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2c.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($RedFlag) && ($RedFlag!="")) ||
   (isset($YellowFlag) && ($YellowFlag!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2b Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if (isset($RedFlag) && ($RedFlag!="")) {
$fOutputText = "<strong><p>Question 23</p>";

$fOutputText .= "<div class=\"";

if (isset($RedFlag) && $RedFlag=="Yes") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Red Flags’.";}

if (isset($RedFlag) && $RedFlag=="No") {	
		$fOutputText .= "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no red flags identified in the subjective interview.";}
	
	
$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div></strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
$RedFlag = "";
$FeedBack="";}

if (isset($YellowFlag) && ($YellowFlag!="")) {
$fOutputText = "<strong><p>Question 24</p>";

$fOutputText .= "<div class=\"";

if (isset($YellowFlag) && $YellowFlag=="Yes") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Yellow Flags’.";}

if (isset($YellowFlag) && $YellowFlag=="No") {	
		$fOutputText .= "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no yellow flags identified in the subjective interview.";}
	
	
$fOutputText .= "\">";
$fOutputText .= "<p>$FeedBack</p></div></strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);

$YellowFlag = "";
$FeedBack="";}
fclose($fp);
?>
</body>
</html>