<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<title>Section 2i - Order The Tests</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$FeedBack = $FeedBackLabel = "";

$tOrder1 = $tTest1 = $tPosition1 = $tOrder2 = $tTest2 = $tPosition2 = $tOrder3 = $tTest3 = $tPosition3 = $tOrder4 = $tTest4 = $tPosition4 = "";
$tOrder5 = $tTest5 = $tPosition5 = $tOrder6 = $tTest6 = $tPosition6 = $tOrder7 = $tTest7 = $tPosition7 = $tOrder8 = $tTest8 = $tPosition8 = "";
$tOrder9 = $tTest9 = $tPosition9 = $tOrder10 = $tTest10 = $tPosition10 = $tOrder11 = $tTest11 = $tPosition11 = $tOrder12 = $tTest12 = $tPosition12 = "";
$tOrder13 = $tTest13 = $tPosition13 = $tOrder14 = $tTest14 = $tPosition14 = $tOrder15 = $tTest15 = $tPosition15 = $tOrder16 = $tTest16 = $tPosition16 = "";
$tOrder17 = $tTest17 = $tPosition17 = $tOrder18 = $tTest18 = $tPosition18 = $tOrder19 = $tTest19 = $tPosition19 = $tOrder20 = $tTest20 = $tPosition20 = "";
$tOrder21 = $tTest21 = $tPosition21 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	$tOrder1 = test_input($_POST["tOrder1"]);
	$tTest1 = test_input($_POST["tTest1"]);
	$tPosition1 = test_input($_POST["tPosition1"]);
	$tOrder2 = test_input($_POST["tOrder2"]);
	$tTest2 = test_input($_POST["tTest2"]);
	$tPosition2 = test_input($_POST["tPosition2"]);
	$tOrder3 = test_input($_POST["tOrder3"]);
	$tTest3 = test_input($_POST["tTest3"]);
	$tPosition3 = test_input($_POST["tPosition3"]);
	$tOrder4 = test_input($_POST["tOrder4"]);
	$tTest4 = test_input($_POST["tTest4"]);
	$tPosition4 = test_input($_POST["tPosition4"]);
	$tOrder5 = test_input($_POST["tOrder5"]);
	$tTest5 = test_input($_POST["tTest5"]);
	$tPosition5 = test_input($_POST["tPosition5"]);
	$tOrder6 = test_input($_POST["tOrder6"]);
	$tTest6 = test_input($_POST["tTest6"]);
	$tPosition6 = test_input($_POST["tPosition6"]);
	$tOrder7 = test_input($_POST["tOrder7"]);
	$tTest7 = test_input($_POST["tTest7"]);
	$tPosition7 = test_input($_POST["tPosition7"]);
	$tOrder8 = test_input($_POST["tOrder8"]);
	$tTest8 = test_input($_POST["tTest8"]);
	$tPosition8 = test_input($_POST["tPosition8"]);
	$tOrder9 = test_input($_POST["tOrder9"]);
	$tTest9 = test_input($_POST["tTest9"]);
	$tPosition9 = test_input($_POST["tPosition9"]);
	$tOrder10 = test_input($_POST["tOrder10"]);
	$tTest10 = test_input($_POST["tTest10"]);
	$tPosition10 = test_input($_POST["tPosition10"]);
	$tOrder11 = test_input($_POST["tOrder11"]);
	$tTest11 = test_input($_POST["tTest11"]);
	$tPosition11 = test_input($_POST["tPosition11"]);
	$tOrder12 = test_input($_POST["tOrder12"]);
	$tTest12 = test_input($_POST["tTest12"]);
	$tPosition12 = test_input($_POST["tPosition12"]);
	$tOrder13 = test_input($_POST["tOrder13"]);
	$tTest13 = test_input($_POST["tTest13"]);
	$tPosition13 = test_input($_POST["tPosition13"]);
	$tOrder14 = test_input($_POST["tOrder14"]);
	$tTest14 = test_input($_POST["tTest14"]);
	$tPosition14 = test_input($_POST["tPosition14"]);
	$tOrder15 = test_input($_POST["tOrder15"]);
	$tTest15 = test_input($_POST["tTest15"]);
	$tPosition15 = test_input($_POST["tPosition15"]);
	$tOrder16 = test_input($_POST["tOrder16"]);
	$tTest16 = test_input($_POST["tTest16"]);
	$tPosition16 = test_input($_POST["tPosition16"]);
	$tOrder17 = test_input($_POST["tOrder17"]);
	$tTest17 = test_input($_POST["tTest17"]);
	$tPosition17 = test_input($_POST["tPosition17"]);
	$tOrder18 = test_input($_POST["tOrder18"]);
	$tTest18 = test_input($_POST["tTest18"]);
	$tPosition18 = test_input($_POST["tPosition18"]);
	$tOrder19 = test_input($_POST["tOrder19"]);
	$tTest19 = test_input($_POST["tTest19"]);
	$tPosition19 = test_input($_POST["tPosition19"]);
	$tOrder20 = test_input($_POST["tOrder20"]);
	$tTest20 = test_input($_POST["tTest20"]);
	$tPosition20 = test_input($_POST["tPosition20"]);
	$tOrder21 = test_input($_POST["tOrder21"]);
	$tTest21 = test_input($_POST["tTest21"]);
	$tPosition21 = test_input($_POST["tPosition21"]);	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2i.</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue"><h2>Section 2i: Order The Tests</h2>
<p>Consider these points...</p>
<ol>
<li>How many times the person will need to change position during the assessment. Try to group all the tests performed in each position to minimise this.</li>
<li>Do you reproduce the tests early in the assessment to minimise the number of tests? </li>
<li>Do you perform the least aggravating tests first to allow you to ‘clear’ areas prior to performing any test you know will aggravate the symptoms? This will likely reduce the number of false positive tests?</li>
</ol></div>

<table border="1">
<tr>
<td>Order</td>
<td>Test</td>
<td>Position</td>
</tr>
<tr>
<td><textarea id="tOrder1" name="tOrder1" rows="1" cols="30">01

</textarea></td>
<td><textarea id="tTest1" name="tTest1" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition1" name="tPosition1" rows="1" cols="30">

</textarea></td>
</tr>
<tr>
<td><textarea id="tOrder2" name="tOrder2" rows="1" cols="30">02

</textarea></td>
<td><textarea id="tTest2" name="tTest2" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition2" name="tPosition2" rows="1" cols="30">
</textarea></td>
</tr>
<tr>

<td><textarea id="tOrder3" name="tOrder3" rows="1" cols="30">03

</textarea></td>
<td><textarea id="tTest3" name="tTest3" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition3" name="tPosition3" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder4" name="tOrder4" rows="1" cols="30">04

</textarea></td>
<td><textarea id="tTest4" name="tTest4" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition4" name="tPosition4" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder5" name="tOrder5" rows="1" cols="30">05

</textarea></td>
<td><textarea id="tTest5" name="tTest5" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition5" name="tPosition5" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder6" name="tOrder6" rows="1" cols="30">06

</textarea></td>
<td><textarea id="tTest6" name="tTest6" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition6" name="tPosition6" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder7" name="tOrder7" rows="1" cols="30">07

</textarea></td>
<td><textarea id="tTest7" name="tTest7" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition7" name="tPosition7" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder8" name="tOrder8" rows="1" cols="30">08

</textarea></td>
<td><textarea id="tTest8" name="tTest8" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition8" name="tPosition8" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder9" name="tOrder9" rows="1" cols="30">09

</textarea></td>
<td><textarea id="tTest9" name="tTest9" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition9" name="tPosition9" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder10" name="tOrder10" rows="1" cols="30">10

</textarea></td>
<td><textarea id="tTest10" name="tTest10" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition10" name="tPosition10" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder11" name="tOrder11" rows="1" cols="30">11

</textarea></td>
<td><textarea id="tTest11" name="tTest11" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition11" name="tPosition11" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder12" name="tOrder12" rows="1" cols="30">12

</textarea></td>
<td><textarea id="tTest12" name="tTest12" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition12" name="tPosition12" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder13" name="tOrder13" rows="1" cols="30">13

</textarea></td>
<td><textarea id="tTest13" name="tTest13" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition13" name="tPosition13" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder14" name="tOrder14" rows="1" cols="30">14

</textarea></td>
<td><textarea id="tTest14" name="tTest14" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition14" name="tPosition14" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder15" name="tOrder15" rows="1" cols="30">15

</textarea></td>
<td><textarea id="tTest15" name="tTest15" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition15" name="tPosition15" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder16" name="tOrder16" rows="1" cols="30">16

</textarea></td>
<td><textarea id="tTest16" name="tTest16" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition16" name="tPosition16" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder17" name="tOrder17" rows="1" cols="30">17

</textarea></td>
<td><textarea id="tTest17" name="tTest17" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition17" name="tPosition17" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder18" name="tOrder18" rows="1" cols="30">18

</textarea></td>
<td><textarea id="tTest18" name="tTest18" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition18" name="tPosition18" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder19" name="tOrder19" rows="1" cols="30">19

</textarea></td>
<td><textarea id="tTest19" name="tTest19" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition19" name="tPosition19" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder20" name="tOrder20" rows="1" cols="30">20

</textarea></td>
<td><textarea id="tTest20" name="tTest20" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition20" name="tPosition20" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder21" name="tOrder21" rows="1" cols="30">21

</textarea></td>
<td><textarea id="tTest21" name="tTest21" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition21" name="tPosition21" rows="1" cols="30"></textarea></td>
</tr>

</table>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section3.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($tOrder1) && ($tOrder1!="")) ||
     (isset($tTest1) && ($tTest1!="")) ||
     (isset($tPosition1) && ($tPosition1!=""))) {
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2i: Order The Tests\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.



if ((isset($tOrder1) && ($tOrder1!="")) ||
     (isset($tTest1) && ($tTest1!="")) ||
     (isset($tPosition1) && ($tPosition1!=""))) {
$fOutputText = "<p>";
$fOutputText .= "<table border=\"";
$fOutputText .= "1\"";
$fOutputText .= "><tr><td>Order</td><td>Test</td><td>Position</td></tr>";

$fOutputText .= "<tr><td>$tOrder1</td><td>$tTest1</td><td>$tPosition1</td></tr>";
$tOrder1="";
$tTest1="";
$tPosition1="";

$fOutputText .= "<tr><td>$tOrder2</td><td>$tTest2</td><td>$tPosition2</td></tr>";
$tOrder2="";
$tTest2="";
$tPosition2="";

$fOutputText .= "<tr><td>$tOrder3</td><td>$tTest3</td><td>$tPosition3</td></tr>";
$tOrder3="";
$tTest3="";
$tPosition3="";

$fOutputText .= "<tr><td>$tOrder4</td><td>$tTest4</td><td>$tPosition4</td></tr>";
$tOrder4="";
$tTest4="";
$tPosition4="";

$fOutputText .= "<tr><td>$tOrder5</td><td>$tTest5</td><td>$tPosition5</td></tr>";
$tOrder5="";
$tTest5="";
$tPosition5="";

$fOutputText .= "<tr><td>$tOrder6</td><td>$tTest6</td><td>$tPosition6</td></tr>";
$tOrder6="";
$tTest6="";
$tPosition6="";

$fOutputText .= "<tr><td>$tOrder7</td><td>$tTest7</td><td>$tPosition7</td></tr>";
$tOrder7="";
$tTest7="";
$tPosition7="";

$fOutputText .= "<tr><td>$tOrder8</td><td>$tTest8</td><td>$tPosition8</td></tr>";
$tOrder8="";
$tTest8="";
$tPosition8="";

$fOutputText .= "<tr><td>$tOrder9</td><td>$tTest9</td><td>$tPosition9</td></tr>";
$tOrder9="";
$tTest9="";
$tPosition9="";

$fOutputText .= "<tr><td>$tOrder10</td><td>$tTest10</td><td>$tPosition10</td></tr>";
$tOrder10="";
$tTest10="";
$tPosition10="";

$fOutputText .= "<tr><td>$tOrder11</td><td>$tTest11</td><td>$tPosition11</td></tr>";
$tOrder11="";
$tTest11="";
$tPosition11="";

$fOutputText .= "<tr><td>$tOrder12</td><td>$tTest12</td><td>$tPosition12</td></tr>";
$tOrder12="";
$tTest12="";
$tPosition12="";

$fOutputText .= "<tr><td>$tOrder13</td><td>$tTest13</td><td>$tPosition13</td></tr>";
$tOrder13="";
$tTest13="";
$tPosition13="";

$fOutputText .= "<tr><td>$tOrder14</td><td>$tTest14</td><td>$tPosition14</td></tr>";
$tOrder14="";
$tTest14="";
$tPosition14="";

$fOutputText .= "<tr><td>$tOrder15</td><td>$tTest15</td><td>$tPosition15</td></tr>";
$tOrder15="";
$tTest15="";
$tPosition15="";

$fOutputText .= "<tr><td>$tOrder16</td><td>$tTest16</td><td>$tPosition16</td></tr>";
$tOrder16="";
$tTest16="";
$tPosition16="";

$fOutputText .= "<tr><td>$tOrder17</td><td>$tTest17</td><td>$tPosition17</td></tr>";
$tOrder17="";
$tTest17="";
$tPosition17="";

$fOutputText .= "<tr><td>$tOrder18</td><td>$tTest18</td><td>$tPosition18</td></tr>";
$tOrder18="";
$tTest18="";
$tPosition18="";

$fOutputText .= "<tr><td>$tOrder19</td><td>$tTest19</td><td>$tPosition19</td></tr>";
$tOrder19="";
$tTest19="";
$tPosition19="";

$fOutputText .= "<tr><td>$tOrder20</td><td>$tTest20</td><td>$tPosition20</td></tr>";
$tOrder20="";
$tTest20="";
$tPosition20="";

$fOutputText .= "<tr><td>$tOrder21</td><td>$tTest21</td><td>$tPosition21</td></tr>";
$tOrder21="";
$tTest21="";
$tPosition21="";

$fOutputText .= "</table></p><br />";

echo $fOutputText;
fwrite($fp, $fOutputText);

}

fclose($fp);

?>
</body>
</html>