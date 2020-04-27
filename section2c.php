<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Section 2c - Prognosis</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel=  $Prognosis = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	$Prognosis = test_input($_POST["Prognosis"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2c.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2c: Prognosis</h2>
<p>Use this link to read more about deciding on a prognosis.</p></div>
<div class="PageReadableBlack"><strong>[<a href="prognosis.html" target="_blank">Prognosis</a>]</strong></div></p>
<div class="PageReadableBlue"><p>Question 25<br />
Identifiy the prognosis for the condition based on the information you have so far:</p>
<input type="radio" name="Prognosis" value="Improving">Improving<br />
<input type="radio" name="Prognosis" value="Static">Static<br />
<input type="radio" name="Prognosis" value="Worsening">Worsening<br /></div>


<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2d.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if (isset($Prognosis) && ($Prognosis!="")){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2c Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.


if (isset($Prognosis) && ($Prognosis!="")) {
$fOutputText = "<strong><p>Question 23</p>";


$fOutputText .= "<div class=\"";

if (isset($Prognosis) && $Prognosis=="Improving") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack .= "X Improving - please reconsider your answer referring to the information on 'Condition progression'.";}

if (isset($Prognosis) && $Prognosis=="Static") {	
		$fOutputText .= "PageReadableBrightGreen";
		$FeedBack = "√ Static - Well done - this is the correct answer.";}

if (isset($Prognosis) && $Prognosis=="Worsening") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Worsening - please reconsider your answer referring to the information on 'Condition progression'.";}		
	
$fOutputText .= "\">";
$fOutputText .= "<p>$FeedBack</p></div></strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);

$Prognosis = "";
$FeedBack="";}
fclose($fp);

?>
</body>
</html>