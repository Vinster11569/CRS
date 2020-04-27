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

$FeedBackLabel = $SIN1 = $SIN2 = $SIN3 = $SIN4 = $Irritability1 = $Irritability2 = $Irritability3 = $Irritability4 = "";
$Inflammatory = $Mechanical = $Pain = $Resistance = $Arthrogenic = $Myogenic = $Vasculogenic = $Neurogenic = $RedFlag = $YellowFlag = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
	$YellowFlag = test_input($_POST["YellowFlag"]);}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr />
<div class="PageReadableDarkGreen"><h3>Clip XV</h3>
Neurological Tests.<br /></div>
<hr />
<p>
<iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=7e5c84a1-102a-4ea7-bec4-743fb750188f&v=1" width="720" height="405" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe>
</p>
<hr />

<div class="PageReadableBlue"><strong><h2>Section 4 - Clinical and Problem Lists</h2></strong></div>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<div class="PageReadableBlue"><strong><h2>Section 4a: Clinical Reasoning</h2></strong></div>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<div class="PageReadableBlue"><strong>Consider the information you have collected on the whole assessment form and the ideas gathered from the multiple choice questions and objective physical examination findings. Try to pull all the different ideas together to formulate an overall impression as you continue to work through the clinical reasoning form.</strong></div>

<div class="PageReadableBlack"><strong><h3>[<a href="./documents/Clincal Reasoning Form.doc" target="_blank">Clincal Reasoning Form</a>]</h3></strong></div>

<div class="PageReadableBlue"><h3>Question 35</h3>
Use this link to read more about generating a SIN factor.</div>
<div class="PageReadableBlack"><strong><h3>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]</h3></strong></div>
<div class="PageReadableBlue"><h3>Question 35a</h3>
Using all of the information from the whole assessment, estimate the overall severity of Mrs Andrew's condition:</div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<input type="checkbox" name="SIN1" value="Non Irritable">Non Irritable<br />
<input type="checkbox" name="SIN2" value="Mild">Mild<br />
<input type="checkbox" name="SIN3" value="Moderate">Moderate<br />
<input type="checkbox" name="SIN4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><h3>Question 35b</h3>
Using all of the information from the whole assessment, estimate the overall irritability of Mrs Andrew's condition:</div>

<input type="checkbox" name="Irritability1" value="Non Irritable">Non Irritable<br />
<input type="checkbox" name="Irritability2" value="Mild">Mild<br />
<input type="checkbox" name="Irritability3" value="Moderate">Moderate<br />
<input type="checkbox" name="Irritability4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 35c</p>
<p>Using all of the information from the whole assessment, estimate, using a percentage, the overall nature of Mrs Andrew's condition (Please just type the percentages as numbers in the boxes):<br />
Question 35ci<br />
With reference to the overall inflammatory - mechanical nature</p>
<p>Inflammatory&nbsp;<input type="text" size="3" name="Inflammatory" />&nbsp;%<br />
Mechanical&nbsp;<input type="text" size="3" name="Mechanical" />&nbsp;%<br /></p></div>


<div class="PageReadableBlue">Question 35cii<br />
With reference to the overall limiting nature</p>
<p>Pain&nbsp;<input type="text" size="3" name="Pain" />&nbsp;%<br />
Resistance&nbsp;<input type="text" size="3" name="Resistance" />&nbsp;%<br /></p></div>

<div class="PageReadableBlue">Question 35ciii<br />
With reference to the overall structural nature</p>
<p>Arthrogenic&nbsp;<input type="text" size="3" name="Arthrogenic" />&nbsp;%<br />
Myogenic&nbsp;<input type="text" size="3" name="Myogenic" />&nbsp;%<br />
Vasculogenic&nbsp;<input type="text" size="3" name="Vasculogenic" />&nbsp;%<br />
Neurogenic&nbsp;<input type="text" size="3" name="Neurogenic" />&nbsp;%<br /></p></div>

<div class="PageReadableBlue"><h2>Section 4b: Flags</h2>
<p>Question 23: Use this link to read more about Red Flags.</p></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/Red Flags.ppt" target="_blank">Red Flags</a>]</strong></div></p>
<div class="PageReadableBlue"><p>Question 36d<br />
Using all the information from the whole assessment, did you identify any red flags?</p>
<input type="radio" name="RedFlag" value="Yes">Yes<br />
<input type="radio" name="RedFlag" value="No">No<br /></div>


<div class="PageReadableBlue">
<p>Question 36e: Use this link to read more about Yellow Flags.</p></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/Yellow Flags.ppt" target="_blank">Yellow Flags</a>]</strong></div></p>
<div class="PageReadableBlue">Using all the information from the whole assessment, did you identify any yellow flags?</p>
<input type="radio" name="YellowFlag" value="Yes">Yes<br />
<input type="radio" name="YellowFlag" value="No">No<br /></div>

<hr />
<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="ClinicalImpression.php">Next Question.</a></p>
<hr />
</form>
<?php
// Change Label For Feedback Message, depending on whether any answers selected yet or not?


if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!="")) || 
   (isset($Irritability1) && ($Irritability1!="")) ||
   (isset($Irritability2) && ($Irritability2!="")) ||
   (isset($Irritability3) && ($Irritability3!="")) ||
   (isset($Irritability4) && ($Irritability4!=""))){
    $FeedBackLabel = "Your Feedback:";
	
		@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nNeurological Test Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
	
	}
else
   {$FeedBackLabel = "Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";	}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if (isset($SIN1) && $SIN1=="Non Irritable") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN2) && $SIN2=="Mild") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mild – please reconsider your answer referring to the information on ‘Description of Pain'.";
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN3) && $SIN3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Moderate – Well Done - this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN4) && $SIN4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

if (isset($Irritability1) && $Irritability1=="Non Irritable") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability2) && $Irritability2=="Mild") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mild – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	$fOutputText .= $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability3) && $Irritability3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Moderate – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability4) && $Irritability4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	

$Irritability1 = "";
$Irritability2 = "";
$Irritability3 = "";
$Irritability4 = "";
$FeedBack="";	

$SIN1 = "";
$SIN2 = "";
$SIN3 = "";
$SIN4 = "";
$FeedBack="";








if (($Inflammatory!="") && ($Mechanical!="")) {
$fOutputText = "<p><strong>Question 35ci</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Inflammatory=="80") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory 80% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Inflammatory 80%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .="</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

	
    $fOutputText = "<div class=\"";
	if ($Mechanical=="20") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical 20% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Mechanical 20%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
    echo $fOutputText;
    fwrite($fp, $fOutputText);
	

$Inflammatory = "";
$Mechanical = "";
$FeedBack="";}

if (($Pain!="") && ($Resistance!="")) {
$fOutputText = "<p><strong>Question 35cii</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Pain=="100") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Pain 100% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Pain 100%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Resistance=="0") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Resistance 0% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Resistance 0%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

$Pain = "";
$Resistance = "";
$FeedBack="";}

if (($Arthrogenic!="") && ($Myogenic!="") && ($Vasculogenic!="") && ($Neurogenic!="")) {
$fOutputText = "<p><strong>Question 35ciii</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);
    
	$fOutputText = "<div class=\"";
	if ($Arthrogenic=="0") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Arthrogenic 0% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Arthrogenic 0%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
    echo $fOutputText;
    fwrite($fp, $fOutputText);	

    $fOutputText = "<div class=\"";
	if ($Myogenic=="100") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Myogenic 100% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Myogenic 100%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
    echo $fOutputText;
    fwrite($fp, $fOutputText);		

    $fOutputText = "<div class=\"";
	if ($Vasculogenic=="0") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Vasculogenic 0% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Vasculogenic 0%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";	
	echo $fOutputText;
    fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Neurogenic=="0") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Neurogenic 0% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Neurogenic 0%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<strong>$FeedBack</strong>";
    $fOutputText .= "</div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

$Arthrogenic = "";
$Myogenic = "";
$Vasculogenic = "";
$Neurogenic = "";
$FeedBack="";

if (isset($RedFlag) && ($RedFlag!="")) {
$fOutputText = "<p><strong>Question 35d</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}


$fOutputText = "<div class=\"";

if (isset($RedFlag) && $RedFlag=="Yes") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Red Flags’.";}

if (isset($RedFlag) && $RedFlag=="No") {	
		$fOutputText .= "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no red flags identified in the subjective interview.";}
	
	
$fOutputText .= "\">";
$fOutputText .= "<strong>$FeedBack</strong>";
$fOutputText .= "</div>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$RedFlag = "";
$FeedBack="";



if (isset($YellowFlag) && ($YellowFlag!="")) {
$fOutputText = "<p><strong>Question 35e</strong></p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}


$fOutputText = "<div class=\"";

if (isset($YellowFlag) && $YellowFlag=="Yes") {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Yellow Flags’.";}

if (isset($YellowFlag) && $YellowFlag=="No") {	
		$fOutputText .= "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no yellow flags identified in the subjective interview.";}
	
	
$fOutputText .= "\">";
$fOutputText .= "<strong>$FeedBack</strong>";
$fOutputText .= "</div>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$YellowFlag = "";
$FeedBack="";
}
fclose(!fp);
?>
<hr />
</body>
</html>