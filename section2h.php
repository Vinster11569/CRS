<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<title>Section 2h - Position</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel= $tStanding = $tSitting = $tLying = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    
	$tStanding = test_input($_POST["tStanding"]);
	$tSitting = test_input($_POST["tSitting"]);
	$tLying = test_input($_POST["tLying"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2h.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2h: Position</h2>
<p>Consider what position the person will be in for each of the tests.</p></div>

<table  border="1">
<tr>
<td>Standing</td>
<td>Sitting</td>
<td>Lying</td>
</tr>
<tr>
<td><textarea id="tStanding" name="tStanding" rows="5" cols="30">

</textarea></td>
<td><textarea id="tSitting" name="tSitting" rows="5" cols="30">

</textarea></td>
<td><textarea id="tLying" name="tLying" rows="5" cols="30">

</textarea></td>
</tr>
</table>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2i.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($tStanding) && ($tStanding!="")) ||
   (isset($tSitting) && ($tSitting!="")) ||
   (isset($tLying) && ($tLying!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2h: Position\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.


if ((isset($tStanding) && ($tStanding!="")) ||
   (isset($tSitting) && ($tSitting!="")) ||
   (isset($tLying) && ($tLying!=""))){
   
$fOutputText = "<p><strong><table border=\"";
$fOutputText .= "1\"";
$fOutputText .= "><th colspan=\"";
$fOutputText .= "3\"";
$fOutputText .= ">Section 2h - Position</th><tr><td>Standing</td><td>Sitting</td><td>Lying</td></tr><tr><td>$tStanding</td>";
$fOutputText .= "<td>$tSitting</td><td>$tLying</td></tr></table></strong></p>";

echo $fOutputText;
fwrite($fp, $fOutputText);

$tStanding="";
$tSitting="";
$tLying="";}

fclose($fp);

?>
</body>
</html>