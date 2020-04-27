<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<title>Section 2g - Prioritise</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel= $tMust = $tShould = $tCould = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$tMust = test_input($_POST["tMust"]);
	$tShould = test_input($_POST["tShould"]);
	$tCould = test_input($_POST["tCould"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2g.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2g: Prioritise</h2>

<p>Prioritise For all of the tests you have chosen to perform - identify which are the most important and which are the least important by placing them in each of these columns.</p></div>

<table border="1">
<tr>
<td>Must</td>
<td>Should</td>
<td>Could</td>
</tr>
<tr>
<td><textarea id="tMust" name="tMust" rows="5" cols="30">

</textarea></td>
<td><textarea id="tShould" name="tShould" rows="5" cols="30">

</textarea></td>
<td><textarea id="tCould" name="tCould" rows="5" cols="30">

</textarea></td>
</tr>
</table>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2h.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($tMust) && ($tMust!="")) ||
     (isset($tShould) && ($tShould!="")) ||
     (isset($tCould) && ($tCould!=""))) {
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2g: Prioritise\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

// End of feedback code.

if ((isset($tMust) && ($tMust!="")) ||
     (isset($tShould) && ($tShould!="")) ||
     (isset($tCould) && ($tCould!=""))) {

$fOutputText = "<p><strong><table border=\"";
$fOutputText .= "1\"";
$fOutputText .= "><th colspan=\"";
$fOutputText .= "3\"";
$fOutputText .= ">Section 2g - Prioritise</th><tr><td>Must</td><td>Should</td><td>Could</td></tr><tr><td>$tMust</td><td>$tShould</td>";
$fOutputText .= "<td>$tCould</td></tr></table></strong></p>";
$tMust="";
$tShould="";
$tCould="";

echo $fOutputText;
fwrite($fp, $fOutputText);
}

fclose($fp);
?>
</body>
</html>