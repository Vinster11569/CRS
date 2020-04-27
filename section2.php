<!DOCTYPE HTML>  
<html>
<head>
<title>Clinical Reasoning Tool</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values

$AggPlan = $WhichTests = $Inflammatory = $Mechanical = $Pain = $Resistance = $FeedBack = $FeedBackLabel= $HiddenText ="";
$SIN1 = $SIN2 = $SIN3 = $SIN4 =  $Irritability1 = $Irritability2 = $Irritability3 = $Irritability4 =  "";
$Arthrogenic = $Myogenic = $Vasculogenic = $Neurogenic = $RedFlag = $YellowFlag = $Prognosis = $OPACaution = $OPAPreCaution = "";
$tMust = $tShould = $tCould = $tStanding = $tSitting = $tLying = "";

$tOrder1 = $tTest1 = $tPosition1 = $tOrder2 = $tTest2 = $tPosition2 = $tOrder3 = $tTest3 = $tPosition3 = $tOrder4 = $tTest4 = $tPosition4 = "";
$tOrder5 = $tTest5 = $tPosition5 = $tOrder6 = $tTest6 = $tPosition6 = $tOrder7 = $tTest7 = $tPosition7 = $tOrder8 = $tTest8 = $tPosition8 = "";
$tOrder9 = $tTest9 = $tPosition9 = $tOrder10 = $tTest10 = $tPosition10 = $tOrder11 = $tTest11 = $tPosition11 = $tOrder12 = $tTest12 = $tPosition12 = "";
$tOrder13 = $tTest13 = $tPosition13 = $tOrder14 = $tTest14 = $tPosition14 = $tOrder15 = $tTest15 = $tPosition15 = $tOrder16 = $tTest16 = $tPosition16 = "";
$tOrder17 = $tTest17 = $tPosition17 = $tOrder18 = $tTest18 = $tPosition18 = $tOrder19 = $tTest19 = $tPosition19 = $tOrder20 = $tTest20 = $tPosition20 = "";
$tOrder21 = $tTest21 = $tPosition21 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $HiddenText="PageReadableWhite";
	$SIN1 = test_input($_POST["SIN1"]);
	$SIN2 = test_input($_POST["SIN2"]);
	$SIN3 = test_input($_POST["SIN3"]);
	$SIN4 = test_input($_POST["SIN4"]);
	$Irritability1 = test_input($_POST["Irritability1"]);
	$Irritability2 = test_input($_POST["Irritability2"]);
	$Irritability3 = test_input($_POST["Irritability3"]);
	$Irritability4 = test_input($_POST["Irritability4"]);
    $Inflammatory = test_input($_POST["Inflammatory"]);
    $Mechanical = test_input($_POST["Mechanical"]);
	$Pain = test_input($_POST["Pain"]);
	$Resistance = test_input($_POST["Resistance"]);
	$Arthrogenic = test_input($_POST["Arthrogenic"]);
	$Myogenic = test_input($_POST["Myogenic"]);
	$Vasculogenic = test_input($_POST["Vasculogenic"]);
	$Neurogenic = test_input($_POST["Neurogenic"]);
    $RedFlag = test_input($_POST["RedFlag"]);
	$YellowFlag = test_input($_POST["YellowFlag"]);
	$Prognosis = test_input($_POST["Prognosis"]);
	$OPACaution = test_input($_POST["OPACaution"]);
	$OPAPreCaution = test_input($_POST["OPAPreCaution"]);
	$AggPlan = test_input($_POST["AggPlan"]);
	$WhichTests = test_input($_POST["WhichTests"]);
	$tMust = test_input($_POST["tMust"]);
	$tShould = test_input($_POST["tShould"]);
	$tCould = test_input($_POST["tCould"]);
	$tStanding = test_input($_POST["tStanding"]);
	$tSitting = test_input($_POST["tSitting"]);
	$tLying = test_input($_POST["tLying"]);
	
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
	$tPosition21 = test_input($_POST["tPosition21"]);
	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2.</h1>

<div class="PageReadableBlue"><p>You should how have collected a comprehensive subjective history for Mrs Andrews.</p>
<p>Consider the information you have collected on the assessment form and the ideas gathered from the multiple choice questions. Try to pull all the different ideas together to formulate an overall impression as you work through the clinical reasoning form.</p></div>

<img src="./images/lightbulb.jpg" alt="Light Bulb Icon" />

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue">
<h2>Section 2: Planning</h2>
<h2>Section 2a: Generating a SIN factor</h2>
<p>Question 22: Use this link to read more about generating a SIN factor.</p></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 22a</p>
<p>Using all of the information from the subjective interview, estimate the overall severity of Mrs Andrew's condition:</p>

<input type="checkbox" name="SIN1" value="Non Painful">Non Painful<br />
<input type="checkbox" name="SIN2" value="Mild">Mild<br />
<input type="checkbox" name="SIN3" value="Moderate">Moderate<br />
<input type="checkbox" name="SIN4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 22b</p>
<p>Using all of the information from the subjective interview, estimate the overall irritability of Mrs Andrew's condition:</p>

<input type="checkbox" name="Irritability1" value="Non Irritable">Non Irritable<br />
<input type="checkbox" name="Irritability2" value="Mild">Mild<br />
<input type="checkbox" name="Irritability3" value="Moderate">Moderate<br />
<input type="checkbox" name="Irritability4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 22c</p>
<p>Using all of the information from the subjective interview, estimate, using a percentage, the overall nature of Mrs Andrew's condition (Please just type the percentages as numbers in the boxes):<br />
Question 22ci<br />
With reference to the overall inflammatory - mechanical nature</p>
<p>Inflammatory&nbsp;<input type="text" size="3" name="Inflammatory" />&nbsp;%<br />
Mechanical&nbsp;<input type="text" size="3" name="Mechanical" />&nbsp;%<br /></p></div>


<div class="PageReadableBlue">Question 22cii<br />
With reference to the overall limiting nature</p>
<p>Pain&nbsp;<input type="text" size="3" name="Pain" />&nbsp;%<br />
Resistance&nbsp;<input type="text" size="3" name="Resistance" />&nbsp;%<br /></p></div>

<div class="PageReadableBlue">Question 22ciii<br />
With reference to the overall structural nature</p>
<p>Arthrogenic&nbsp;<input type="text" size="3" name="Arthrogenic" />&nbsp;%<br />
Myogenic&nbsp;<input type="text" size="3" name="Myogenic" />&nbsp;%<br />
Vasculogenic&nbsp;<input type="text" size="3" name="Vasculogenic" />&nbsp;%<br />
Neurogenic&nbsp;<input type="text" size="3" name="Neurogenic" />&nbsp;%<br /></p></div>

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

<div class="PageReadableBlue"><h2>Section 2c: Prognosis</h2>
<p>Use this link to read more about deciding on a prognosis.</p></div>
<div class="PageReadableBlack"><strong>[<a href="prognosis.html" target="_blank">Prognosis</a>]</strong></div></p>
<div class="PageReadableBlue"><p>Question 25<br />
Identifiy the prognosis for the condition based on the information you have so far:</p>
<input type="radio" name="Prognosis" value="Improving">Improving<br />
<input type="radio" name="Prognosis" value="Static">Static<br />
<input type="radio" name="Prognosis" value="Worsening">Worsening<br /></div>

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

<div class="PageReadableBlue"><h2>Section 2e: Aggravating Tests</h2>
<p>Write down which objective physcial tests are most likely to aggravate the physical symptoms.</p></div>
Type your thoughts here.
<p><textarea id="AggPlan" name="AggPlan" rows="5" cols="100">

</textarea></p>

<div class="PageReadableBlue"><h2>Section 2f: Which Tests?</h2>
<img src="./images/lightbulb.jpg" alt="Light Bulb Icon" />
<p>Write a plan for the objective physical assessment.</p></div>
Type your thoughts here.
<p><textarea id="WhichTests" name="WhichTests" rows="5" cols="100">

</textarea></p>

<div class="PageReadableBlue"><h2>Objective Physical Assesment</h2>

<p>Remember to consider the SIN factor as you choose which tests you would want to include in the physical assessment.</p></div>

<div class="PageReadableBlack">[<a href="opa.php" target="_blank">Objective Physical Assessment</a>] <em>(This page will open in a new window, so you can return back here once completed.)</em></div>

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

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$FeedBackLabel = "Your Feedback:";
}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
echo "<h2>";
echo $FeedBackLabel;
echo "</h2>";
// End of feedback code.

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
echo "<p>";
echo "<strong>";
echo "Question 22a";
echo "</p>";}

if (isset($SIN1) && $SIN1=="Non Painful") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘SIN’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($SIN2) && $SIN2=="Mild") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
    $FeedBack = "X Mild – please reconsider your answer referring to the information on ‘SIN’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($SIN3) && $SIN3=="Moderate") {
    echo "<div class=\"";
	echo "PageReadableBrightGreen";
	$FeedBack = "√ Moderate – well done – this is the correct answer.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($SIN4) && $SIN4=="Severe") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘SIN’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}

echo "</strong>";
$SIN1 = "";
$SIN2 = "";
$SIN3 = "";
$SIN4 = "";
$FeedBack="";

if ((isset($Irritability1) && ($Irritability1!="")) ||
   (isset($Irritability2) && ($Irritability2!="")) ||
   (isset($Irritability3) && ($Irritability3!="")) ||
   (isset($Irritability4) && ($Irritability4!=""))){
echo "<p>";
echo "<strong>";
echo "Question 22b";
echo "</p>";}

if (isset($Irritability1) && $Irritability1=="Non Irritable") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($Irritability2) && $Irritability2=="Mild") {
    echo "<div class=\"";	
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($Irritability3) && $Irritability3=="Moderate") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘Description of Pain’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($Irritability4) && $Irritability4=="Severe") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	

echo "</strong>";
$Irritability1 = "";
$Irritability2 = "";
$Irritability3 = "";
$Irritability4 = "";
$FeedBack="";
echo "</p>";

if (($Inflammatory!="") && ($Mechanical!="")) {
echo "<p>";
echo "<strong>";
echo "Question 22c1";
echo "</p>";

    echo "<div class=\"";
	if ($Inflammatory=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Inflammatory 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";

	
    echo "<div class=\"";
	if ($Mechanical=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Mechanical 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";
	
echo "</strong>";
$Inflammatory = "";
$Mechanical = "";
$FeedBack="";
echo "</p>";}
if (($Pain!="") && ($Resistance!="")) {
echo "<p>";
echo "<strong>";
echo "Question 22c2";
echo "</p>";

    echo "<div class=\"";
	if ($Pain=="60") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Pain 60% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Pain 60%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";

    echo "<div class=\"";
	if ($Resistance=="40") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Resistance 40% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Resistance 40%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";

echo "</strong>";
$Pain = "";
$Resistance = "";
$FeedBack="";
echo "</p>";}
if (($Arthrogenic!="") && ($Myogenic!="") && ($Vasculogenic!="") && ($Neurogenic!="")) {
echo "<p>";
echo "<strong>";
echo "Question 22c3";
echo "</p>";

    
	echo "<div class=\"";
	if ($Arthrogenic=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Arthrogenic 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Arthrogenic 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";	

    echo "<div class=\"";
	if ($Myogenic=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Myogenic 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Myogenic 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";	

    echo "<div class=\"";
	if ($Vasculogenic=="0") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Vasculogenic 0% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Vasculogenic 0%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";	

    echo "<div class=\"";
	if ($Neurogenic=="0") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√  % – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Neurogenic 0%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";
	
	echo "</strong>";
$Arthrogenic = "";
$Myogenic = "";
$Vasculogenic = "";
$Neurogenic = "";
$FeedBack="";}


if (isset($RedFlag) && ($RedFlag!="")) {
echo "<p>";
echo "<strong>";
echo "Question 23";
//echo $RedFlag;
echo "</p>";}


echo "<div class=\"";

if (isset($RedFlag) && $RedFlag=="Yes") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Red Flags’.";}

if (isset($RedFlag) && $RedFlag=="No") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no red flags identified in the subjective interview.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$RedFlag = "";
$FeedBack="";



if (isset($YellowFlag) && ($YellowFlag!="")) {
echo "<p>";
echo "<strong>";
echo "Question 24";
//echo $YellowFlag;
echo "</p>";}


echo "<div class=\"";

if (isset($YellowFlag) && $YellowFlag=="Yes") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Yellow Flags’.";}

if (isset($YellowFlag) && $YellowFlag=="No") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no yellow flags identified in the subjective interview.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$YellowFlag = "";
$FeedBack="";


if (isset($Prognosis) && ($Prognosis!="")) {
echo "<p>";
echo "<strong>";
echo "Question 25";
//echo $Prognosis;
echo "</p>";}


echo "<div class=\"";

if (isset($Prognosis) && $Prognosis=="Improving") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Improving - please reconsider your answer referring to the information on 'Condition progression'.";}

if (isset($Prognosis) && $Prognosis=="Static") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ Static - Well done - this is the correct answer.";}

if (isset($Prognosis) && $Prognosis=="Worsening") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Worsening - please reconsider your answer referring to the information on 'Condition progression'.";}		
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$Prognosis = "";
$FeedBack="";

if (isset($OPACaution) && ($OPACaution!="")) {
echo "<p>";
echo "<strong>";
echo "Question 26a";
//echo $OPACaution;
echo "</p>";}


echo "<div class=\"";

if (isset($OPACaution) && $OPACaution=="Yes") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Cautions and Precautions’.";}

if (isset($OPACaution) && $OPACaution=="No") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no cautions identified in the subjective interview.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$OPACaution = "";
$FeedBack="";

if (isset($OPAPreCaution) && ($OPAPreCaution!="")) {
echo "<p>";
echo "<strong>";
echo "Question 26b";
//echo $OPAPreCaution;
echo "</p>";}


echo "<div class=\"";

if (isset($OPAPreCaution) && $OPAPreCaution=="Yes") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ No - Well done - this is the correct answer - there were clearly some aggravating factors.";}

if (isset($OPAPreCaution) && $OPAPreCaution=="No") {	
		echo "PageReadableBrightRed";
		$FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Red Flags’.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$OPAPreCaution = "";
$FeedBack="";

if ($AggPlan!="") {
echo "<p>";
echo "<strong>";
echo "Section 2e";
echo "<br />";
echo $AggPlan;
echo "</strong>";
$AggPlan = "";
echo "</p>";}

if ($WhichTests!="") {
echo "<p>";
echo "<strong>";
echo "Section 2f";
echo "<br />";
echo $WhichTests;
echo "</strong>";
$WhichTests = "";
echo "</p>";}


   
   
   
if ((isset($tMust) && ($tMust!="")) ||
     (isset($tShould) && ($tShould!="")) ||
     (isset($tCould) && ($tCould!=""))) {

echo "<p>";
echo "<strong>";
echo "<table border=\"";
echo "1\"";
	 echo ">";
echo "<th colspan=\"";
echo "3\"";
echo ">Section 2g - Prioritise</th>";
echo "<tr>";
echo "<td>Must</td>";
echo "<td>Should</td>";
echo "<td>Could</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo $tMust;
echo "</td>";
echo "<td>";
echo $tShould;
echo "</td>";
echo "<td>";
echo $tCould;
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</strong>";
echo "</p>";
$tMust="";
$tShould="";
$tCould="";}


if ((isset($tStanding) && ($tStanding!="")) ||
   (isset($tSitting) && ($tSitting!="")) ||
   (isset($tLying) && ($tLying!=""))){
   
echo "<p>";
echo "<strong>";
echo "<table border=\"";
echo "1\"";
echo ">";
echo "<th colspan=\"";
echo "3\"";
echo ">Section 2h - Position</th>";
echo "<tr>";
echo "<td>Standing</td>";
echo "<td>Sitting</td>";
echo "<td>Lying</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo $tStanding;
echo "</td>";
echo "<td>";
echo $tSitting;
echo "</td>";
echo "<td>";
echo $tLying;
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</strong>";
echo "</p>";
$tStanding="";
$tSitting="";
$tLying="";}

if ((isset($tOrder1) && ($tOrder1!="")) ||
     (isset($tTest1) && ($tTest1!="")) ||
     (isset($tPosition1) && ($tPosition1!=""))) {
echo "<p>";
echo "<table border=\"";
echo "1\"";
echo "><tr><td>Order</td><td>Test</td><td>Position</td></tr>";

echo "<tr><td>$tOrder1</td><td>$tTest1</td><td>$tPosition1</td></tr>";
$tOrder1="";
$tTest1="";
$tPosition1="";

echo "<tr><td>$tOrder2</td><td>$tTest2</td><td>$tPosition2</td></tr>";
$tOrder2="";
$tTest2="";
$tPosition2="";

echo "<tr><td>$tOrder3</td><td>$tTest3</td><td>$tPosition3</td></tr>";
$tOrder3="";
$tTest3="";
$tPosition3="";

echo "<tr><td>$tOrder4</td><td>$tTest4</td><td>$tPosition4</td></tr>";
$tOrder4="";
$tTest4="";
$tPosition4="";

echo "<tr><td>$tOrder5</td><td>$tTest5</td><td>$tPosition5</td></tr>";
$tOrder5="";
$tTest5="";
$tPosition5="";

echo "<tr><td>$tOrder6</td><td>$tTest6</td><td>$tPosition6</td></tr>";
$tOrder6="";
$tTest6="";
$tPosition6="";

echo "<tr><td>$tOrder7</td><td>$tTest7</td><td>$tPosition7</td></tr>";
$tOrder7="";
$tTest7="";
$tPosition7="";

echo "<tr><td>$tOrder8</td><td>$tTest8</td><td>$tPosition8</td></tr>";
$tOrder8="";
$tTest8="";
$tPosition8="";

echo "<tr><td>$tOrder9</td><td>$tTest9</td><td>$tPosition9</td></tr>";
$tOrder9="";
$tTest9="";
$tPosition9="";

echo "<tr><td>$tOrder10</td><td>$tTest10</td><td>$tPosition10</td></tr>";
$tOrder10="";
$tTest10="";
$tPosition10="";

echo "<tr><td>$tOrder11</td><td>$tTest11</td><td>$tPosition11</td></tr>";
$tOrder11="";
$tTest11="";
$tPosition11="";

echo "<tr><td>$tOrder12</td><td>$tTest12</td><td>$tPosition12</td></tr>";
$tOrder12="";
$tTest12="";
$tPosition12="";

echo "<tr><td>$tOrder13</td><td>$tTest13</td><td>$tPosition13</td></tr>";
$tOrder13="";
$tTest13="";
$tPosition13="";

echo "<tr><td>$tOrder14</td><td>$tTest14</td><td>$tPosition14</td></tr>";
$tOrder14="";
$tTest14="";
$tPosition14="";

echo "<tr><td>$tOrder15</td><td>$tTest15</td><td>$tPosition15</td></tr>";
$tOrder15="";
$tTest15="";
$tPosition15="";

echo "<tr><td>$tOrder16</td><td>$tTest16</td><td>$tPosition16</td></tr>";
$tOrder16="";
$tTest16="";
$tPosition16="";

echo "<tr><td>$tOrder17</td><td>$tTest17</td><td>$tPosition17</td></tr>";
$tOrder17="";
$tTest17="";
$tPosition17="";

echo "<tr><td>$tOrder18</td><td>$tTest18</td><td>$tPosition18</td></tr>";
$tOrder18="";
$tTest18="";
$tPosition18="";

echo "<tr><td>$tOrder19</td><td>$tTest19</td><td>$tPosition19</td></tr>";
$tOrder19="";
$tTest19="";
$tPosition19="";

echo "<tr><td>$tOrder20</td><td>$tTest20</td><td>$tPosition20</td></tr>";
$tOrder20="";
$tTest20="";
$tPosition20="";

echo "<tr><td>$tOrder21</td><td>$tTest21</td><td>$tPosition21</td></tr>";
$tOrder21="";
$tTest21="";
$tPosition21="";

echo "</table>";
echo "</p><br />";
}

?>
</body>
</html>